-- RS OCTAMEDIKA SIMRS - DATABASE INSTALLER (SATU FILE)
-- Import file ini satu kali melalui phpMyAdmin.
-- Seluruh data yang dimasukkan melalui installer adalah data sintetis/demo.
-- Bukan untuk penggunaan klinis/produksi.

CREATE DATABASE IF NOT EXISTS octamedika CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE octamedika;

-- Penyimpanan kompatibilitas prototipe: koleksi JSON disimpan per tabel logis.
-- Bukan skema relasional produksi; jangan gunakan untuk data pasien sungguhan.
CREATE TABLE IF NOT EXISTS app_table_data (
  table_name VARCHAR(64) NOT NULL PRIMARY KEY,
  rows_json LONGTEXT NOT NULL,
  next_id BIGINT UNSIGNED NOT NULL DEFAULT 1,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- ============================================================
-- SKEMA RELASIONAL SIMRS TAHAP 2
-- ============================================================

USE octamedika;

-- Skema relasional generasi kedua. Semua identitas dan data klinis hanya data sintetis.
CREATE TABLE IF NOT EXISTS ref_roles (
 id SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, code VARCHAR(40) NOT NULL UNIQUE, name VARCHAR(100) NOT NULL
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS ref_permissions (
 id SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, code VARCHAR(80) NOT NULL UNIQUE, description VARCHAR(180) NOT NULL
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS role_permissions (
 role_id SMALLINT UNSIGNED NOT NULL, permission_id SMALLINT UNSIGNED NOT NULL,
 PRIMARY KEY(role_id,permission_id), FOREIGN KEY(role_id) REFERENCES ref_roles(id), FOREIGN KEY(permission_id) REFERENCES ref_permissions(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS departments (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, code VARCHAR(30) NOT NULL UNIQUE, name VARCHAR(150) NOT NULL,
 department_type ENUM('POLI','IGD','RAWAT_INAP','PENUNJANG','ADMIN','LAINNYA') NOT NULL DEFAULT 'LAINNYA', active TINYINT(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS staff (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, employee_no VARCHAR(40) NOT NULL UNIQUE, full_name VARCHAR(160) NOT NULL,
 profession ENUM('DOKTER','DOKTER_GIGI','PERAWAT','BIDAN','APOTEKER','ANALIS','RADIOGRAFER','REKAM_MEDIS','PENDAFTARAN','KASIR','MANAJEMEN','ADMIN','LAINNYA') NOT NULL,
 specialty VARCHAR(120) NULL, sip_no VARCHAR(80) NULL, str_no VARCHAR(80) NULL, department_id BIGINT UNSIGNED NULL,
 active TINYINT(1) NOT NULL DEFAULT 1, created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY(department_id) REFERENCES departments(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS app_users (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, staff_id BIGINT UNSIGNED NULL UNIQUE, role_id SMALLINT UNSIGNED NOT NULL,
 username VARCHAR(60) NOT NULL UNIQUE, password_hash VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL DEFAULT 1,
 failed_attempts TINYINT UNSIGNED NOT NULL DEFAULT 0, locked_until DATETIME NULL, last_login DATETIME NULL,
 created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, FOREIGN KEY(staff_id) REFERENCES staff(id), FOREIGN KEY(role_id) REFERENCES ref_roles(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS patients (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, medical_record_no VARCHAR(30) NOT NULL UNIQUE,
 national_id_demo VARCHAR(30) NULL, full_name VARCHAR(160) NOT NULL, birth_date DATE NULL,
 sex ENUM('L','P','X') NOT NULL, phone VARCHAR(30) NULL, address TEXT NULL, blood_type VARCHAR(3) NULL,
 allergy_note TEXT NULL, payer_type ENUM('UMUM','BPJS_SIMULASI','ASURANSI_SIMULASI') NOT NULL DEFAULT 'UMUM',
 created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
 INDEX idx_patient_name(full_name), INDEX idx_patient_nik(national_id_demo)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS doctor_schedules (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, staff_id BIGINT UNSIGNED NOT NULL, department_id BIGINT UNSIGNED NOT NULL,
 weekday TINYINT UNSIGNED NOT NULL, start_time TIME NOT NULL, end_time TIME NOT NULL, quota SMALLINT UNSIGNED NOT NULL DEFAULT 0,
 active TINYINT(1) NOT NULL DEFAULT 1, FOREIGN KEY(staff_id) REFERENCES staff(id), FOREIGN KEY(department_id) REFERENCES departments(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS encounters (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, encounter_no VARCHAR(40) NOT NULL UNIQUE, patient_id BIGINT UNSIGNED NOT NULL,
 department_id BIGINT UNSIGNED NOT NULL, attending_staff_id BIGINT UNSIGNED NULL,
 encounter_type ENUM('IGD','RAWAT_JALAN','RAWAT_INAP') NOT NULL, priority ENUM('RESUSITASI','EMERGENSI','URGENT','NON_URGENT','ELEKTIF') NOT NULL DEFAULT 'NON_URGENT',
 status ENUM('MENUNGGU','TRIASE','DALAM_PELAYANAN','SELESAI','BATAL') NOT NULL DEFAULT 'MENUNGGU',
 arrived_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, closed_at DATETIME NULL,
 created_by BIGINT UNSIGNED NOT NULL, FOREIGN KEY(patient_id) REFERENCES patients(id), FOREIGN KEY(department_id) REFERENCES departments(id),
 FOREIGN KEY(attending_staff_id) REFERENCES staff(id), FOREIGN KEY(created_by) REFERENCES app_users(id), INDEX idx_encounter_status(status,arrived_at)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS triage_assessments (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, encounter_id BIGINT UNSIGNED NOT NULL, assessed_by BIGINT UNSIGNED NOT NULL,
 triage_level ENUM('MERAH','KUNING','HIJAU','HITAM') NOT NULL, chief_complaint TEXT NOT NULL,
 pain_score TINYINT UNSIGNED NULL, systolic SMALLINT UNSIGNED NULL, diastolic SMALLINT UNSIGNED NULL,
 pulse SMALLINT UNSIGNED NULL, respiratory_rate SMALLINT UNSIGNED NULL, temperature DECIMAL(4,1) NULL, oxygen_saturation DECIMAL(5,2) NULL,
 assessed_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, FOREIGN KEY(encounter_id) REFERENCES encounters(id), FOREIGN KEY(assessed_by) REFERENCES app_users(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS clinical_notes (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, encounter_id BIGINT UNSIGNED NOT NULL, author_user_id BIGINT UNSIGNED NOT NULL,
 subjective MEDIUMTEXT NULL, objective MEDIUMTEXT NULL, assessment MEDIUMTEXT NULL, plan MEDIUMTEXT NULL,
 diagnosis_code VARCHAR(12) NULL, diagnosis_text VARCHAR(255) NULL, signed_at DATETIME NULL,
 created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, FOREIGN KEY(encounter_id) REFERENCES encounters(id), FOREIGN KEY(author_user_id) REFERENCES app_users(id),
 INDEX idx_note_encounter(encounter_id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS clinical_observations (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, encounter_id BIGINT UNSIGNED NOT NULL, recorded_by BIGINT UNSIGNED NOT NULL,
 observation_time DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, systolic SMALLINT UNSIGNED NULL, diastolic SMALLINT UNSIGNED NULL,
 pulse SMALLINT UNSIGNED NULL, respiratory_rate SMALLINT UNSIGNED NULL, temperature DECIMAL(4,1) NULL,
 oxygen_saturation DECIMAL(5,2) NULL, weight_kg DECIMAL(6,2) NULL, height_cm DECIMAL(6,2) NULL,
 FOREIGN KEY(encounter_id) REFERENCES encounters(id), FOREIGN KEY(recorded_by) REFERENCES app_users(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS catalog_services (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, code VARCHAR(40) NOT NULL UNIQUE, name VARCHAR(180) NOT NULL,
 service_type ENUM('LAB','RADIOLOGY','PROCEDURE','CONSULT','ROOM','OTHER') NOT NULL, price DECIMAL(14,2) NOT NULL DEFAULT 0, active TINYINT(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS service_orders (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, encounter_id BIGINT UNSIGNED NOT NULL, ordered_by BIGINT UNSIGNED NOT NULL,
 service_id BIGINT UNSIGNED NOT NULL, priority ENUM('ROUTINE','URGENT','STAT') NOT NULL DEFAULT 'ROUTINE',
 status ENUM('ORDERED','ACCEPTED','IN_PROGRESS','COMPLETED','CANCELLED') NOT NULL DEFAULT 'ORDERED',
 clinical_indication TEXT NULL, ordered_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY(encounter_id) REFERENCES encounters(id), FOREIGN KEY(ordered_by) REFERENCES app_users(id), FOREIGN KEY(service_id) REFERENCES catalog_services(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS service_results (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, order_id BIGINT UNSIGNED NOT NULL UNIQUE, result_text MEDIUMTEXT NOT NULL,
 abnormal_flag ENUM('NORMAL','LOW','HIGH','CRITICAL') NOT NULL DEFAULT 'NORMAL', verified_by BIGINT UNSIGNED NULL,
 verified_at DATETIME NULL, created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY(order_id) REFERENCES service_orders(id), FOREIGN KEY(verified_by) REFERENCES app_users(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS medication_catalog (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, sku VARCHAR(40) NOT NULL UNIQUE, name VARCHAR(180) NOT NULL,
 strength VARCHAR(80) NULL, dosage_form VARCHAR(80) NULL, unit VARCHAR(30) NOT NULL DEFAULT 'tablet',
 stock_qty DECIMAL(12,2) NOT NULL DEFAULT 0, reorder_level DECIMAL(12,2) NOT NULL DEFAULT 0,
 unit_price DECIMAL(14,2) NOT NULL DEFAULT 0, active TINYINT(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS prescriptions (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, encounter_id BIGINT UNSIGNED NOT NULL, prescriber_user_id BIGINT UNSIGNED NOT NULL,
 status ENUM('DRAFT','SENT','VERIFIED','PARTIALLY_DISPENSED','DISPENSED','CANCELLED') NOT NULL DEFAULT 'SENT',
 notes TEXT NULL, created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY(encounter_id) REFERENCES encounters(id), FOREIGN KEY(prescriber_user_id) REFERENCES app_users(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS prescription_items (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, prescription_id BIGINT UNSIGNED NOT NULL, medication_id BIGINT UNSIGNED NOT NULL,
 dose VARCHAR(100) NOT NULL, route VARCHAR(50) NOT NULL, frequency VARCHAR(100) NOT NULL, duration_days SMALLINT UNSIGNED NULL,
 quantity DECIMAL(12,2) NOT NULL, instructions TEXT NULL, dispensed_qty DECIMAL(12,2) NOT NULL DEFAULT 0,
 FOREIGN KEY(prescription_id) REFERENCES prescriptions(id), FOREIGN KEY(medication_id) REFERENCES medication_catalog(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS bed_units (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, code VARCHAR(30) NOT NULL UNIQUE, ward_name VARCHAR(100) NOT NULL,
 room_class ENUM('VIP','VVIP','KELAS_1','KELAS_2','KELAS_3','ICU','ICCU','HCU','NICU','PICU','ISOLASI','VK','PERINATOLOGI') NOT NULL,
 bed_status ENUM('AVAILABLE','OCCUPIED','CLEANING','MAINTENANCE') NOT NULL DEFAULT 'AVAILABLE', daily_rate DECIMAL(14,2) NOT NULL DEFAULT 0
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS admissions (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, encounter_id BIGINT UNSIGNED NOT NULL, bed_id BIGINT UNSIGNED NOT NULL,
 admitted_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, discharged_at DATETIME NULL, admission_status ENUM('ACTIVE','DISCHARGED','TRANSFERRED') NOT NULL DEFAULT 'ACTIVE',
 discharge_summary MEDIUMTEXT NULL, admitted_by BIGINT UNSIGNED NOT NULL,
 FOREIGN KEY(encounter_id) REFERENCES encounters(id), FOREIGN KEY(bed_id) REFERENCES bed_units(id), FOREIGN KEY(admitted_by) REFERENCES app_users(id),
 INDEX idx_admission_status(admission_status)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS invoices (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, invoice_no VARCHAR(40) NOT NULL UNIQUE, encounter_id BIGINT UNSIGNED NOT NULL,
 patient_id BIGINT UNSIGNED NOT NULL, subtotal DECIMAL(14,2) NOT NULL DEFAULT 0, discount DECIMAL(14,2) NOT NULL DEFAULT 0,
 payer_amount DECIMAL(14,2) NOT NULL DEFAULT 0, patient_amount DECIMAL(14,2) NOT NULL DEFAULT 0,
 invoice_status ENUM('DRAFT','ISSUED','PARTIAL','PAID','VOID') NOT NULL DEFAULT 'DRAFT', issued_at DATETIME NULL,
 created_by BIGINT UNSIGNED NOT NULL, FOREIGN KEY(encounter_id) REFERENCES encounters(id), FOREIGN KEY(patient_id) REFERENCES patients(id), FOREIGN KEY(created_by) REFERENCES app_users(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS invoice_items (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, invoice_id BIGINT UNSIGNED NOT NULL, description VARCHAR(255) NOT NULL,
 quantity DECIMAL(12,2) NOT NULL DEFAULT 1, unit_price DECIMAL(14,2) NOT NULL, line_total DECIMAL(14,2) NOT NULL,
 FOREIGN KEY(invoice_id) REFERENCES invoices(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS payments (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, invoice_id BIGINT UNSIGNED NOT NULL, amount DECIMAL(14,2) NOT NULL,
 payment_method ENUM('CASH','DEBIT','CREDIT','TRANSFER','QRIS','BPJS_SIMULASI','ASURANSI_SIMULASI') NOT NULL,
 reference_no VARCHAR(100) NULL, received_by BIGINT UNSIGNED NOT NULL, paid_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY(invoice_id) REFERENCES invoices(id), FOREIGN KEY(received_by) REFERENCES app_users(id)
) ENGINE=InnoDB;
CREATE TABLE IF NOT EXISTS audit_events (
 id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, user_id BIGINT UNSIGNED NULL, action VARCHAR(80) NOT NULL,
 object_type VARCHAR(80) NOT NULL, object_id BIGINT UNSIGNED NULL, ip_address VARCHAR(45) NULL,
 user_agent VARCHAR(255) NULL, event_data JSON NULL, created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY(user_id) REFERENCES app_users(id), INDEX idx_audit_time(created_at), INDEX idx_audit_object(object_type,object_id)
) ENGINE=InnoDB;

INSERT IGNORE INTO ref_roles(code,name) VALUES
('admin','Administrator SIMRS'),('pendaftaran','Petugas Pendaftaran'),('dokter','Dokter'),('perawat','Perawat/Bidan'),
('lab','Analis Laboratorium'),('radiologi','Radiografer/Dokter Radiologi'),('apoteker','Apoteker'),('kasir','Kasir'),('rekammedis','Petugas Rekam Medis'),('direktur','Manajemen/Direktur');
INSERT IGNORE INTO ref_permissions(code,description) VALUES
('dashboard.read','Melihat dashboard'),('patient.read','Melihat data pasien'),('patient.write','Membuat/memperbarui pasien'),
('encounter.write','Membuat kunjungan'),('triage.write','Melakukan triase'),('clinical.write','Membuat catatan klinis'),
('clinical.sign','Menandatangani catatan klinis'),('order.write','Membuat order penunjang'),('result.write','Mengisi hasil penunjang'),
('prescription.write','Membuat resep'),('pharmacy.dispense','Menyerahkan obat'),('admission.write','Mengelola rawat inap'),
('billing.write','Membuat tagihan'),('payment.write','Mencatat pembayaran'),('staff.manage','Mengelola akun/staf'),('audit.read','Melihat audit trail');
-- Hak akses minimum berbasis tugas. Admin tidak otomatis diberi akses mengubah isi catatan klinis.
INSERT IGNORE INTO role_permissions(role_id,permission_id)
SELECT r.id,p.id FROM ref_roles r CROSS JOIN ref_permissions p WHERE
(r.code='admin' AND p.code IN ('dashboard.read','patient.read','patient.write','staff.manage','audit.read')) OR
(r.code='pendaftaran' AND p.code IN ('dashboard.read','patient.read','patient.write','encounter.write')) OR
(r.code='dokter' AND p.code IN ('dashboard.read','patient.read','clinical.write','clinical.sign','order.write','prescription.write','admission.write')) OR
(r.code='perawat' AND p.code IN ('dashboard.read','patient.read','triage.write')) OR
(r.code='lab' AND p.code IN ('dashboard.read','patient.read','result.write')) OR
(r.code='radiologi' AND p.code IN ('dashboard.read','patient.read','result.write')) OR
(r.code='apoteker' AND p.code IN ('dashboard.read','patient.read','pharmacy.dispense')) OR
(r.code='kasir' AND p.code IN ('dashboard.read','patient.read','billing.write','payment.write')) OR
(r.code='rekammedis' AND p.code IN ('dashboard.read','patient.read')) OR
(r.code='direktur' AND p.code IN ('dashboard.read','patient.read','audit.read'));
