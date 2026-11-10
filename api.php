<?php
declare(strict_types=1);

/**
 * OctaMedika SIMRS - API MySQL
 * Penyimpanan data aplikasi untuk prototipe/demo.
 * Semua tabel logis dari frontend disimpan sebagai JSON di app_table_data.
 * Jangan gunakan untuk data pasien sungguhan/produksi.
 */

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('X-Content-Type-Options: nosniff');

function respond(int $status, array $payload): void {
    http_response_code($status);
    echo json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

function db(): PDO {
    static $pdo = null;
    if ($pdo instanceof PDO) return $pdo;

    // Dapat dioverride melalui environment variable bila konfigurasi XAMPP berbeda.
    $host = getenv('OCTAMEDIKA_DB_HOST') ?: '127.0.0.1';
    $port = getenv('OCTAMEDIKA_DB_PORT') ?: '3306';
    $name = getenv('OCTAMEDIKA_DB_NAME') ?: 'octamedika';
    $user = getenv('OCTAMEDIKA_DB_USER') ?: 'root';
    $pass = getenv('OCTAMEDIKA_DB_PASS');
    if ($pass === false) $pass = '';

    // Opsional: gunakan config/database.php jika project sudah memilikinya.
    $configFile = __DIR__ . '/config/database.php';
    if (is_file($configFile)) {
        $cfg = require $configFile;
        if (is_array($cfg)) {
            $host = $cfg['host'] ?? $host;
            $port = (string)($cfg['port'] ?? $port);
            $name = $cfg['database'] ?? $cfg['dbname'] ?? $name;
            $user = $cfg['username'] ?? $cfg['user'] ?? $user;
            $pass = $cfg['password'] ?? $pass;
        }
    }

    $dsn = "mysql:host={$host};port={$port};dbname={$name};charset=utf8mb4";
    $pdo = new PDO($dsn, (string)$user, (string)$pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    // Pastikan tabel penyimpanan kompatibilitas tersedia.
    $pdo->exec("CREATE TABLE IF NOT EXISTS app_table_data (
        table_name VARCHAR(64) NOT NULL PRIMARY KEY,
        rows_json LONGTEXT NOT NULL,
        next_id BIGINT UNSIGNED NOT NULL DEFAULT 1,
        updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    return $pdo;
}

$allowedTables = [
    'poli','kamar','icd10','obat','barang','pemeriksaan','tindakan_master',
    'modul','role','hak_akses','pegawai','log_aktivitas','pasien',
    'jadwal_dokter','kunjungan','appointment','rekam_medis','order_penunjang',
    'resep','resep_item','tindakan','observasi','rawat_inap','mutasi_stok',
    'tagihan','app_meta'
];

try {
    $pdo = db();
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

    if ($method === 'GET') {
        $stmt = $pdo->query('SELECT table_name, rows_json, next_id FROM app_table_data');
        $data = [];
        foreach ($stmt->fetchAll() as $row) {
            if (!in_array($row['table_name'], $allowedTables, true)) continue;
            $rows = json_decode($row['rows_json'], true);
            if (!is_array($rows)) $rows = [];
            $data[$row['table_name']] = [
                'rows' => $rows,
                'next' => max(1, (int)$row['next_id'])
            ];
        }
        respond(200, ['ok' => true, 'data' => $data]);
    }

    if ($method !== 'POST') {
        header('Allow: GET, POST');
        respond(405, ['ok' => false, 'error' => 'Metode tidak didukung.']);
    }

    $raw = file_get_contents('php://input');
    if ($raw === false || strlen($raw) > 12 * 1024 * 1024) {
        respond(413, ['ok' => false, 'error' => 'Ukuran data terlalu besar atau tidak terbaca.']);
    }
    $input = json_decode($raw, true);
    if (!is_array($input)) respond(400, ['ok' => false, 'error' => 'Format JSON tidak valid.']);

    $table = $input['table'] ?? null;
    $rows = $input['rows'] ?? null;
    $next = $input['next'] ?? 1;

    if (!is_string($table) || !in_array($table, $allowedTables, true)) {
        respond(400, ['ok' => false, 'error' => 'Nama tabel tidak diizinkan.']);
    }
    if (!is_array($rows) || !is_numeric($next) || (int)$next < 1) {
        respond(400, ['ok' => false, 'error' => 'Struktur data tabel tidak valid.']);
    }

    // Batasi jumlah baris dan pastikan setiap baris berupa object/array.
    if (count($rows) > 20000) respond(413, ['ok' => false, 'error' => 'Jumlah data melewati batas demo.']);
    foreach ($rows as $row) {
        if (!is_array($row)) respond(400, ['ok' => false, 'error' => 'Baris data harus berupa object JSON.']);
    }

    $json = json_encode(array_values($rows), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    if ($json === false) respond(400, ['ok' => false, 'error' => 'Data tidak dapat dikonversi ke JSON.']);

    $stmt = $pdo->prepare(
        'INSERT INTO app_table_data (table_name, rows_json, next_id)
         VALUES (:table_name, :rows_json, :next_id)
         ON DUPLICATE KEY UPDATE rows_json = VALUES(rows_json), next_id = VALUES(next_id)'
    );
    $stmt->execute([
        ':table_name' => $table,
        ':rows_json' => $json,
        ':next_id' => (int)$next
    ]);

    respond(200, [
        'ok' => true,
        'table' => $table,
        'count' => count($rows),
        'next' => (int)$next
    ]);
} catch (Throwable $e) {
    error_log('[OctaMedika API] ' . $e->getMessage());
    $message = 'Terjadi kesalahan pada koneksi atau penyimpanan MySQL.';
    if (getenv('OCTAMEDIKA_DEBUG') === '1') $message .= ' ' . $e->getMessage();
    respond(500, ['ok' => false, 'error' => $message]);
}
