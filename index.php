<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OctaMedika SIMRS</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
/* SIMRS OctaMedika — tema navy/biru rumah sakit (Poppins + Inter) */
:root{
  --navy:#0E2A47; --primary:#1E63B8; --primary-dark:#154887; --primary-soft:#E7F0FB;
  --bg:#F2F4F7; --surface:#fff; --ink:#10233D; --muted:#667085; --line:#E3E7ED; --line-strong:#C9D2DE;
  --green:#1A7F4E; --green-soft:#E4F5EC; --amber:#B4740B; --amber-soft:#FBF0DC; --red:#C22B2B; --red-soft:#FBE7E7;
  --teal:#0B7F78; --teal-soft:#E2F4F2; --violet:#5B3FA0; --violet-soft:#EEE9FA;
  --r-s:8px; --r-m:14px; --shadow:0 10px 30px rgba(14,42,71,.08);
}
*{box-sizing:border-box}
html,body{height:100%}
body{margin:0;background:var(--bg);color:var(--ink);font-family:"Inter",system-ui,-apple-system,"Segoe UI",sans-serif;font-size:14.5px;-webkit-font-smoothing:antialiased}
h1,h2,h3,h4{font-family:"Poppins","Inter",sans-serif;margin:0;color:var(--ink)}
a{color:var(--primary);text-decoration:none}
a:hover{text-decoration:underline}
button,input,select,textarea{font:inherit}
button{cursor:pointer}
svg{display:block}
.ico{width:18px;height:18px;fill:none;stroke:currentColor;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;flex:none}
.muted{color:var(--muted)}
.small{font-size:12.5px}
.mono{font-family:ui-monospace,Consolas,monospace}
.right{text-align:right}
.nowrap{white-space:nowrap}
.hidden{display:none!important}

/* ---------- brand ---------- */
.brand-mark{width:42px;height:42px;border-radius:12px;background:var(--navy);display:grid;place-items:center;flex:none}
.brand-mark svg{width:24px;height:24px}
.mi-ico{width:32px;height:32px;border-radius:9px;display:grid;place-items:center;flex:none}
.mi-ico .ico{width:17px;height:17px}
.g-admin{background:var(--violet-soft);color:var(--violet)}
.g-front{background:var(--teal-soft);color:var(--teal)}
.g-klinis{background:var(--primary-soft);color:var(--primary)}
.g-penunjang{background:var(--amber-soft);color:var(--amber)}
.g-logistik{background:var(--green-soft);color:var(--green)}
.g-manajemen{background:var(--red-soft);color:var(--red)}

/* ---------- tombol & form ---------- */
.btn{border:0;border-radius:10px;padding:10px 16px;font-weight:600;font-size:14px;display:inline-flex;align-items:center;justify-content:center;gap:7px;white-space:nowrap;background:var(--primary);color:#fff;text-decoration:none!important;line-height:1.2}
.btn:hover{background:var(--primary-dark)}
.btn .ico{width:16px;height:16px}
.btn.ghost{background:#fff;color:var(--ink);border:1px solid var(--line-strong)}
.btn.ghost:hover{border-color:var(--primary);color:var(--primary)}
.btn.green{background:var(--green)} .btn.green:hover{background:#13633c}
.btn.red{background:var(--red)} .btn.red:hover{background:#9c1f1f}
.btn.amber{background:var(--amber)} .btn.amber:hover{background:#8e5b08}
.btn.sm{padding:6px 11px;font-size:12.5px;border-radius:8px}
.btn.block{width:100%;padding:13px;font-size:15px}
.btn[disabled]{opacity:.5;cursor:not-allowed}
.actions{display:flex;gap:6px;flex-wrap:wrap;align-items:center}
.actions form{display:inline}
label.lbl,.fld>label{display:block;font-size:12.5px;font-weight:600;color:#41566A;margin-bottom:6px}
.fld{margin-bottom:14px}
.fld .hint{font-size:11.5px;color:var(--muted);margin-top:4px}
.fld .err-t{font-size:12px;color:var(--red);margin-top:4px}
input[type=text],input[type=password],input[type=date],input[type=time],input[type=number],input[type=email],input[type=tel],input[type=search],input[type=datetime-local],select,textarea{
  width:100%;border:1px solid var(--line-strong);border-radius:10px;padding:10px 12px;font-size:14px;color:var(--ink);background:#fff;outline:none;transition:border .15s,box-shadow .15s}
textarea{resize:vertical;min-height:70px;line-height:1.5}
input:focus,select:focus,textarea:focus{border-color:var(--primary);box-shadow:0 0 0 3px rgba(30,99,184,.15)}
input[readonly]{background:var(--bg)}
.is-err{border-color:var(--red)!important}
.grid{display:grid;gap:16px}
.g2{grid-template-columns:repeat(2,minmax(0,1fr))}
.g3{grid-template-columns:repeat(3,minmax(0,1fr))}
.g4{grid-template-columns:repeat(4,minmax(0,1fr))}
.g6{grid-template-columns:repeat(6,minmax(0,1fr))}
.span2{grid-column:span 2}
.span3{grid-column:span 3}
.full{grid-column:1/-1}
.check{display:flex;gap:8px;align-items:center;font-size:13.5px;padding:6px 0}
.check input{width:16px;height:16px}
.checks{display:grid;grid-template-columns:repeat(auto-fill,minmax(210px,1fr));gap:2px 12px}
.inline-form{display:flex;gap:8px;align-items:center;flex-wrap:wrap}
.inline-form input,.inline-form select{width:auto;min-width:160px}

/* ---------- alert ---------- */
.alert{border-radius:10px;padding:11px 14px;font-size:13.5px;margin-bottom:14px;border:1px solid}
.alert.ok{background:var(--green-soft);color:var(--green);border-color:#C6E9D5}
.alert.err{background:var(--red-soft);color:var(--red);border-color:#F0CACA}
.alert.info{background:var(--primary-soft);color:var(--primary-dark);border-color:#CADEF5}
.alert.warn{background:var(--amber-soft);color:#7a4d05;border-color:#EFD9AE}
.allergy{background:var(--red);color:#fff;border-radius:12px;padding:11px 16px;font-weight:700;margin-bottom:12px;letter-spacing:.02em}

/* ---------- badge ---------- */
.badge{display:inline-block;font-size:11.5px;font-weight:600;padding:3px 9px;border-radius:999px;white-space:nowrap;vertical-align:middle}
.b-green{background:var(--green-soft);color:var(--green)}
.b-amber{background:var(--amber-soft);color:var(--amber)}
.b-red{background:var(--red-soft);color:var(--red)}
.b-blue{background:var(--primary-soft);color:var(--primary-dark)}
.b-violet{background:var(--violet-soft);color:var(--violet)}
.b-gray{background:#EEF1F5;color:#4b5a70}
.b-dark{background:#1d2633;color:#fff}
.role-chip{display:inline-block;background:var(--primary-soft);color:var(--primary-dark);padding:3px 10px;border-radius:999px;font-size:12px;font-weight:600;white-space:nowrap}

/* ---------- login & halaman publik ---------- */
.auth-page{min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:32px 16px;background:linear-gradient(160deg,#E4EEFA 0%,#F2F4F7 55%,#E7F0FB 100%)}
.auth-wrap{width:100%;max-width:440px}
.auth-wrap.wide{max-width:760px}
.auth-card{background:#fff;border:1px solid var(--line);border-radius:18px;padding:32px 30px 26px;box-shadow:0 20px 50px rgba(14,42,71,.10)}
.auth-logo{display:flex;flex-direction:column;align-items:center;text-align:center;gap:4px;margin-bottom:22px;padding-bottom:20px;border-bottom:1px solid var(--line)}
.auth-logo .brand-mark{width:58px;height:58px;border-radius:16px;margin-bottom:10px}
.auth-logo .brand-mark svg{width:32px;height:32px}
.auth-logo strong{font-family:"Poppins";font-size:21px;color:var(--navy)}
.auth-logo span{font-size:13px;color:var(--muted)}
.auth-card h2{font-size:20px;margin-bottom:4px}
.auth-card .lead{color:var(--muted);margin:0 0 20px;font-size:14px}
.inp{position:relative}
.inp>.ico{position:absolute;left:13px;top:50%;transform:translateY(-50%);color:#8a98ab}
.inp input{padding-left:40px;padding-right:44px;font-size:15px;padding-top:12px;padding-bottom:12px}
.eye{position:absolute;right:6px;top:50%;transform:translateY(-50%);border:0;background:none;color:#7b8aa0;padding:8px;border-radius:8px}
.eye:hover{background:var(--bg);color:var(--ink)}
.caps{font-size:12px;color:var(--amber);margin-top:6px}
.auth-links{margin-top:16px;text-align:center;font-size:13.5px}
.auth-help{margin-top:16px;font-size:12.5px;color:var(--muted);line-height:1.6}
.auth-copy{margin-top:18px;font-size:12px;color:var(--muted);text-align:center;max-width:720px;line-height:1.6}
.demo{margin-top:18px;border:1px solid var(--line);border-radius:12px;background:#FAFBFC}
.demo summary{cursor:pointer;padding:12px 14px;font-size:13px;font-weight:600;color:var(--primary-dark);list-style:none;display:flex;justify-content:space-between;align-items:center}
.demo summary::-webkit-details-marker{display:none}
.demo summary::after{content:"＋";color:var(--muted)}
.demo[open] summary::after{content:"－"}
.demo-list{padding:0 8px 10px;display:grid;gap:2px;max-height:320px;overflow:auto}
.demo-row{display:grid;grid-template-columns:1fr 1fr;gap:2px 10px;align-items:center;text-align:left;border:0;background:none;border-radius:8px;padding:7px 8px;font-size:12.5px;color:var(--ink);width:100%}
.demo-row:hover{background:var(--primary-soft)}
.demo-row b{font-weight:600}
.demo-row code{font-family:ui-monospace,Consolas,monospace;font-size:12px;color:#344054}
.demo-row span{color:var(--muted);font-size:11.5px;grid-column:1/-1}

/* ---------- kerangka aplikasi ---------- */
.app{min-height:100vh;display:flex}
.side{width:268px;flex:none;background:#fff;border-right:1px solid var(--line);display:flex;flex-direction:column;position:sticky;top:0;height:100vh;z-index:40}
.side-brand{height:64px;display:flex;align-items:center;gap:11px;padding:0 16px;border-bottom:1px solid var(--line);flex:none}
.side-brand .brand-mark{width:36px;height:36px;border-radius:10px}
.side-brand .brand-mark svg{width:21px;height:21px}
.side-brand strong{font-family:"Poppins";font-size:15px;display:block;line-height:1.2;white-space:nowrap}
.side-brand span{font-size:11px;color:var(--muted);white-space:nowrap}
.side-user{margin:14px 12px 4px;padding:12px;border-radius:12px;background:linear-gradient(135deg,#0E2A47,#1E4F8C);color:#fff;display:flex;gap:11px;align-items:center;flex:none}
.avatar{width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,.18);display:grid;place-items:center;font-family:"Poppins";font-weight:700;font-size:13px;flex:none}
.avatar.lg{width:52px;height:52px;font-size:17px;background:var(--navy);color:#fff}
.side-user strong{display:block;font-size:13px;line-height:1.3}
.side-user small{display:block;font-size:11.5px;color:rgba(255,255,255,.75);margin-top:2px}
.side-user .u-txt{min-width:0}
.side-user .u-txt *{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.side-nav{flex:1;overflow-y:auto;padding:4px 10px 10px}
.nav-grp{font-size:10.5px;text-transform:uppercase;letter-spacing:.08em;color:#8a96a8;font-weight:700;padding:16px 10px 6px;white-space:nowrap}
.nav-it{display:flex;align-items:center;gap:11px;width:100%;padding:6px 9px;border-radius:10px;border:0;background:none;color:#2b3a52;font-size:13.5px;font-weight:500;text-align:left;margin:1px 0;text-decoration:none!important}
.nav-it .mi-ico{width:30px;height:30px;border-radius:8px}
.nav-it .lbl{flex:1;min-width:0;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.nav-it:hover{background:var(--bg)}
.nav-it.cur{background:var(--primary-soft);color:var(--primary-dark);font-weight:600}
.nav-it .tag{font-size:10px;font-weight:700;background:var(--navy);color:#fff;padding:2px 7px;border-radius:999px;flex:none}
.side-foot{border-top:1px solid var(--line);padding:10px;flex:none;display:grid;gap:2px}
.side-foot .nav-it{color:var(--muted)}
.side-foot .logout{color:var(--red)}
.side-foot .logout:hover{background:var(--red-soft)}
.plain-ico{width:30px;height:30px;display:grid;place-items:center;flex:none}
.main{flex:1;min-width:0;display:flex;flex-direction:column}
.topbar{height:64px;flex:none;background:#fff;border-bottom:1px solid var(--line);display:flex;align-items:center;gap:12px;padding:0 22px;position:sticky;top:0;z-index:30}
.icon-btn{width:38px;height:38px;border-radius:10px;border:1px solid var(--line);background:#fff;display:none;place-items:center;color:var(--ink);flex:none}
.tb-title{min-width:0;display:flex;align-items:center;gap:11px}
.tb-title .mi-ico{width:36px;height:36px;border-radius:10px}
.tb-title .t{min-width:0}
.tb-title strong{display:block;font-family:"Poppins";font-size:16px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.tb-title small{display:block;font-size:12px;color:var(--muted);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.tb-spacer{flex:1}
.clock{font-size:12.5px;color:var(--muted);text-align:right;line-height:1.3;white-space:nowrap}
.clock b{display:block;color:var(--ink);font-size:14px}
.content{flex:1;padding:24px 26px 40px;max-width:1320px;width:100%}
.foot{padding:14px 26px 22px;font-size:11.5px;color:var(--muted);line-height:1.5}
.backdrop{display:none}

/* ---------- komponen konten ---------- */
.card{background:#fff;border:1px solid var(--line);border-radius:var(--r-m);padding:20px 22px;margin-bottom:16px}
.card>h2,.card>h3,.card-h h2,.card-h h3{font-size:16px;margin-bottom:4px}
.card .sub{color:var(--muted);font-size:13px;margin:0 0 14px}
.card-h{display:flex;justify-content:space-between;align-items:center;gap:12px;flex-wrap:wrap;margin-bottom:14px}
.card-h .sub{margin:2px 0 0}
.card.flush{padding:0;overflow:hidden}
.card.flush .card-h{padding:16px 20px 0}
.page-head{display:flex;justify-content:space-between;align-items:flex-end;gap:12px;flex-wrap:wrap;margin-bottom:18px}
.page-head h1{font-size:22px}
.page-head p{margin:4px 0 0;color:var(--muted)}
.stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:14px;margin-bottom:18px}
.stat{background:#fff;border:1px solid var(--line);border-radius:var(--r-m);padding:16px 18px}
.stat .l{font-size:12.5px;color:var(--muted);font-weight:600}
.stat .v{font-family:"Poppins";font-size:28px;font-weight:700;margin-top:4px;color:var(--navy)}
.stat .v.blue{color:var(--primary)} .stat .v.amber{color:var(--amber)} .stat .v.green{color:var(--green)} .stat .v.red{color:var(--red)} .stat .v.violet{color:var(--violet)}
.stat .s{font-size:12px;color:var(--muted);margin-top:2px}
.tabs{display:flex;gap:4px;border-bottom:1px solid var(--line);margin-bottom:18px;overflow-x:auto}
.tabs a{padding:10px 14px;font-size:13.5px;font-weight:600;color:var(--muted);border-bottom:2px solid transparent;white-space:nowrap;text-decoration:none!important;margin-bottom:-1px}
.tabs a:hover{color:var(--ink)}
.tabs a.on{color:var(--primary-dark);border-bottom-color:var(--primary)}
.tbl-wrap{overflow-x:auto}
table.t{width:100%;border-collapse:collapse;font-size:13.5px}
table.t th{text-align:left;font-size:11.5px;text-transform:uppercase;letter-spacing:.04em;color:#fff;background:var(--navy);padding:10px 12px;white-space:nowrap;font-weight:600}
table.t th:first-child{border-top-left-radius:8px} table.t th:last-child{border-top-right-radius:8px}
table.t td{padding:10px 12px;border-bottom:1px solid var(--line);vertical-align:middle}
table.t tr:hover td{background:#F8FAFD}
table.t td.empty{text-align:center;color:var(--muted);padding:28px}
table.t tr.low td{background:#FFF7F7}
.card.flush table.t th{border-radius:0}
.card.flush .tbl-wrap{padding:0}
td .sm-line{display:block;font-size:12px;color:var(--muted)}
.kv{display:grid;grid-template-columns:150px 1fr;gap:6px 12px;font-size:13.5px}
.kv dt{color:var(--muted)} .kv dd{margin:0;font-weight:500}
.pcard{display:flex;justify-content:space-between;gap:18px;flex-wrap:wrap;align-items:center}
.pc-main{display:flex;gap:14px;align-items:center}
.pc-main h2{font-size:18px}
.pc-meta{display:flex;gap:22px;flex-wrap:wrap}
.pc-meta span{display:block;font-size:11.5px;color:var(--muted);font-weight:600;margin-bottom:3px}
.pc-meta b{font-weight:600;font-size:13.5px}
.soap-lbl{display:flex;align-items:center;gap:8px}
.soap-lbl i{font-style:normal;width:24px;height:24px;border-radius:7px;background:var(--navy);color:#fff;display:grid;place-items:center;font-size:12px;font-weight:700}
.icd-chips{display:flex;flex-wrap:wrap;gap:5px}
.icd-chips button{font-size:11.5px;background:var(--bg);border:1px solid var(--line);border-radius:7px;padding:4px 8px;color:#344054}
.icd-chips button:hover{background:var(--primary-soft);color:var(--primary-dark);border-color:#CADEF5}
.hist{border:1px solid var(--line);border-radius:10px;margin-bottom:8px}
.hist summary{padding:10px 14px;cursor:pointer;font-weight:600;font-size:13.5px;display:flex;gap:10px;align-items:center;flex-wrap:wrap}
.hist .hb{padding:4px 16px 14px;font-size:13.5px;line-height:1.55}
.hist .hb p{margin:6px 0}
.bar-row{display:grid;grid-template-columns:170px 1fr 60px;gap:10px;align-items:center;font-size:13px;margin-bottom:8px}
.bar{height:10px;background:var(--bg);border-radius:99px;overflow:hidden}
.bar i{display:block;height:100%;background:linear-gradient(90deg,#6FA6E6,#1E63B8);border-radius:99px}
.beds{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:12px}
.bed{border:1px solid var(--line);border-radius:12px;padding:14px;background:#fff}
.bed h4{font-size:14px}
.bed .meter{height:8px;background:var(--bg);border-radius:99px;margin:10px 0 6px;overflow:hidden}
.bed .meter i{display:block;height:100%;background:var(--primary)}
.bed.full .meter i{background:var(--red)}
.welcome{background:linear-gradient(120deg,#fff 0%,#EEF4FC 100%);border:1px solid var(--line);border-radius:18px;padding:24px 26px;display:flex;justify-content:space-between;gap:24px;align-items:center;flex-wrap:wrap;margin-bottom:6px}
.welcome .eyebrow{font-size:12px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--primary)}
.welcome h1{font-size:clamp(21px,2.4vw,27px);margin:6px 0}
.welcome p{margin:0;color:var(--muted);max-width:640px;line-height:1.55}
.welcome-meta{display:flex;gap:12px;flex-wrap:wrap}
.meta-box{background:#fff;border:1px solid var(--line);border-radius:12px;padding:12px 16px;min-width:140px}
.meta-box .l{font-size:11.5px;color:var(--muted);font-weight:600}
.meta-box .v{font-weight:700;margin-top:4px}
.section-title{display:flex;align-items:baseline;justify-content:space-between;margin:24px 0 12px;gap:12px;flex-wrap:wrap}
.section-title h2{font-size:16px}
.section-title span{font-size:12.5px;color:var(--muted)}
.job-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:14px}
.job{background:#fff;border:1px solid var(--line);border-radius:var(--r-m);padding:18px 20px;display:flex;flex-direction:column;gap:10px}
.job.main-job{border-color:#bcd3f0;box-shadow:0 0 0 3px var(--primary-soft)}
.job .head{display:flex;align-items:center;gap:12px}
.job .mi-ico{width:42px;height:42px;border-radius:12px}
.job .mi-ico .ico{width:21px;height:21px}
.job h3{font-size:15px;font-weight:600;line-height:1.3}
.job .grp{font-size:12px;color:var(--muted)}
.job p{margin:0;color:var(--muted);font-size:13px;line-height:1.5}
.job .foot{display:flex;justify-content:space-between;align-items:center;margin-top:auto;padding:4px 0 0}
.tag-main{font-size:11px;font-weight:700;background:var(--navy);color:#fff;padding:3px 9px;border-radius:999px}
.role-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(250px,1fr));gap:12px}
.role-box{border:1px solid var(--line);border-radius:12px;padding:14px 16px;background:#fff}
.role-box h4{font-size:14px;display:flex;justify-content:space-between;gap:8px;align-items:center}
.role-box ul{margin:8px 0 0;padding:0;list-style:none;display:grid;gap:5px}
.role-box li{font-size:13px;display:flex;gap:8px;align-items:center}
.role-box li .avatar{width:26px;height:26px;font-size:10.5px;background:var(--primary-soft);color:var(--primary-dark)}
.role-box .none{font-size:12.5px;color:var(--muted)}
.row-gap{display:flex;gap:16px;flex-wrap:wrap}
.row-gap>*{flex:1;min-width:280px}
.receipt{max-width:640px}
.total-row td{font-weight:700;font-size:15px;background:var(--bg)}

/* ---------- modal konfirmasi ---------- */
.modal-bg{position:fixed;inset:0;background:rgba(8,27,45,.5);display:grid;place-items:center;z-index:90;padding:16px}
.modal{background:#fff;border-radius:16px;padding:24px;width:min(420px,100%);box-shadow:0 24px 60px rgba(0,0,0,.25)}
.modal h3{font-size:18px;margin-bottom:8px}
.modal p{color:var(--muted);margin:0 0 20px;line-height:1.55}
.modal .row{display:flex;gap:10px;justify-content:flex-end}

/* ---------- responsif ---------- */
@media(max-width:1100px){ .g4{grid-template-columns:repeat(2,minmax(0,1fr))} .g6{grid-template-columns:repeat(3,minmax(0,1fr))} }
@media(max-width:900px){
  .side{position:fixed;inset:0 auto 0 0;transform:translateX(-100%);transition:transform .2s ease;box-shadow:0 20px 60px rgba(0,0,0,.25)}
  .menu-open .side{transform:none}
  .menu-open .backdrop{display:block;position:fixed;inset:0;background:rgba(8,27,45,.45);z-index:35}
  .icon-btn{display:grid}
  .topbar{padding:0 12px}
  .clock{display:none}
  .content{padding:16px 16px 32px}
  .g2,.g3,.g4{grid-template-columns:1fr} .g6{grid-template-columns:repeat(2,minmax(0,1fr))}
  .span2,.span3{grid-column:auto}
  .auth-card{padding:26px 20px 20px}
  .bar-row{grid-template-columns:110px 1fr 44px}
  .kv{grid-template-columns:120px 1fr}
}
@media print{
  .side,.topbar,.foot,.no-print,.tabs{display:none!important}
  .content{padding:0} body{background:#fff} .card{border:0;padding:0}
}
table.t td.right,table.t th.right{white-space:nowrap}
.check .muted{white-space:nowrap}
.total-row td:first-child{white-space:normal}
.rid{font-family:ui-monospace,Consolas,monospace;font-size:.92em;opacity:.75;margin-right:2px}

:root{color-scheme:light}
body{background:var(--bg);color:var(--ink)}
.boot{min-height:60vh;display:grid;place-items:center;color:var(--muted);font-size:14px}
.fld>.lbl{display:block;font-size:12.5px;font-weight:600;color:#41566A;margin-bottom:6px}
.mode-pill{display:inline-flex;align-items:center;gap:6px;font-size:12px;font-weight:600;padding:6px 10px;border-radius:999px;background:var(--amber-soft);color:#7a4d05;white-space:nowrap}
.mode-pill.ok{background:var(--green-soft);color:var(--green)}
.mode-pill .ico{width:14px;height:14px}
.auth-mode{margin-top:14px;display:flex;justify-content:center}
.sync-pill{position:sticky;top:72px;z-index:20;display:block;margin:0 auto 12px;border:0;border-radius:999px;background:var(--navy);color:#fff;font-weight:600;font-size:13px;padding:9px 16px;box-shadow:var(--shadow)}
.role-legend{margin-top:16px;padding:12px 14px;border:1px dashed var(--line-strong);border-radius:12px;font-size:13px}
.chips-row{display:flex;flex-wrap:wrap;gap:6px;margin-top:8px}
.li-row{display:flex;justify-content:space-between;gap:10px;align-items:center;padding:8px 0;border-bottom:1px solid var(--line);font-size:13.5px}
.li-row:last-child{border-bottom:0}
.resep-row{display:grid;grid-template-columns:minmax(0,2fr) 90px minmax(0,1.4fr) 40px;gap:8px;margin-bottom:8px}
.pre{white-space:pre-line}
.h-sub{margin:10px 0 4px}
.hb ul{margin:4px 0;padding-left:18px}
.inline-det summary{list-style:none}
.inline-det summary::-webkit-details-marker{display:none}
.today-row td{background:#F3F8FF}
.vital-grid{gap:10px}
.stat.sm{padding:10px 12px}
.stat.sm .v{font-size:19px}
.stat.sm small{font-size:11px}
.ellip{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.actions form{display:inline-flex}
:focus-visible{outline:2px solid var(--primary);outline-offset:2px}
@media(max-width:900px){.mode-pill{display:none}.resep-row{grid-template-columns:1fr 70px;}.resep-row input[type=text]{grid-column:1}.sync-pill{top:70px}}
@media(prefers-reduced-motion:reduce){*{transition:none!important;animation:none!important}}
[hidden]{display:none!important}


/* ---------- Login desktop: layout dua kolom yang stabil ---------- */
/* Dua kolom dibuat dengan CSS grid biasa (tanpa elemen absolute), jadi panel biru
   dan panel putih selalu sama tinggi dan tidak bisa saling meleset. */
@media (min-width: 901px) {
  html, body, #app { width:100%; min-height:100%; margin:0; }
  html { background:#fff; }
  body { overflow-x:hidden; background:#fff; }
  .auth-page {
    display:block; width:100%; min-height:100vh; height:auto;
    padding:0; margin:0; background:#fff;
  }
  .auth-wrap, .auth-wrap.wide {
    display:grid; grid-template-columns:minmax(0,1fr) minmax(0,1fr);
    grid-template-rows:minmax(100vh,auto);
    align-items:stretch; width:100%; max-width:none;
    min-height:100vh; margin:0;
  }
  .auth-wrap::before {
    content:"RS OCTAMEDIKA\A\A Sistem Informasi Manajemen\A Rumah Sakit Terintegrasi\A\A Pelayanan kesehatan yang\A terhubung dalam satu sistem.";
    grid-column:1; grid-row:1;
    white-space:pre-line; box-sizing:border-box; min-width:0;
    display:flex; flex-direction:column; justify-content:center;
    padding:clamp(36px, 6vw, 104px) clamp(36px, 6vw, 104px) 72px;
    color:#fff; font-family:"Poppins",sans-serif;
    font-size:clamp(21px, 2.15vw, 34px); font-weight:600;
    line-height:1.55; letter-spacing:.01em;
    background:linear-gradient(145deg,#0E2A47 0%,#174b80 58%,#1E63B8 100%);
    overflow-wrap:break-word;
  }
  .auth-card {
    grid-column:2; grid-row:1;
    box-sizing:border-box; width:100%; min-width:0; height:auto;
    margin:0; padding:38px clamp(28px, 5vw, 76px);
    border:0; border-radius:0; background:#fff; box-shadow:none;
    display:flex; flex-direction:column; justify-content:center; align-items:center;
  }
  .auth-card > * { width:100%; max-width:560px; box-sizing:border-box; }
  .auth-logo { margin-bottom:22px; padding-bottom:20px; }
  .auth-logo .brand-mark { width:64px; height:64px; border-radius:17px; }
  .auth-logo .brand-mark svg { width:36px; height:36px; }
  .auth-logo strong { font-size:25px; }
  .auth-logo span { font-size:14px; line-height:1.5; }
  .auth-card h2 { font-size:24px; }
  .auth-card .lead { font-size:14.5px; line-height:1.5; margin-bottom:18px; }
  .auth-card .inp input { min-height:54px; font-size:16px; }
  .auth-card .btn { min-height:54px; font-size:16px; }
  .auth-links { font-size:14px; }
  .auth-help { font-size:11.5px; line-height:1.5; }
  /* Hak cipta: ditaruh di dasar panel biru, tetap di dalam kolom kiri */
  .auth-copy {
    grid-column:1; grid-row:1; align-self:end; z-index:1;
    box-sizing:border-box; width:100%; max-width:none; margin:0;
    padding:0 clamp(24px, 4vw, 56px) 20px; color:rgba(255,255,255,.78);
    text-align:center; font-size:11.5px; line-height:1.6;
  }
}
@media (min-width: 901px) and (max-height: 820px) {
  .auth-card { padding-top:22px; padding-bottom:22px; }
  .auth-logo { margin-bottom:12px; padding-bottom:12px; }
  .auth-logo .brand-mark { width:52px; height:52px; margin-bottom:4px; }
  .auth-logo .brand-mark svg { width:29px; height:29px; }
  .auth-card .lead { margin-bottom:10px; }
  .auth-links, .auth-help, .demo { margin-top:9px; }
}
@media (max-width: 900px) {
  .auth-wrap::before { content:none; }
  .auth-copy { color:var(--muted); }
}
</style>
</head>
<body>
<div id="app"><div class="boot">Memuat SIMRS…</div></div>
<script>
/* SIMRS OctaMedika — frontend HTML/JS dengan backend PHP + MySQL PDO.
   Semua data bisnis dimuat/disimpan melalui api.php; tidak ada fallback localStorage. */
const APP_NAME = 'OctaMedika', RS_NAME = 'RS OctaMedika';
const APP_TAGLINE = 'Sistem Informasi Manajemen Rumah Sakit Terintegrasi';
const APP_TEAM = 'Kelompok 8 — Erly Agustina · Jadengil Limbong Taruk Linggi · Jessica Sharma · Daryl Heinrich Chow · William Steven Li';
const IDLE_MINUTES = 30, MAX_FAILED_LOGIN = 5, LOCK_MINUTES = 5, MIN_PASSWORD_LEN = 8;
const SESSION_KEY = 'octamedika-sesi';
const TABLES = ['poli','kamar','icd10','obat','barang','pemeriksaan','tindakan_master','modul','role','hak_akses','pegawai','log_aktivitas','pasien','jadwal_dokter','kunjungan','appointment','rekam_medis','order_penunjang','resep','resep_item','tindakan','observasi','rawat_inap','mutasi_stok','tagihan','app_meta'];
const DEMO_ACCOUNTS = [['demo','Demo#2026'],['admin','Admin#2026'],['pendaftaran','Daftar#2026'],['dr.rudi','Rudi#2026'],['dr.ahmad','Ahmad#2026'],['dr.sinta','Sinta#2026'],['dr.yusuf','Yusuf#2026'],['dr.jantung','Rudi#2026'],['dr.paru','Rudi#2026'],['dr.mata','Rudi#2026'],['dr.tht','Rudi#2026'],['dr.kulit','Rudi#2026'],['dr.ortopedi','Rudi#2026'],['dr.urologi','Rudi#2026'],['dr.jiwa','Rudi#2026'],['dr.gigi','Rudi#2026'],['dr.gizi','Rudi#2026'],['dr.rehab','Rudi#2026'],['dr.onkologi','Rudi#2026'],['dr.konservasi','Rudi#2026'],['dr.anestesi','Rudi#2026'],['dr.geriatri','Rudi#2026'],['dr.infeksi','Rudi#2026'],['dr.kia','Rudi#2026'],['dr.bedah','Rudi#2026'],['dr.saraf','Rudi#2026'],['dr.internis','Rudi#2026'],['perawat','Perawat#2026'],['rekammedis','Rekam#2026'],['analis.lab','Lab#2026'],['radiografer','Radiologi#2026'],['apoteker','Apotek#2026'],['gudang','Gudang#2026'],['kasir','Kasir#2026'],['direktur','Direktur#2026']];

const GROUPS = {
  admin: { label: 'Administrasi Sistem', cls: 'g-admin' }, front: { label: 'Front Office', cls: 'g-front' },
  klinis: { label: 'Pelayanan Klinis', cls: 'g-klinis' }, penunjang: { label: 'Penunjang Medis', cls: 'g-penunjang' },
  logistik: { label: 'Keuangan & Logistik', cls: 'g-logistik' }, manajemen: { label: 'Manajemen', cls: 'g-manajemen' },
};
const MODULES = {
  pegawai:     { nama: 'Autentikasi & Manajemen Pegawai', grup: 'admin', ikon: 'auth', desk: 'Registrasi pegawai, kelola akun & role (RBAC), reset sandi, log aktivitas.' },
  master:      { nama: 'Master Data & Konfigurasi', grup: 'admin', ikon: 'master', desk: 'Data referensi: poli, kamar, pemeriksaan lab/radiologi, tindakan, ICD-10.' },
  admisi:      { nama: 'Registrasi / Pendaftaran Pasien', grup: 'front', ikon: 'registrasi', desk: 'Pasien baru & lama, validasi NIK, nomor RM otomatis, kunjungan & antrean.' },
  jadwal:      { nama: 'Jadwal Dokter & Appointment', grup: 'front', ikon: 'jadwal', desk: 'Jadwal praktik, booking dengan kuota, check-in, reschedule, pembatalan.' },
  igd:         { nama: 'Instalasi Gawat Darurat (IGD)', grup: 'klinis', ikon: 'igd', desk: 'Pendaftaran IGD, triase, pemeriksaan, order penunjang, disposisi.' },
  rawatjalan:  { nama: 'Rawat Jalan (Poliklinik)', grup: 'klinis', ikon: 'rawatjalan', desk: 'Antrean poliklinik, panggil pasien, mulai pemeriksaan SOAP.' },
  rawatinap:   { nama: 'Rawat Inap', grup: 'klinis', ikon: 'rawatinap', desk: 'Ketersediaan bed, admisi rawat inap, pasien dirawat, resume pulang.' },
  emr:         { nama: 'Rekam Medis / Medical Record', grup: 'klinis', ikon: 'emr', desk: 'Rekam medis elektronik: SOAP, tanda vital, ICD-10, hasil lab/radiologi, obat, riwayat lengkap.' },
  cpoe:        { nama: 'CPOE / Order Management', grup: 'klinis', ikon: 'cpoe', desk: 'Order laboratorium, radiologi, e-resep, dan tindakan medis.' },
  keperawatan: { nama: 'Keperawatan (Nursing)', grup: 'klinis', ikon: 'nursing', desk: 'Observasi tanda vital, diagnosa, intervensi & evaluasi keperawatan.' },
  lab:         { nama: 'Laboratorium (LIS)', grup: 'penunjang', ikon: 'lab', desk: 'Order masuk, terima sampel, entri hasil, flag nilai kritis.' },
  radiologi:   { nama: 'Radiologi', grup: 'penunjang', ikon: 'rad', desk: 'Order radiologi, penjadwalan, pelaksanaan, expertise/hasil.' },
  farmasi:     { nama: 'Farmasi / Pharmacy', grup: 'penunjang', ikon: 'farmasi', desk: 'E-resep masuk, verifikasi apoteker, penyerahan obat, master obat.' },
  gudang:      { nama: 'Inventory & Gudang', grup: 'logistik', ikon: 'gudang', desk: 'Stok obat & barang, penerimaan, pengeluaran, riwayat mutasi.' },
  billing:     { nama: 'Billing & Kasir', grup: 'logistik', ikon: 'billing', desk: 'Rincian tagihan otomatis, pembayaran, penjamin BPJS/asuransi, kuitansi.' },
  laporan:     { nama: 'Laporan & Dashboard', grup: 'manajemen', ikon: 'laporan', desk: 'Statistik kunjungan, 10 besar diagnosis, pendapatan, stok, BOR.' },
};
const ICONS = {
  auth: '<path d="M12 3l7 3v5c0 4.5-3 8.3-7 10-4-1.7-7-5.5-7-10V6l7-3z"/><path d="M9.5 12l1.8 1.8 3.4-3.6"/>',
  master: '<ellipse cx="12" cy="6" rx="7" ry="3"/><path d="M5 6v6c0 1.7 3.1 3 7 3s7-1.3 7-3V6M5 12v6c0 1.7 3.1 3 7 3s7-1.3 7-3v-6"/>',
  registrasi: '<circle cx="9" cy="8" r="4"/><path d="M2 21c0-3.9 3.1-7 7-7s7 3.1 7 7M19 8v6M16 11h6"/>',
  jadwal: '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4M8 14h3M8 17h6"/>',
  igd: '<path d="M3 12h4l3-7 4 14 3-7h4"/>',
  rawatjalan: '<circle cx="12" cy="5" r="2"/><path d="M10 22l1-7-2-3 1-4h4l1 4-2 3 1 7M8 11l-2 3M16 11l2 3"/>',
  rawatinap: '<path d="M3 18V7M3 14h18v4M21 14v-3a3 3 0 00-3-3h-7v6"/><circle cx="7" cy="10.5" r="2"/>',
  emr: '<path d="M6 3h9l4 4v14H6z"/><path d="M9 11h7M9 15h7M9 7h3"/>',
  cpoe: '<rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3h6v1M9 13l2 2 4-4"/>',
  nursing: '<path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8l8.8 8.8 8.8-8.8a5.5 5.5 0 000-7.8z"/>',
  lab: '<path d="M9 3h6M10 3v6L4.5 18.5A1.7 1.7 0 006 21h12a1.7 1.7 0 001.5-2.5L14 9V3M7 15h10"/>',
  rad: '<path d="M4 8V5a1 1 0 011-1h3M16 4h3a1 1 0 011 1v3M20 16v3a1 1 0 01-1 1h-3M8 20H5a1 1 0 01-1-1v-3"/><circle cx="12" cy="12" r="3.5"/>',
  farmasi: '<path d="M10.5 3.5a5 5 0 017 7l-7 7a5 5 0 01-7-7z"/><path d="M7 10l7 7"/>',
  gudang: '<path d="M3 7l9-4 9 4-9 4-9-4z"/><path d="M3 7v10l9 4 9-4V7M12 11v10"/>',
  billing: '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 10h18M7 15h4"/>',
  laporan: '<path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/>',
  home: '<path d="M3 11l9-8 9 8M5 9.5V21h14V9.5"/>',
  userplus: '<circle cx="9" cy="8" r="4"/><path d="M2 21c0-3.9 3.1-7 7-7s7 3.1 7 7M19 8v6M16 11h6"/>',
  users: '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6.5 6.5-6.5s6.5 2.9 6.5 6.5"/><circle cx="17" cy="9" r="2.6"/><path d="M16 13.6c3.2-.4 5.5 2 5.5 5.4"/>',
  key: '<circle cx="8" cy="15" r="4"/><path d="M11 12l9-9M17 6l3 3M15 8l2 2"/>',
  logout: '<path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/>',
  menu: '<path d="M4 6h16M4 12h16M4 18h16"/>',
  search: '<circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/>',
  plus: '<path d="M12 5v14M5 12h14"/>',
  db: '<ellipse cx="12" cy="6" rx="7" ry="3"/><path d="M5 6v12c0 1.7 3.1 3 7 3s7-1.3 7-3V6"/>',
};
const icon = (k, cls = 'ico') => `<svg class="${cls}" viewBox="0 0 24 24">${ICONS[k] || ''}</svg>`;
const BRAND = '<div class="brand-mark"><svg viewBox="0 0 24 24" fill="none"><path d="M12 2L4 5v6c0 5 3.4 8.7 8 10 4.6-1.3 8-5 8-10V5l-8-3z" stroke="#fff" stroke-width="1.6"/><path d="M9 12h6M12 9v6" stroke="#7FB2F0" stroke-width="1.9" stroke-linecap="round"/></svg></div>';

/* ===================== Fungsi bantu ===================== */
const $ = (s, r) => (r || document).querySelector(s);
const $$ = (s, r) => Array.from((r || document).querySelectorAll(s));
const e = (s) => String(s ?? '').replace(/[&<>"']/g, (c) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]));
const pad = (n, l = 2) => String(n).padStart(l, '0');
const today = () => { const d = new Date(); return `${d.getFullYear()}-${pad(d.getMonth() + 1)}-${pad(d.getDate())}`; };
const now = () => { const d = new Date(); return `${today()} ${pad(d.getHours())}:${pad(d.getMinutes())}:${pad(d.getSeconds())}`; };
const toDate = (s) => new Date(String(s).replace(' ', 'T'));
const BLN = ['', 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
const BLN_P = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
const HARI = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
function tgl(s, jam = false) { if (!s) return '-'; const d = toDate(s); if (isNaN(d)) return '-'; return `${d.getDate()} ${BLN[d.getMonth() + 1]} ${d.getFullYear()}` + (jam && String(s).length > 10 ? ` ${pad(d.getHours())}:${pad(d.getMinutes())}` : ''); }
function tglPanjang(s) { const d = s ? toDate(s) : new Date(); return `${HARI[d.getDay()]}, ${d.getDate()} ${BLN_P[d.getMonth() + 1]} ${d.getFullYear()}`; }
const hariDari = (s) => HARI[toDate(s + ' 00:00:00').getDay()];
const jam = (s) => (s || '').slice(11, 16);
function umur(lahir) { if (!lahir) return '-'; const a = toDate(lahir + ' 00:00:00'), b = new Date(); let y = b.getFullYear() - a.getFullYear(), m = b.getMonth() - a.getMonth(); if (m < 0 || (m === 0 && b.getDate() < a.getDate())) { y--; m += 12; } return y > 0 ? y + ' th' : Math.max(0, m) + ' bln'; }
const jk = (j) => (j === 'P' ? 'Perempuan' : 'Laki-laki');
const rupiah = (n) => 'Rp ' + Math.round(+n || 0).toLocaleString('id-ID');
const sel = (a, b) => (String(a ?? '') === String(b ?? '') ? ' selected' : '');
const chk = (c) => (c ? ' checked' : '');
const num = (v, float = false) => { v = String(v ?? '').trim().replace(',', '.'); if (v === '' || isNaN(+v)) return null; return float ? +v : Math.round(+v); };
const nul = (v) => (v === '' || v == null ? null : v);
const initials = (n) => { const w = String(n).replace(/^(dr|apt|ns)\.?\s+/i, '').replace(/,.*$/, '').split(/\s+/).filter(Boolean); return ((w[0] || '?')[0] + ((w[1] || '')[0] || '')).toUpperCase(); };
const BADGE = { Menunggu: 'amber', Dipanggil: 'blue', Diperiksa: 'violet', Diproses: 'violet', Selesai: 'green', Batal: 'gray', Aktif: 'green', Nonaktif: 'gray', Terjadwal: 'blue', 'Check-in': 'green', Diverifikasi: 'blue', Diserahkan: 'green', Ditolak: 'red', Dirawat: 'blue', Pulang: 'green', Lunas: 'green', 'Belum Lunas': 'red', Cito: 'red', Biasa: 'gray', Masuk: 'green', Keluar: 'amber', Normal: 'green', Tinggi: 'red', Rendah: 'amber', Kritis: 'red', Abnormal: 'red', Merah: 'red', Kuning: 'amber', Hijau: 'green', Hitam: 'dark', 'Rawat Jalan': 'blue', IGD: 'red', 'Rawat Inap': 'violet', BPJS: 'green', Umum: 'gray', Asuransi: 'blue', Lab: 'amber', Radiologi: 'violet' };
const badge = (s) => `<span class="badge b-${BADGE[s] || 'gray'}">${e(s ?? '-')}</span>`;
const emptyRow = (cols, msg = 'Belum ada data.') => `<tr><td colspan="${cols}" class="empty">${e(msg)}</td></tr>`;
const by = (...keys) => (a, b) => { for (const k of keys) { const [f, dir] = typeof k === 'string' ? [(x) => x[k], 1] : k; const x = f(a), y = f(b); if (x < y) return -dir; if (x > y) return dir; } return 0; };
const sum = (arr, f) => arr.reduce((s, x) => s + (+f(x) || 0), 0);
const like = (v, q) => String(v ?? '').toLowerCase().includes(String(q).toLowerCase());

/* ===================== Database (25 tabel) ===================== */
let DATA = {};
const dirty = new Set();
let MODE = 'local';          // 'shared' = database online bersama, 'local' = browser ini
let MODE_NOTE = '';
let SHARED = null;
const T = (t) => DATA[t].rows;
const find = (t, id) => T(t).find((r) => r.id == id) || null;
const where = (t, f) => T(t).filter(f);
const one = (t, f) => T(t).find(f) || null;
function insert(t, obj) { const tb = DATA[t]; const row = { id: tb.next++, ...obj }; tb.rows.push(row); dirty.add(t); return row; }
function update(t, id, patch) { const r = find(t, id); if (r) { Object.assign(r, patch); dirty.add(t); } return r; }
function removeWhere(t, f) { const tb = DATA[t]; const n = tb.rows.length; tb.rows = tb.rows.filter((r) => !f(r)); if (tb.rows.length !== n) dirty.add(t); return n - tb.rows.length; }
const touch = (t) => dirty.add(t);
function normalize(db) { for (const t of TABLES) if (!db[t] || !Array.isArray(db[t].rows)) db[t] = { rows: [], next: 1 }; return db; }

async function persist() {
  const ts = [...dirty];
  if (!ts.length) return;
  dirty.clear();
  try {
    for (const t of ts) {
      const res = await fetch('api.php', {
        method: 'POST', headers: {'Content-Type':'application/json'},
        credentials: 'same-origin', body: JSON.stringify({table:t, rows:DATA[t].rows, next:DATA[t].next})
      });
      const out = await res.json();
      if (!res.ok || !out.ok) throw new Error(out.error || 'Gagal menyimpan tabel ' + t);
    }
  } catch (err) {
    ts.forEach(t => dirty.add(t));
    flash('err', 'Database gagal menyimpan perubahan: ' + (err.message || 'periksa koneksi MySQL/PHP') + '. Data tidak dialihkan ke penyimpanan browser.');
  }
}

let pendingRemote = false, typing = false;
document.addEventListener('input', (ev) => { if (ev.target.closest('form')) typing = true; });
function remoteChanged() {
  if (typing) { pendingRemote = true; const p = $('#syncPill'); if (p) p.hidden = false; return; }
  const y = window.scrollY; render(); window.scrollTo(0, y);
}
async function boot() {
  $('#app').innerHTML = '<div class="boot">Menghubungkan ke database MySQL…</div>';
  MODE = 'shared'; MODE_NOTE = 'Terhubung ke MySQL melalui PHP PDO. Data aplikasi disimpan di server.';
  try {
    const res = await fetch('api.php', {credentials:'same-origin', cache:'no-store'});
    const out = await res.json();
    if (!res.ok || !out.ok) throw new Error(out.error || 'API tidak dapat diakses');
    DATA = normalize(out.data || {});
    const total = TABLES.reduce((n,t) => n + DATA[t].rows.length, 0);
    if (!total) { renderInstall(); return; }
    const ver = (DATA.app_meta.rows.find((r) => r.kunci === 'seed_version') || {}).nilai;
    if (ver !== SEED_VERSION) { renderUpgrade(); return; }
    startRouting();
  } catch (err) {
    $('#app').innerHTML = `<div class="auth-page"><div class="auth-wrap"><div class="auth-card"><div class="auth-logo">${BRAND}<strong>Database belum terhubung</strong><span>OctaMedika · MySQL + PHP PDO</span></div><p>${e(err.message || 'Gagal memuat data.')}</p><p>Pastikan Apache dan MySQL aktif, database sudah diimpor, dan konfigurasi <code>config/database.php</code> benar.</p><button class="btn block" onclick="location.reload()">Coba lagi</button></div></div></div>`;
  }
}
async function resetData() {
  DATA = normalize(seedData());
  TABLES.forEach(touch);
  await persist();
}
function renderUpgrade() {
  const nDok = DATA.pegawai.rows.filter((p) => p.role_id === 2).length, nPeg = DATA.pegawai.rows.length;
  $('#app').innerHTML = `<div class="auth-page"><div class="auth-wrap"><div class="auth-card">
    <div class="auth-logo">${BRAND}<strong>Pembaruan data demo tersedia</strong><span>${APP_NAME} · versi data ${SEED_VERSION}</span></div>
    <p>Database Anda masih berisi data demo versi lama (${nPeg} pegawai, ${nDok} dokter). Versi baru berisi <b>±110 pegawai (±50 dokter di seluruh poli), 110 pasien, ±180 obat, 75 pemeriksaan lab/radiologi, serta riwayat operasional 30 hari</b> (kunjungan, rekam medis, order, resep, rawat inap, tagihan, stok, log).</p>
    <div class="alert warn">Memuat data baru akan <b>mengganti seluruh data demo</b> yang ada, termasuk data yang Anda input sendiri.</div>
    <button class="btn block" id="btnUpgrade">Muat data demo lengkap</button>
    <p class="small muted" style="margin-top:10px">Ingin mempertahankan data lama? Tutup halaman ini dan jangan klik tombol di atas.</p></div></div></div>`;
  $('#btnUpgrade').onclick = async () => { $('#btnUpgrade').disabled = true; $('#btnUpgrade').textContent = 'Menyimpan data…'; await resetData(); startRouting(); };
}
function renderInstall() {
  $('#app').innerHTML = `<div class="auth-page"><div class="auth-wrap"><div class="auth-card">
    <div class="auth-logo">${BRAND}<strong>Instalasi ${APP_NAME}</strong><span>Database MySQL masih kosong</span></div>
    <p>Database terhubung. Tombol ini akan mengisi tabel aplikasi dengan data contoh untuk demonstrasi. Data akan tersimpan di MySQL.</p>
    <button class="btn block" id="btnInstall">Isi database dengan data contoh</button></div></div></div>`;
  $('#btnInstall').onclick = async () => { $('#btnInstall').disabled = true; $('#btnInstall').textContent = 'Menyimpan data…'; await resetData(); startRouting(); };
}

/* ===================== Kriptografi kata sandi (PBKDF2-SHA256) ===================== */
const hex = (b) => Array.from(b, (x) => x.toString(16).padStart(2, '0')).join('');
const unhex = (h) => new Uint8Array(h.match(/../g).map((x) => parseInt(x, 16)));
async function pbkdf2(pw, saltHex, iter) {
  const key = await crypto.subtle.importKey('raw', new TextEncoder().encode(pw), 'PBKDF2', false, ['deriveBits']);
  return hex(new Uint8Array(await crypto.subtle.deriveBits({ name: 'PBKDF2', hash: 'SHA-256', salt: unhex(saltHex), iterations: iter }, key, 256)));
}
async function hashPassword(pw) { const salt = hex(crypto.getRandomValues(new Uint8Array(16))); return `pbkdf2_sha256$100000$${salt}$${await pbkdf2(pw, salt, 100000)}`; }
async function verifyPassword(pw, stored) { const [alg, it, salt, h] = String(stored).split('$'); if (alg !== 'pbkdf2_sha256') return false; return (await pbkdf2(pw, salt, +it)) === h; }
const strongPw = (p) => p.length >= MIN_PASSWORD_LEN && /[A-Za-z]/.test(p) && /\d/.test(p);

/* ===================== Sesi, role, hak akses (RBAC) ===================== */
let SESSION = null;
function loadSession() { try { SESSION = JSON.parse(sessionStorage.getItem(SESSION_KEY) || 'null'); } catch (err) { /* sesi di memori saja */ } }
function saveSession() { try { SESSION ? sessionStorage.setItem(SESSION_KEY, JSON.stringify(SESSION)) : sessionStorage.removeItem(SESSION_KEY); } catch (err) { /* abaikan */ } }
function roles() {
  const r = {};
  for (const x of [...T('role')].sort(by('id'))) {
    const home = find('modul', x.modul_utama_id);
    r[x.kode] = { id: x.id, label: x.nama, home: home ? home.kode : null, deskripsi: x.deskripsi, daftar: +x.boleh_daftar, modules: [] };
  }
  for (const h of [...T('hak_akses')]) {
    const ro = find('role', h.role_id), m = find('modul', h.modul_id);
    if (ro && m && MODULES[m.kode] && r[ro.kode]) r[ro.kode].modules.push({ id: m.id, kode: m.kode });
  }
  for (const k in r) r[k].modules = r[k].modules.sort(by('id')).map((m) => m.kode);
  return r;
}
const roleId = (kode) => (one('role', (r) => r.kode === kode) || {}).id || 0;
const roleKode = (id) => (find('role', id) || {}).kode || '';
const roleLabel = (kode) => (one('role', (r) => r.kode === kode) || {}).nama || kode;
const roleChip = (kode) => { const r = one('role', (x) => x.kode === kode); return `<span class="role-chip"><b class="rid">#${r ? r.id : '?'}</b> ${e(r ? r.nama : kode)}</span>`; };
function pegawaiFull(p) { if (!p) return null; const r = find('role', p.role_id), po = find('poli', p.poli_id); return { ...p, role: r ? r.kode : '', role_nama: r ? r.nama : '-', poli_nama: po ? po.nama : null }; }
function user() {
  if (!SESSION || !SESSION.uid) return null;
  const p = find('pegawai', SESSION.uid);
  if (!p || p.status !== 'Aktif') { SESSION = null; saveSession(); return null; }
  return pegawaiFull(p);
}
const roleModules = (kode) => (roles()[kode] || { modules: [] }).modules;
const can = (m) => { const u = user(); return !!u && roleModules(u.role).includes(m); };
const isRole = (...rs) => { const u = user(); return !!u && (u.role === 'admin' || rs.includes(u.role)); };
function audit(aksi, detail = '', u) {
  u = u || user() || {};
  insert('log_aktivitas', { pegawai_id: u.id || null, username: u.username || '-', aksi, detail: String(detail).slice(0, 250), waktu: now() });
  const lg = DATA.log_aktivitas; if (lg.rows.length > 300) lg.rows = lg.rows.slice(-300);
}

/* ===================== Data bersama ===================== */
function kunjungan(id) {
  const k = find('kunjungan', id); if (!k) return null;
  const p = find('pasien', k.pasien_id) || {}, po = find('poli', k.poli_id), d = find('pegawai', k.dokter_id);
  return { ...k, nomor_rm: p.nomor_rm, nik: p.nik, nama_lengkap: p.nama_lengkap, tanggal_lahir: p.tanggal_lahir, jenis_kelamin: p.jenis_kelamin, alergi: p.alergi, golongan_darah: p.golongan_darah, no_penjamin: p.no_penjamin, alamat: p.alamat, poli_nama: po ? po.nama : null, dokter_nama: d ? d.nama : null };
}
const dokterList = () => where('pegawai', (p) => p.role_id === roleId('dokter') && p.status === 'Aktif').map(pegawaiFull).sort(by('nama'));
const poliList = (igd = false) => where('poli', (p) => igd || !+p.is_igd).sort(by('id'));
const igdPoliId = () => (one('poli', (p) => +p.is_igd) || {}).id || 0;
function nomorAntrian(poliId, tanggal) { const po = find('poli', poliId); const n = where('kunjungan', (k) => k.poli_id == poliId && k.tanggal === tanggal).length + 1; return (po ? po.kode : 'X') + pad(n, 3); }
function buatNomorRM() { let n = Math.max(0, ...T('pasien').map((p) => p.id)) + 1, rm; do { rm = `RM-${new Date().getFullYear()}-${pad(n++, 6)}`; } while (one('pasien', (p) => p.nomor_rm === rm)); return rm; }
function lamaRawat(masuk, keluar) { const a = toDate(masuk.slice(0, 10) + ' 00:00:00'), b = toDate((keluar || now()).slice(0, 10) + ' 00:00:00'); return Math.max(1, Math.round((b - a) / 86400000)); }
const ranapOf = (kid) => one('rawat_inap', (r) => r.kunjungan_id == kid);
function flagLab(nilai, rujukan) {
  if (nilai == null || nilai === '') return null;
  const m = /^\s*([\d.]+)\s*-\s*([\d.]+)\s*$/.exec(rujukan || ''); const v = +String(nilai).replace(',', '.');
  if (m && !isNaN(v)) { const lo = +m[1], hi = +m[2]; if (v < lo * 0.5 || (hi > 0 && v > hi * 2)) return 'Kritis'; if (v < lo) return 'Rendah'; if (v > hi) return 'Tinggi'; return 'Normal'; }
  if (rujukan && String(nilai).trim().toLowerCase() !== String(rujukan).trim().toLowerCase()) return 'Abnormal';
  return 'Normal';
}

/* ===================== Navigasi & pesan ===================== */
let NAV = { m: 'home', q: {} };
let FLASH = [];
let FORM = null;   // isian form yang gagal validasi, ditampilkan ulang
const flash = (t, m) => FLASH.push([t, m]);
const flashHtml = () => { const h = FLASH.map(([t, m]) => `<div class="alert ${t}">${e(m)}</div>`).join(''); FLASH = []; return h; };
const L = (m, q = {}) => `href="#" data-go="${e(m)}" data-q="${e(JSON.stringify(q))}"`;
function nav(m, q = {}) { NAV = { m, q }; try { history.replaceState(null, '', '#' + (m === 'home' ? 'beranda' : m)); } catch (err) { /* abaikan */ } }
function go(m, q = {}) { nav(m, q); typing = false; pendingRemote = false; render(); window.scrollTo(0, 0); }
const Q = (k, d = '') => (NAV.q[k] ?? d);
function startRouting() {
  loadSession();
  const h = (location.hash || '').slice(1);
  if (MODULES[h]) NAV = { m: h, q: {} };
  else if (['login', 'registrasi', 'profil'].includes(h)) NAV = { m: h, q: {} };
  render();
}
window.addEventListener('hashchange', () => { const h = location.hash.slice(1); if (MODULES[h] && NAV.m !== h) go(h); });

function render() {
  const u = user();
  if (u && SESSION.last && Date.now() - SESSION.last > IDLE_MINUTES * 60000) {
    audit('Logout (sesi habis)', '', u); SESSION = null; saveSession(); persist();
    flash('info', `Sesi berakhir karena tidak ada aktivitas selama ${IDLE_MINUTES} menit. Silakan masuk kembali.`);
    NAV = { m: 'login', q: {} };
  }
  if (user()) { SESSION.last = Date.now(); saveSession(); }
  if (!user()) {
    if (NAV.m === 'registrasi') return VIEWS.registrasi();
    return VIEWS.login();
  }
  const m = NAV.m;
  if (m === 'login') { NAV = { m: homeOf(user()), q: {} }; return render(); }
  if (MODULES[m] && !can(m)) { flash('err', 'Anda tidak memiliki hak akses ke modul ' + MODULES[m].nama + '.'); NAV = { m: 'home', q: {} }; }
  if (m === 'registrasi' && !can('pegawai')) { flash('info', 'Anda sudah masuk. Registrasi pegawai baru dilakukan oleh Admin Sistem.'); NAV = { m: 'home', q: {} }; }
  (VIEWS[NAV.m] || VIEWS.home)();
}
const homeOf = (u) => { const h = (roles()[u.role] || {}).home; return h && MODULES[h] ? h : 'home'; };

/* ===================== Kerangka tampilan ===================== */
const IN_VIEWER = (() => { try { return window.self !== window.top; } catch (err) { return true; } })();
function modeBadge() {
  return `<span class="mode-pill ok" title="Data tersimpan melalui PHP PDO ke MySQL">${icon('db')} MySQL · Database</span>`;
}
function page(title, active, sub, body) {
  const u = user(); const mods = roleModules(u.role); const mod = MODULES[active]; const grp = mod ? GROUPS[mod.grup] : null;
  const rl = roles();
  let nav = `<div class="nav-grp">Menu Utama</div><a class="nav-it ${active === 'home' ? 'cur' : ''}" ${L('home')}><span class="mi-ico g-klinis">${icon('home')}</span><span class="lbl">Beranda</span></a>`;
  if (mods.includes('pegawai')) nav += `<a class="nav-it ${active === 'registrasi' ? 'cur' : ''}" ${L('registrasi')}><span class="mi-ico g-admin">${icon('userplus')}</span><span class="lbl">Registrasi Pegawai</span></a>`;
  for (const [gk, g] of Object.entries(GROUPS)) {
    const list = mods.filter((m) => MODULES[m] && MODULES[m].grup === gk); if (!list.length) continue;
    nav += `<div class="nav-grp">${e(g.label)}</div>` + list.map((m) => `<a class="nav-it ${active === m ? 'cur' : ''}" ${L(m)} title="${e(MODULES[m].nama)}"><span class="mi-ico ${g.cls}">${icon(MODULES[m].ikon)}</span><span class="lbl">${e(MODULES[m].nama)}</span>${(rl[u.role] || {}).home === m ? '<span class="tag">Utama</span>' : ''}</a>`).join('');
  }
  $('#app').innerHTML = `<div class="app" id="shell">
    <aside class="side"><div class="side-brand">${BRAND}<div class="txt"><strong>${APP_NAME}</strong><span>${RS_NAME}</span></div></div>
      <div class="side-user"><div class="avatar">${e(initials(u.nama))}</div><div class="u-txt"><strong>${e(u.nama)}</strong><small>Role #${u.role_id} · ${e(u.role_nama)}${u.poli_nama ? ' · ' + e(u.poli_nama) : ''}</small></div></div>
      <nav class="side-nav" aria-label="Menu sesuai role">${nav}</nav>
      <div class="side-foot"><a class="nav-it ${active === 'profil' ? 'cur' : ''}" ${L('profil')}><span class="plain-ico">${icon('key')}</span><span class="lbl">Profil & Ganti Sandi</span></a>
        <button class="nav-it logout" type="button" data-logout><span class="plain-ico">${icon('logout')}</span><span class="lbl">Keluar</span></button></div></aside>
    <div class="backdrop" data-close-menu></div>
    <div class="main"><header class="topbar"><button class="icon-btn" type="button" data-menu aria-label="Menu">${icon('menu')}</button>
      <div class="tb-title">${mod ? `<span class="mi-ico ${grp.cls}">${icon(mod.ikon)}</span>` : ''}<div class="t"><strong>${e(title)}</strong><small>${e(sub || (mod ? grp.label + ' · ' + mod.nama : RS_NAME))}</small></div></div>
      <div class="tb-spacer"></div>${modeBadge()}<div class="clock"><b>${pad(new Date().getHours())}:${pad(new Date().getMinutes())} WIB</b>${e(tglPanjang())}</div></header>
      <main class="content"><button type="button" class="sync-pill" id="syncPill" hidden>Ada data baru dari pengguna lain — klik untuk memuat</button>${MODE_NOTE ? `<div class="alert info">${e(MODE_NOTE)}</div>` : ''}${flashHtml()}${body}</main>
      <footer class="foot">© ${new Date().getFullYear()} ${RS_NAME} · ${APP_NAME} SIMRS · ${e(APP_TEAM)}</footer></div></div>`;
  afterRender();
}
function tabs(list, cur, param = 'p', keep = {}) {
  return '<nav class="tabs">' + Object.entries(list).map(([k, lab]) => `<a class="${k === cur ? 'on' : ''}" ${L(NAV.m, { ...keep, [param]: k })}>${lab}</a>`).join('') + '</nav>';
}
function pasienCard(k) {
  return (k.alergi ? `<div class="allergy">⚠ ALERGI: ${e(k.alergi)}</div>` : '') +
    `<div class="card pcard"><div class="pc-main"><div class="avatar lg">${e(initials(k.nama_lengkap))}</div><div><h2>${e(k.nama_lengkap)}</h2><div class="muted">${e(k.nomor_rm)} · ${jk(k.jenis_kelamin)} · ${umur(k.tanggal_lahir)}${k.golongan_darah ? ' · Gol. darah ' + e(k.golongan_darah) : ''}</div></div></div>
    <div class="pc-meta"><div><span>Kunjungan</span><b>${badge(k.jenis)} ${e(k.no_antrian)}</b></div><div><span>Poli / Unit</span><b>${e(k.poli_nama || '-')}</b></div><div><span>Dokter</span><b>${e(k.dokter_nama || '-')}</b></div><div><span>Penjamin</span><b>${badge(k.penjamin)}</b></div><div><span>Status</span><b>${badge(k.status)}${k.triase ? ' ' + badge(k.triase) : ''}</b></div></div></div>`;
}
const stat = (l, v, cls = '', s = '') => `<div class="stat"><div class="l">${e(l)}</div><div class="v ${cls}">${v}</div>${s ? `<div class="s">${s}</div>` : ''}</div>`;
const hidden = (n, v) => `<input type="hidden" name="${n}" value="${e(v)}">`;
const formAct = (act, inner, opts = '') => `<form data-act="${act}" ${opts} novalidate>${inner}</form>`;
const confirmAttr = (msg) => `data-confirm="${e(msg)}"`;

/* ===================== Interaksi global ===================== */
const ACTIONS = {};
function formData(form, submitter) {
  const o = {};
  for (const el of form.elements) {
    if (!el.name || el.disabled) continue;
    if ((el.type === 'checkbox' || el.type === 'radio') && !el.checked) continue;
    if (el.type === 'submit' || el.tagName === 'BUTTON') continue;
    if (el.name.endsWith('[]')) (o[el.name.slice(0, -2)] = o[el.name.slice(0, -2)] || []).push(el.value);
    else o[el.name] = typeof el.value === 'string' ? el.value.trim() : el.value;
  }
  if (submitter && submitter.name) o[submitter.name] = submitter.value;
  return o;
}
async function runAction(form, submitter) {
  const fn = ACTIONS[form.dataset.act]; if (!fn) return;
  const btns = $$('button', form); btns.forEach((b) => (b.disabled = true));
  const before = JSON.stringify(NAV), y = window.scrollY;
  try { await fn(formData(form, submitter), form); }
  catch (err) { console.error(err); flash('err', 'Terjadi kesalahan: ' + (err && err.message || err)); }
  await persist();
  typing = false;
  render();
  window.scrollTo(0, JSON.stringify(NAV) === before ? y : 0);
}
function confirmBox(text, onOk) {
  const w = document.createElement('div');
  w.innerHTML = `<div class="modal-bg"><div class="modal" role="dialog" aria-modal="true"><h3>Konfirmasi</h3><p></p><div class="row"><button type="button" class="btn ghost" data-x>Batal</button><button type="button" class="btn" data-ok>Ya, lanjutkan</button></div></div></div>`;
  $('p', w).textContent = text; document.body.appendChild(w);
  $('[data-x]', w).onclick = () => w.remove();
  $('[data-ok]', w).onclick = () => { w.remove(); onOk(); };
  $('[data-ok]', w).focus();
}
document.addEventListener('submit', (ev) => {
  const f = ev.target; if (!f.dataset.act) return;
  ev.preventDefault();
  const sub = ev.submitter;
  if (f.dataset.confirm) confirmBox(f.dataset.confirm, () => runAction(f, sub)); else runAction(f, sub);
});
document.addEventListener('click', (ev) => {
  const a = ev.target.closest('[data-go]');
  if (a) { ev.preventDefault(); const sh = $('#shell'); if (sh) sh.classList.remove('menu-open'); go(a.dataset.go, JSON.parse(a.dataset.q || '{}')); return; }
  if (ev.target.closest('[data-menu]')) { $('#shell').classList.toggle('menu-open'); return; }
  if (ev.target.closest('[data-close-menu]')) { $('#shell').classList.remove('menu-open'); return; }
  if (ev.target.closest('#syncPill')) { typing = false; pendingRemote = false; render(); return; }
  if (ev.target.closest('[data-logout]')) {
    confirmBox('Keluar dari SIMRS? Data yang belum disimpan akan hilang.', async () => { audit('Logout', '', user()); SESSION = null; saveSession(); await persist(); flash('info', 'Anda telah keluar dari sistem.'); go('login'); });
    return;
  }
  const eye = ev.target.closest('[data-eye]'); if (eye) { const i = document.getElementById(eye.dataset.eye); i.type = i.type === 'password' ? 'text' : 'password'; i.focus(); return; }
  const d = ev.target.closest('.demo-row'); if (d) { $('#inUser').value = d.dataset.u; $('#inPass').value = d.dataset.p; $('#btnLogin').focus(); return; }
  const icd = ev.target.closest('[data-icd]');
  if (icd) { const k = $('#icd10_kode'), a = $('#assessment'); if (k) k.value = icd.dataset.icd; if (a && !a.value.includes(icd.dataset.icd)) a.value = (a.value ? a.value.trim() + '\n' : '') + icd.dataset.icd + ' — ' + icd.dataset.nama; typing = true; return; }
  if (ev.target.closest('#addResep')) { $('#resepRows').appendChild($('#resepTpl').content.cloneNode(true)); return; }
  const del = ev.target.closest('[data-del-row]'); if (del && $('#resepRows').children.length > 1) { del.closest('.resep-row').remove(); return; }
  const ex = ev.target.closest('[data-export]'); if (ex) { exportCsv(ex.dataset.export); return; }
});
document.addEventListener('change', (ev) => { toggles(); if (ev.target.matches('select[data-poli-for]')) filterDokter(ev.target); if (ev.target.matches('[data-autosubmit]')) ev.target.form.requestSubmit(); });
function toggles() {
  $$('[data-show-when]').forEach((el) => {
    const [n, v] = el.dataset.showWhen.split('=');
    const inp = document.querySelector(`[name="${n}"]:checked`) || document.querySelector(`select[name="${n}"]`);
    el.classList.toggle('hidden', !inp || !v.split('|').includes(inp.value));
  });
}
function filterDokter(sp) {
  const sd = document.getElementById(sp.dataset.poliFor); if (!sd) return; let first = null;
  $$('option', sd).forEach((o) => { if (!o.value) return; const ok = !sp.value || o.dataset.poli === sp.value; o.hidden = !ok; o.disabled = !ok; if (ok && !first) first = o; });
  const cur = sd.selectedOptions[0]; if (!cur || cur.disabled) sd.value = first ? first.value : '';
}
function afterRender() { toggles(); $$('select[data-poli-for]').forEach(filterDokter); }
document.addEventListener('keyup', (ev) => { if (ev.target.id === 'inPass' && ev.getModifierState) { const w = $('#inPassCaps'); if (w) w.hidden = !ev.getModifierState('CapsLock'); } });
setInterval(() => { if (user() && SESSION.last && Date.now() - SESSION.last > IDLE_MINUTES * 60000) render(); }, 30000);
['mousedown', 'keydown', 'touchstart'].forEach((ev) => document.addEventListener(ev, () => { if (SESSION && SESSION.uid) { SESSION.last = Date.now(); saveSession(); } }, { passive: true }));

async function exportCsv(kind) {
  const [dari, sampai] = kind.split('|');
  const rows = where('kunjungan', (k) => k.tanggal >= dari && k.tanggal <= sampai).sort(by('tanggal', 'id')).map((k) => {
    const K = kunjungan(k.id); const r = one('rekam_medis', (x) => x.kunjungan_id == k.id); const t = one('tagihan', (x) => x.kunjungan_id == k.id);
    return [k.tanggal, k.no_antrian, k.jenis, K.poli_nama || '', K.nomor_rm, K.nama_lengkap, K.jenis_kelamin, k.penjamin, K.dokter_nama || '', r ? r.icd10_kode || '' : '', r ? r.assessment || '' : '', k.status, t ? t.total : ''];
  });
  const csv = '﻿' + [['Tanggal', 'No Antrean', 'Jenis', 'Poli', 'No RM', 'Nama Pasien', 'JK', 'Penjamin', 'Dokter', 'ICD-10', 'Diagnosis', 'Status', 'Total Tagihan'], ...rows]
    .map((r) => r.map((c) => '"' + String(c ?? '').replace(/"/g, '""') + '"').join(';')).join('\r\n');
  const filename = `laporan-kunjungan-${dari}-${sampai}.csv`;
  let dl = null; try { dl = window.claude && window.claude.use ? await window.claude.use('downloads') : null; } catch (err) { dl = null; }
  if (dl) { try { await dl.save({ filename, data: new Blob([csv], { type: 'text/csv' }) }); audit('Export laporan', filename); persist(); } catch (err) { /* dibatalkan pengguna */ } return; }
  if (IN_VIEWER) { flash('warn', 'Unduhan tidak tersedia di tampilan ini.'); render(); return; }
  const a = document.createElement('a'); a.href = URL.createObjectURL(new Blob([csv], { type: 'text/csv' })); a.download = filename; a.click();
  audit('Export laporan', filename); persist();
}


/* ===================== DATA CONTOH (seed) =====================
   Dipakai saat database masih kosong. Kata sandi disimpan sebagai
   hash PBKDF2-SHA256 (100.000 iterasi + salt acak), tidak ada sandi asli. */
/* ===================== PERLUASAN DATA CONTOH (versi 3) =====================
   Menambah staf tiap role, dokter tiap poli, jadwal praktik, master data
   (obat, BMHP, lab, radiologi, tindakan, ICD-10), pasien, dan riwayat
   operasional 30 hari. Semua identitas fiktif. Deterministik (seed tetap). */
const SEED_VERSION = '3';
function seedExtend(DB, H, d, n) {
  let sd = 20260901; const rnd = () => (sd = (sd * 1664525 + 1013904223) % 4294967296) / 4294967296;
  const ri = (a, b) => a + Math.floor(rnd() * (b - a + 1));
  const pick = (a) => a[Math.floor(rnd() * a.length)];
  const chance = (p) => rnd() < p;
  const addDays = (ds, k) => { const t = new Date(ds + 'T12:00:00'); t.setDate(t.getDate() + k); return `${t.getFullYear()}-${pad(t.getMonth() + 1)}-${pad(t.getDate())}`; };
  const HARI = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
  const hariOf = (ds) => HARI[new Date(ds + 'T12:00:00').getDay()];
  const add = (t, o) => { const r = { id: DB[t].next++, ...o }; DB[t].rows.push(r); return r; };
  const roster = { ...DB };
  const hhmm = (m) => `${pad(Math.floor(m / 60))}:${pad(m % 60)}`;
  const curMin = Math.max(45, (() => { const x = new Date(); return x.getHours() * 60 + x.getMinutes(); })());
  const ts = (ds, m) => `${ds} ${hhmm(ds === d ? Math.min(m, curMin) : Math.min(m, 1439))}:${pad(ri(0, 59))}`;

  /* ---------- STAF ---------- */
  const FM = ['Agus', 'Budi', 'Dedi', 'Eko', 'Fajar', 'Gilang', 'Hendra', 'Irfan', 'Joko', 'Kevin', 'Lukman', 'Made', 'Nanda', 'Oki', 'Putra', 'Rizal', 'Surya', 'Taufik', 'Wahyu', 'Yoga', 'Zainal', 'Arif', 'Bayu', 'Candra', 'Doni', 'Evan', 'Galih', 'Heru', 'Ilham', 'Rangga'];
  const FF = ['Ayu', 'Bunga', 'Citra', 'Dewi', 'Eka', 'Fitri', 'Gita', 'Hana', 'Indah', 'Julia', 'Kartika', 'Lestari', 'Mega', 'Novi', 'Putri', 'Rani', 'Siti', 'Tari', 'Umi', 'Vina', 'Wulan', 'Yuni', 'Zahra', 'Anisa', 'Bella', 'Cindy', 'Dinda', 'Elisa', 'Fani', 'Laras'];
  const LN = ['Wijaya', 'Saputra', 'Pratama', 'Hidayat', 'Nugroho', 'Santoso', 'Kusuma', 'Rahmawati', 'Setiawan', 'Permana', 'Gunawan', 'Susanto', 'Handayani', 'Purnomo', 'Firmansyah', 'Maulana', 'Utomo', 'Wibowo', 'Suryani', 'Ramadhan', 'Anggraini', 'Lestari', 'Hartono', 'Cahyono', 'Pangestu', 'Sulistyo', 'Marlina', 'Kurniawati', 'Prasetyo', 'Aditya'];
  let nameIx = 0;
  const nama = (jk) => { nameIx++; return (jk === 'L' ? FM : FF)[(nameIx * 7) % 30] + ' ' + LN[(nameIx * 11 + 3) % 30]; };
  let nipSeq = 100;
  const addStaff = (namaLengkap, uname, role, poli, jk, pw, extra = {}) => {
    const id = DB.pegawai.next++; nipSeq++;
    DB.pegawai.rows.push({ id, nip: '19' + String(85 + (nipSeq % 15)) + '0' + String(1 + (nipSeq % 9)) + '1520' + String(10 + (nipSeq % 9)) + '03' + String(nipSeq).padStart(4, '0'), nama: namaLengkap, username: uname, password_hash: H[pw], role_id: role, poli_id: poli, jenis_kelamin: jk, email: uname.replace(/^dr\./, '') + '@octamedika.id', no_hp: '0812' + String(30000000 + nipSeq * 37).slice(0, 8), status: 'Aktif', gagal_login: 0, terkunci_sampai: null, login_terakhir: null, created_at: n, status_kepegawaian: 'Tetap', ...extra });
    return id;
  };
  const docExtra = (spes, i) => ({ spesialisasi: spes, str: 'STR-DUMMY-' + String(500 + i).padStart(4, '0'), sip: 'SIP-DUMMY-' + String(500 + i).padStart(4, '0'), unit_kerja: 'Pelayanan Medis' });
  // [nama, username, poli_id, jk, spesialisasi]
  const dokterBaru = [
    ['dr. Anindya Paramitha', 'dr.umum2', 1, 'P', 'Dokter Umum'], ['dr. Reza Mahendra', 'dr.umum3', 1, 'L', 'Dokter Umum'], ['dr. Silvia Handoko', 'dr.umum4', 1, 'P', 'Dokter Umum'],
    ['dr. Dimas Aryo Pamungkas, Sp.EM', 'dr.igd2', 7, 'L', 'Emergency Medicine'], ['dr. Karina Putri', 'dr.igd3', 7, 'P', 'Dokter IGD'], ['dr. Taufan Hidayat', 'dr.igd4', 7, 'L', 'Dokter IGD'],
    ['dr. Hasan Basri, Sp.PD', 'dr.pd2', 2, 'L', 'Penyakit Dalam'], ['dr. Laila Nurjanah, Sp.PD-KGEH', 'dr.pd3', 2, 'P', 'Gastroenterohepatologi'],
    ['dr. Winda Safira, Sp.A', 'dr.anak2', 3, 'P', 'Anak'], ['dr. Gunawan Halim, Sp.A', 'dr.anak3', 3, 'L', 'Anak'],
    ['dr. Ferdy Kusnadi, Sp.B', 'dr.bedah2', 4, 'L', 'Bedah Umum'],
    ['dr. Amelia Tanuwijaya, Sp.OG', 'dr.obgyn1', 5, 'P', 'Obstetri dan Ginekologi'], ['dr. Yulianto Wardana, Sp.OG', 'dr.obgyn2', 5, 'L', 'Obstetri dan Ginekologi'],
    ['dr. Rini Kartikasari, Sp.N', 'dr.saraf2', 6, 'P', 'Neurologi'],
    ['dr. Teguh Prakoso, Sp.JP', 'dr.jantung2', 8, 'L', 'Kardiologi'], ['dr. Mira Oktavia, Sp.P', 'dr.paru2', 9, 'P', 'Pulmonologi'],
    ['dr. Lutfi Hakim, Sp.M', 'dr.mata2', 10, 'L', 'Oftalmologi'], ['dr. Sarah Meilani, Sp.THT-KL', 'dr.tht2', 11, 'P', 'THT-KL'],
    ['dr. Bagas Wicaksono, Sp.D.V.E.', 'dr.kulit2', 12, 'L', 'Dermatologi dan Venereologi'], ['dr. Hendro Susilo, Sp.OT', 'dr.ortopedi2', 13, 'L', 'Orthopedi dan Traumatologi'],
    ['drg. Nabila Azzahra', 'drg.umum', 16, 'P', 'Dokter Gigi'], ['drg. Fandi Kurniadi, Sp.KG', 'drg.konservasi2', 16, 'L', 'Konservasi Gigi'],
    ['dr. Dewangga Prasetya, Sp.U', 'dr.urologi2', 14, 'L', 'Urologi'], ['dr. Marsha Kinanti, Sp.KJ', 'dr.jiwa2', 15, 'P', 'Psikiatri'], ['dr. Aldo Mahardika, Sp.Rad', 'dr.rehab2', 18, 'L', 'Rehabilitasi Medik'], ['dr. Putu Wirawan, Sp.PD-KHOM', 'dr.onkologi2', 19, 'L', 'Hematologi Onkologi'], ['dr. Retno Sulistiani, Sp.OG', 'dr.kia2', 24, 'P', 'Obstetri dan Ginekologi'], ['dr. Johan Setiabudi', 'dr.mcu', 25, 'L', 'Dokter Umum (MCU)'], ['dr. Elvina Chandra, Sp.A', 'dr.anak4', 3, 'P', 'Anak']
  ];
  dokterBaru.forEach((x, i) => addStaff(x[0], x[1], 2, x[2], x[3], 'dr.rudi', docExtra(x[4], i)));
  const grup = [
    [3, 'perawat', 'perawat', 18, 'Ns.', ', S.Kep'], [4, 'daftar', 'pendaftaran', 4, '', ''], [5, 'rm', 'rekammedis', 3, '', ', A.Md.RMIK'], [6, 'analis.lab', 'analis.lab', 4, '', ', A.Md.AK'],
    [7, 'radiografer', 'radiografer', 3, '', ', A.Md.Rad'], [8, 'apoteker', 'apoteker', 4, 'apt.', ', S.Farm'], [9, 'gudang', 'gudang', 3, '', ''], [10, 'kasir', 'kasir', 4, '', ''], [11, 'manajemen', 'direktur', 2, 'dr.', ', MARS'], [1, 'admin', 'admin', 1, '', ', S.Kom']
  ];
  const unitPerawat = ['IGD', 'IGD', 'IGD', 'Rawat Jalan', 'Rawat Jalan', 'Rawat Jalan', 'Rawat Inap Melati', 'Rawat Inap Melati', 'Rawat Inap Mawar', 'ICU', 'ICU', 'HCU', 'Perinatologi/NICU', 'Kamar Bersalin'];
  grup.forEach(([role, prefix, pw, jml, gelarD, gelarB]) => {
    for (let i = 0; i < jml; i++) {
      const jk = (role === 3 || role === 8 || role === 4) && i % 3 !== 2 ? 'P' : (i % 2 ? 'P' : 'L');
      addStaff((gelarD ? gelarD + ' ' : '') + nama(jk) + gelarB, prefix + '.' + pad(i + 2), role, null, jk, pw, role === 3 ? { unit_kerja: unitPerawat[i % unitPerawat.length] } : {});
    }
  });

  /* ---------- JADWAL PRAKTIK ---------- */
  const dokters = DB.pegawai.rows.filter((p) => p.role_id === 2);
  const byPoli = {}; dokters.forEach((p) => { (byPoli[p.poli_id] = byPoli[p.poli_id] || []).push(p.id); });
  const hariKerja = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
  const addJadwal = (dok, poli, hari, a, b, kuota) => add('jadwal_dokter', { dokter_id: dok, poli_id: poli, hari, jam_mulai: a, jam_selesai: b, kuota });
  const sudah = new Set(DB.jadwal_dokter.rows.map((j) => j.dokter_id + '|' + j.poli_id + '|' + j.hari));
  const tambahJ = (dok, poli, hari, a, b, k) => { const key = dok + '|' + poli + '|' + hari; if (!sudah.has(key)) { sudah.add(key); addJadwal(dok, poli, hari, a, b, k); } };
  dokters.forEach((p, i) => {
    if (!p.poli_id || p.poli_id === 7) return;
    const mulai = hariKerja.indexOf(p.id % 2 ? 'Selasa' : 'Senin'), pagi = p.id % 3 !== 0;
    for (let k = 0; k < 3; k++) { const h = hariKerja[(mulai + k * 2 + (i % 2)) % 6]; tambahJ(p.id, p.poli_id, h, pagi ? '08:00' : '13:00', pagi ? '12:00' : '17:00', 15 + (i % 4) * 5); }
  });
  (byPoli[7] || []).forEach((id, i) => { if (id !== 6) { const sh = [['07:00', '14:00'], ['14:00', '21:00'], ['21:00', '23:59']][i % 3]; tambahJ(id, 7, 'Setiap Hari', sh[0], sh[1], 0); } });

  /* ---------- MASTER DATA ---------- */
  const parse = (txt) => txt.trim().split('\n').map((l) => l.trim()).filter(Boolean).map((l) => l.split('|'));
  const namaAda = (t) => new Set(DB[t].rows.map((r) => String(r.nama).toLowerCase()));
  const kodeSeq = (t, pfx) => { let c = DB[t].rows.length; return () => pfx + String(++c).padStart(3, '0'); };

  // Obat: nama|satuan|harga
  const obatTxt = `
Paracetamol Sirup 120 mg/5 ml|botol|9000
Paracetamol Drops 100 mg/ml|botol|12000
Paracetamol Infus 1 g/100 ml|flakon|45000
Ibuprofen Sirup 100 mg/5 ml|botol|14000
Asam Mefenamat 500 mg|tablet|1000
Natrium Diklofenak 50 mg|tablet|1200
Meloxicam 15 mg|tablet|1800
Ketorolac 30 mg/ml|ampul|18000
Tramadol 50 mg|kapsul|2500
Amoxicillin Sirup 125 mg/5 ml|botol|18000
Amoxicillin-Clavulanat 625 mg|tablet|9500
Cefixime 200 mg|kapsul|7500
Cefadroxil 500 mg|kapsul|3800
Ciprofloxacin 500 mg|tablet|3000
Levofloxacin 500 mg|tablet|11000
Azithromycin 500 mg|tablet|14000
Clindamycin 300 mg|kapsul|4500
Metronidazol 500 mg|tablet|1200
Cotrimoxazole 480 mg|tablet|900
Doxycycline 100 mg|kapsul|1500
Ceftriaxone 1 g|vial|32000
Cefotaxime 1 g|vial|25000
Ampicillin 1 g|vial|12000
Gentamicin 80 mg/2 ml|ampul|6000
Meropenem 1 g|vial|185000
Acyclovir 400 mg|tablet|2500
Fluconazole 150 mg|kapsul|12000
Albendazole 400 mg|tablet|6000
Oseltamivir 75 mg|kapsul|22000
Lansoprazole 30 mg|kapsul|4500
Pantoprazole 40 mg|tablet|5000
Pantoprazole 40 mg inj|vial|38000
Antasida DOEN|tablet|500
Antasida Sirup|botol|8000
Domperidone 10 mg|tablet|800
Ondansetron 4 mg|tablet|3500
Ondansetron 4 mg/2 ml|ampul|15000
Sukralfat Sirup|botol|45000
Laktulosa Sirup|botol|78000
Bisacodyl Supp 10 mg|supp|6000
Zinc 20 mg|tablet|1500
Oralit|sachet|1500
Loperamide 2 mg|tablet|700
Attapulgit|tablet|600
Probiotik|sachet|6500
Hyoscine Butylbromide 10 mg|tablet|1800
Hyoscine Butylbromide 20 mg/ml|ampul|9000
Metoklopramid 10 mg/2 ml|ampul|5000
Amlodipine 5 mg|tablet|500
Candesartan 16 mg|tablet|6000
Valsartan 80 mg|tablet|7500
Captopril 25 mg|tablet|500
Bisoprolol 5 mg|tablet|2500
Furosemide 40 mg|tablet|400
Furosemide 20 mg/2 ml|ampul|4000
Spironolakton 25 mg|tablet|1800
Simvastatin 20 mg|tablet|900
Atorvastatin 20 mg|tablet|3500
Clopidogrel 75 mg|tablet|4500
Asam Asetilsalisilat 80 mg|tablet|800
Isosorbid Dinitrat 5 mg|tablet|1000
Digoxin 0,25 mg|tablet|1500
Amiodaron 200 mg|tablet|7000
Heparin 5000 IU/ml|vial|65000
Enoxaparin 40 mg|spuit|110000
Warfarin 2 mg|tablet|1500
Glimepiride 2 mg|tablet|1800
Gliclazide 80 mg|tablet|2000
Pioglitazon 30 mg|tablet|2500
Acarbose 50 mg|tablet|3500
Insulin Aspart Pen|pen|150000
Insulin Glargine Pen|pen|210000
Insulin Human Regular|vial|95000
Levothyroxine 100 mcg|tablet|2500
Metimazol 5 mg|tablet|1500
Salbutamol 4 mg|tablet|500
Salbutamol Nebule 2,5 mg|ampul|9000
Ipratropium Nebule 0,5 mg|ampul|18000
Budesonide Nebule 0,5 mg|ampul|22000
Salbutamol Inhaler 100 mcg|inhaler|85000
Salmeterol/Fluticasone Inhaler 250 mcg|inhaler|310000
Loratadin 10 mg|tablet|1500
CTM 4 mg|tablet|200
Dexamethasone 0,5 mg|tablet|300
Dexamethasone 5 mg/ml|ampul|4000
Methylprednisolone 4 mg|tablet|2800
Prednison 5 mg|tablet|400
Teofilin 150 mg|tablet|500
N-Acetylcysteine 200 mg|kapsul|3200
Dextromethorphan 15 mg|tablet|500
Piracetam 800 mg|tablet|1500
Citicoline 500 mg|tablet|9000
Citicoline 500 mg/4 ml|ampul|28000
Gabapentin 300 mg|kapsul|3500
Pregabalin 75 mg|kapsul|6500
Carbamazepin 200 mg|tablet|1000
Fenitoin 100 mg|kapsul|1500
Fenitoin 50 mg/ml|ampul|18000
Asam Valproat 250 mg|kapsul|2500
Diazepam 5 mg|tablet|800
Diazepam 5 mg/ml|ampul|9000
Alprazolam 0,5 mg|tablet|1500
Amitriptilin 25 mg|tablet|600
Sertraline 50 mg|tablet|4500
Risperidone 2 mg|tablet|2000
Haloperidol 5 mg|tablet|600
Betahistine 6 mg|tablet|1800
Flunarizin 5 mg|tablet|1200
Mecobalamin 500 mcg|tablet|3000
Vitamin B Kompleks|tablet|400
Sumatriptan 50 mg|tablet|12000
Vitamin C 500 mg|tablet|600
Vitamin B6 10 mg|tablet|300
Asam Folat 400 mcg|tablet|500
Tablet Tambah Darah (Fe + Folat)|tablet|600
Kalsium Laktat 500 mg|tablet|500
Vitamin D3 1000 IU|kapsul|3500
Zinc Sirup|botol|22000
Multivitamin Anak Sirup|botol|35000
Vitamin A 200.000 IU|kapsul|3000
Hidrokortison Krim 2,5% 5 g|tube|12000
Betametason Krim 5 g|tube|14000
Gentamicin Salep Kulit 5 g|tube|12000
Asam Fusidat Krim 15 g|tube|85000
Miconazole Krim 10 g|tube|22000
Ketoconazole Krim 15 g|tube|18000
Permethrin Krim 5% 30 g|tube|75000
Kloramfenikol Salep Mata 1%|tube|14000
Levofloxacin Tetes Mata 5 ml|botol|45000
Tetes Mata Air Mata Buatan 15 ml|botol|38000
Ofloxacin Tetes Telinga 5 ml|botol|52000
Mometason Nasal Spray|botol|135000
Povidone Iodine 10% 100 ml|botol|18000
Misoprostol 200 mcg|tablet|12000
Oksitosin 10 IU/ml|ampul|12000
Metilergometrin 0,2 mg/ml|ampul|14000
Asam Traneksamat 500 mg|tablet|3000
Asam Traneksamat 500 mg/5 ml|ampul|25000
Magnesium Sulfat 20% 25 ml|vial|35000
Nifedipin 10 mg|tablet|700
Dydrogesteron 10 mg|tablet|11000
Tamsulosin 0,4 mg|kapsul|5500
Allopurinol 100 mg|tablet|700
Allopurinol 300 mg|tablet|1200
Colchicine 0,5 mg|tablet|2500
Febuxostat 40 mg|tablet|9000
Lidokain 2% 2 ml|ampul|5000
Bupivacaine Spinal 0,5% 4 ml|ampul|55000
Propofol 1% 20 ml|vial|85000
Midazolam 5 mg/ml|ampul|38000
Fentanyl 50 mcg/ml|ampul|45000
Atropin 0,25 mg/ml|ampul|3500
Epinefrin (Adrenalin) 1 mg/ml|ampul|9000
Efedrin 50 mg/ml|ampul|15000
Neostigmin 0,5 mg/ml|ampul|8000
Ketamin 50 mg/ml|vial|35000
NaCl 0,9% 500 ml|kolf|12000
Dextrose 5% 500 ml|kolf|12500
Dextrose 40% 25 ml|flakon|9000
Aqua Pro Injeksi 25 ml|vial|4500
KCl 7,46% 25 ml|vial|7500
Natrium Bikarbonat 8,4% 25 ml|vial|14000
Kalsium Glukonas 10% 10 ml|ampul|8000
Manitol 20% 100 ml|kolf|38000
Albumin 20% 100 ml|flakon|480000
Vitamin K 10 mg/ml|ampul|7500
Ringer Asetat 500 ml|kolf|14000
Aminofusin 500 ml|kolf|68000`;
  { const ada = namaAda('obat'), kode = kodeSeq('obat', 'OB'); let i = 0;
    parse(obatTxt).forEach(([nm, sat, hrg]) => { if (ada.has(nm.toLowerCase())) return; i++; const low = i % 23 === 0; add('obat', { kode: kode(), nama: nm, satuan: sat, harga: +hrg, stok: low ? ri(2, 9) : ri(40, 420), stok_min: low ? 20 : ri(15, 40) }); }); }

  // BMHP & barang: nama|kategori|satuan|stok|min
  const brgTxt = `
Sarung Tangan Steril 6,5|APD|box|30|10
Sarung Tangan Steril 7,5|APD|box|45|10
Masker N95|APD|box|18|6
Gaun Operasi Steril|APD|pcs|60|20
Penutup Kepala (Nurse Cap)|APD|box|20|5
Pelindung Wajah (Face Shield)|APD|pcs|40|10
Coverall Isolasi|APD|pcs|25|10
Spuit 1 cc|Alkes Habis Pakai|pcs|600|150
Spuit 5 cc|Alkes Habis Pakai|pcs|800|200
Spuit 10 cc|Alkes Habis Pakai|pcs|450|100
Spuit 20 cc|Alkes Habis Pakai|pcs|200|50
IV Catheter 18G|Alkes Habis Pakai|pcs|150|40
IV Catheter 20G|Alkes Habis Pakai|pcs|220|50
IV Catheter 22G|Alkes Habis Pakai|pcs|180|40
IV Catheter 24G (Neonatus)|Alkes Habis Pakai|pcs|60|20
Transfusi Set|Alkes Habis Pakai|pcs|80|20
Infus Set Mikro (Anak)|Alkes Habis Pakai|pcs|90|25
Kateter Foley 16 Fr|Alkes Habis Pakai|pcs|60|15
Urine Bag|Alkes Habis Pakai|pcs|100|25
Nasogastric Tube 16 Fr|Alkes Habis Pakai|pcs|40|10
Endotracheal Tube 7,5|Alkes Habis Pakai|pcs|25|8
Masker Oksigen Dewasa|Alkes Habis Pakai|pcs|50|15
Nasal Kanul Dewasa|Alkes Habis Pakai|pcs|70|20
Nebulizer Mask|Alkes Habis Pakai|pcs|45|15
Elektroda EKG|Alkes Habis Pakai|pak|35|10
Jelly USG 250 ml|Alkes Habis Pakai|botol|24|8
Benang Jahit Silk 3-0|Alkes Habis Pakai|pcs|120|30
Benang Jahit Chromic 2-0|Alkes Habis Pakai|pcs|90|30
Benang Jahit Vicryl 2-0|Alkes Habis Pakai|pcs|70|20
Mess Pisau Bedah No. 15|Alkes Habis Pakai|pcs|100|30
Plester Hipafix 10 cm|Alkes Habis Pakai|roll|45|12
Kasa Gulung|Alkes Habis Pakai|roll|200|50
Elastic Bandage 10 cm|Alkes Habis Pakai|roll|40|10
Gips Elastis 10 cm|Alkes Habis Pakai|roll|36|10
Tabung Vacutainer EDTA|Laboratorium|pcs|900|200
Tabung Vacutainer SST|Laboratorium|pcs|800|200
Tabung Vacutainer Sitrat|Laboratorium|pcs|400|100
Reagen Hematologi Analyzer|Laboratorium|pak|8|3
Reagen Kimia Klinik|Laboratorium|pak|12|4
Strip Gula Darah|Laboratorium|box|30|8
Strip Urinalisis|Laboratorium|box|14|4
Pot Sampel Urine|Laboratorium|pcs|500|100
Film Rontgen 35 x 43|Radiologi|box|10|3
Kontras Iohexol 350|Radiologi|botol|14|5
Linen Sprei Putih|Linen|pcs|180|60
Linen Sarung Bantal|Linen|pcs|200|60
Selimut Pasien|Linen|pcs|120|40
Baju Pasien|Linen|pcs|250|80
Gown Pasien Anak|Linen|pcs|70|20
Alkohol 70% 1 L|Kebersihan|botol|40|12
Handrub 500 ml|Kebersihan|botol|90|25
Sabun Cuci Tangan Antiseptik|Kebersihan|botol|50|15
Desinfektan Permukaan|Kebersihan|jerigen|14|4
Kantong Sampah Medis Kuning|Kebersihan|pak|60|20
Safety Box 5 L|Kebersihan|pcs|80|25
Kertas Printer Thermal|ATK|roll|60|15
Tinta Printer Label|ATK|pcs|12|4
Map Rekam Medis|ATK|pcs|800|200
Gelang Identitas Pasien Dewasa|ATK|pcs|600|150
Gelang Identitas Pasien Anak|ATK|pcs|300|80
Tabung Oksigen 6 m3|Gas Medis|tabung|24|8
Tabung Oksigen 1 m3|Gas Medis|tabung|30|10
Nitrous Oksida|Gas Medis|tabung|6|2
Makanan Pasien Biasa|Gizi|porsi|0|0
Susu Formula Bayi 0-6 bulan|Gizi|kaleng|40|12
Enteral Nutrition (Peptamen)|Gizi|kaleng|35|10`;
  { const ada = namaAda('barang'), kode = kodeSeq('barang', 'BR');
    parse(brgTxt).forEach(([nm, kat, sat, st, mn]) => { if (ada.has(nm.toLowerCase()) || +st === 0) return; add('barang', { kode: kode(), nama: nm, kategori: kat, satuan: sat, stok: +st, stok_min: +mn }); }); }

  // Pemeriksaan penunjang: kategori|nama|satuan|rujukan|tarif
  const pemTxt = `
Lab|Hematokrit|%|37-47|25000
Lab|Eritrosit|10^6/uL|4-5.5|25000
Lab|LED|mm/jam|0-20|25000
Lab|Gula Darah Puasa|mg/dL|70-100|30000
Lab|Gula Darah 2 Jam PP|mg/dL|70-140|30000
Lab|HbA1c|%|4-5.6|120000
Lab|Trigliserida|mg/dL|0-150|45000
Lab|Kolesterol HDL|mg/dL|40-80|45000
Lab|Kolesterol LDL|mg/dL|0-130|45000
Lab|Ureum|mg/dL|10-50|40000
Lab|Bilirubin Total|mg/dL|0.1-1.2|40000
Lab|Albumin|g/dL|3.5-5.2|40000
Lab|Natrium|mmol/L|135-145|35000
Lab|Kalium|mmol/L|3.5-5.1|35000
Lab|Klorida|mmol/L|98-107|35000
Lab|Kalsium|mg/dL|8.6-10.2|35000
Lab|CRP Kuantitatif|mg/L|0-5|90000
Lab|Troponin I|ng/mL|0-0.04|180000
Lab|CK-MB|U/L|0-25|120000
Lab|D-Dimer|ng/mL|0-500|250000
Lab|PT (Protrombin Time)|detik|11-14|70000
Lab|APTT|detik|25-37|70000
Lab|Golongan Darah ABO-Rh|-||35000
Lab|HBsAg|-|Negatif|65000
Lab|Anti-HCV|-|Negatif|110000
Lab|Anti-HIV (Rapid)|-|Non-reaktif|90000
Lab|Widal|-|Negatif|60000
Lab|Tes Kehamilan (hCG)|-|Negatif|40000
Lab|TSH|uIU/mL|0.4-4.0|130000
Lab|fT4|ng/dL|0.8-1.8|130000
Lab|Feses Rutin|-|Normal|40000
Lab|Kultur Urin dan Resistensi|-|Steril|220000
Lab|Analisa Gas Darah|-|Normal|250000
Lab|Laktat|mmol/L|0.5-2.2|110000
Lab|Amilase|U/L|28-100|75000
Lab|Procalcitonin|ng/mL|0-0.5|450000
Lab|PSA Total|ng/mL|0-4|230000
Lab|BTA Sputum|-|Negatif|50000
Lab|Tes Cepat Malaria|-|Negatif|70000
Lab|Mikroalbumin Urin|mg/L|0-20|95000
Lab|Asam Urat Urin 24 Jam|mg/24 jam|250-750|85000
Radiologi|Rontgen Abdomen (BNO 3 Posisi)||null|220000
Radiologi|Rontgen Panoramik||null|140000
Radiologi|Rontgen Lumbosakral||null|165000
Radiologi|Rontgen Cervical||null|150000
Radiologi|Rontgen Genu||null|140000
Radiologi|Rontgen Pelvis||null|150000
Radiologi|Rontgen Sinus Paranasal||null|150000
Radiologi|USG Thyroid||null|230000
Radiologi|USG Mammae||null|260000
Radiologi|USG Urologi (Ginjal dan Buli)||null|240000
Radiologi|Mammografi||null|450000
Radiologi|CT Scan Thorax||null|1100000
Radiologi|CT Scan Abdomen||null|1500000
Radiologi|MRI Kepala||null|2100000
Radiologi|MRI Lutut||null|1900000
Radiologi|Ekokardiografi (Echo)||null|450000
Radiologi|Densitometri Tulang (BMD)||null|380000`;
  { const ada = namaAda('pemeriksaan');
    parse(pemTxt).forEach(([kat, nm, sat, rj, hrg]) => { if (ada.has(nm.toLowerCase())) return; add('pemeriksaan', { kategori: kat, nama: nm, satuan: sat || null, nilai_rujukan: (!rj || rj === 'null') ? null : rj, tarif: +hrg }); }); }

  // Tindakan: nama|tarif
  const tdkTxt = `
Pemasangan NGT|95000
Bilas Lambung|180000
Pemasangan Oksigen|45000
Suction / Hisap Lendir|60000
Resusitasi Jantung Paru (RJP)|450000
Pemasangan Infus Anak|90000
Pemasangan Cast / Gips Sirkuler|350000
Pemasangan Bidai / Spalk|150000
Reposisi Dislokasi|400000
Debridement Luka|275000
Ganti Verban (Luka Bersih)|45000
Ganti Verban (Luka Kotor / Diabetik)|85000
Insisi Abses|300000
Ekstirpasi Kista / Lipoma Kecil|650000
Eksisi Tumor Jinak Kulit|750000
Sirkumsisi|700000
Cabut Kuku (Avulsi)|250000
Pungsi Pleura|550000
Pemasangan WSD|1200000
Nebulisasi Ulang (per Sesi)|55000
Spirometri|120000
Audiometri|150000
Timpanometri|130000
Ekstraksi Serumen|90000
Nasal Packing (Tampon Hidung)|220000
Elektrokardiografi 12 Sadapan|80000
Treadmill Test|450000
Holter Monitor 24 Jam|900000
EEG|420000
EMG / NCV|650000
Fisioterapi (per Sesi)|85000
Terapi Latihan Gerak|95000
Okupasi Terapi|90000
Tonometri|75000
Refraksi / Koreksi Visus|65000
Pemeriksaan Funduskopi|85000
Pencabutan Gigi Sederhana|150000
Tumpatan Gigi Komposit|250000
Scaling Gigi|300000
Perawatan Saluran Akar (per Kunjungan)|450000
Pemantauan Persalinan (Partograf)|250000
Persalinan Normal|2800000
Perawatan Nifas|180000
Kuretase|1900000
Pemasangan IUD|450000
Pemasangan Implan KB|550000
Fototerapi Neonatus (per Hari)|350000
Transfusi Darah (per Kantong)|300000
Hemodialisis (per Sesi)|900000
Pemasangan Ventilator (per Hari)|1500000
Konseling Gizi|75000`;
  { const ada = namaAda('tindakan_master'); parse(tdkTxt).forEach(([nm, hrg]) => { if (!ada.has(nm.toLowerCase())) add('tindakan_master', { nama: nm, tarif: +hrg }); }); }

  // ICD-10 tambahan: kode|nama
  const icdTxt = `
A15.0|Tuberkulosis paru, terkonfirmasi BTA
A16.2|Tuberkulosis paru tanpa konfirmasi bakteriologis
A37.9|Pertusis
A41.9|Sepsis, tidak spesifik
A90|Demam dengue (DD)
B20|Penyakit HIV
B24|Penyakit HIV, tidak spesifik
B35.4|Tinea korporis
B86|Skabies
C50.9|Neoplasma ganas payudara
C53.9|Neoplasma ganas serviks uteri
C34.9|Neoplasma ganas bronkus dan paru
D50.9|Anemia defisiensi besi
D64.9|Anemia, tidak spesifik
E03.9|Hipotiroidisme
E05.9|Tirotoksikosis (hipertiroid)
E10|Diabetes melitus tipe 1
E11.9|Diabetes melitus tipe 2 tanpa komplikasi
E16.2|Hipoglikemia
E66.9|Obesitas
E86|Dehidrasi
E87.1|Hiponatremia
F20.9|Skizofrenia
F32.9|Episode depresif
F41.1|Gangguan cemas menyeluruh
F41.9|Gangguan cemas
G40.9|Epilepsi
G44.2|Nyeri kepala tipe tegang
G51.0|Bell palsy
G62.9|Polineuropati
H10.9|Konjungtivitis
H25.9|Katarak senilis
H40.9|Glaukoma
H52.1|Miopia
H66.9|Otitis media
H61.2|Impaksi serumen
I11.9|Penyakit jantung hipertensi
I20.9|Angina pektoris
I21.0|Infark miokard akut dinding anterior
I25.1|Penyakit jantung aterosklerotik
I48|Fibrilasi atrium
I50.9|Gagal jantung
I61.9|Perdarahan intraserebral
I64|Stroke, tidak spesifik
I83.9|Varises vena tungkai
J02.9|Faringitis akut
J03.9|Tonsilitis akut
J01.9|Sinusitis akut
J04.0|Laringitis akut
J20.9|Bronkitis akut
J21.9|Bronkiolitis akut
J30.4|Rinitis alergi
J32.9|Sinusitis kronis
J44.1|PPOK eksaserbasi akut
J44.9|PPOK
J45.0|Asma alergika
J81|Edema paru
J90|Efusi pleura
K02.9|Karies gigi
K04.0|Pulpitis
K21.9|GERD
K25.9|Ulkus lambung
K30|Dispepsia
K35.9|Apendisitis akut
K40.9|Hernia inguinalis
K52.9|Gastroenteritis non-infeksi
K70.3|Sirosis hepatis alkoholik
K74.6|Sirosis hepatis
K80.2|Kolelitiasis
L20.9|Dermatitis atopik
L23.9|Dermatitis kontak alergi
L30.9|Dermatitis
L40.9|Psoriasis
L50.9|Urtikaria
L70.0|Akne vulgaris
L02.9|Abses kulit
M10.9|Gout (artritis gout)
M17.9|Osteoartritis lutut
M19.9|Osteoartritis
M54.2|Nyeri leher (servikalgia)
M54.4|Lumbago dengan skiatika
M79.1|Mialgia
M81.9|Osteoporosis
N10|Pielonefritis akut
N18.9|Penyakit ginjal kronik
N20.0|Batu ginjal
N40|Pembesaran prostat jinak (BPH)
N92.6|Menstruasi tidak teratur
N93.9|Perdarahan uterus abnormal
N76.0|Vaginitis akut
O13|Hipertensi gestasional
O14.9|Preeklamsia
O20.0|Ancaman abortus
O21.0|Hiperemesis gravidarum ringan
O42.9|Ketuban pecah dini
O47.0|His palsu
O82|Persalinan sectio caesarea
Z34.9|Pengawasan kehamilan normal
Z30.9|Konseling kontrasepsi
Z23|Imunisasi
Z76.0|Pengulangan resep
P07.3|Bayi prematur
P59.9|Ikterus neonatorum
P22.9|Gangguan napas neonatus
R06.0|Dispnea
R07.4|Nyeri dada
R10.4|Nyeri perut
R11|Mual dan muntah
R42|Pusing
R55|Sinkop
R56.0|Kejang demam
S01.0|Luka terbuka kulit kepala
S01.9|Luka terbuka kepala
S61.9|Luka terbuka tangan
S72.0|Fraktur kolum femur
S82.9|Fraktur tungkai bawah
S93.4|Keseleo pergelangan kaki
T14.1|Luka terbuka
T78.4|Alergi
T78.2|Syok anafilaksis
V89.2|Kecelakaan lalu lintas
Z71.3|Konseling diet
Z00.1|Pemeriksaan kesehatan anak rutin
Z01.0|Pemeriksaan mata
Z01.1|Pemeriksaan telinga
Z12.3|Skrining kanker payudara
Z13.1|Skrining diabetes
Z51.5|Perawatan paliatif
Z49.1|Dialisis`;
  { const ada = new Set(DB.icd10.rows.map((r) => r.kode)); parse(icdTxt).forEach(([kode, nm]) => { if (!ada.has(kode)) { ada.add(kode); add('icd10', { kode, nama: nm }); } }); }

  // Kamar tambahan
  [['Melati 3', 'Kelas 3', 4, 250000], ['Melati 4 (Bedah)', 'Kelas 3', 4, 250000], ['Mawar 2', 'Kelas 2', 2, 400000], ['Mawar 3', 'Kelas 2', 2, 400000], ['Anggrek VIP 2', 'VIP', 1, 900000], ['Anggrek VIP 3', 'VIP', 1, 900000], ['Bangsal Nifas', 'Kelas 2', 4, 450000], ['Flamboyan 3', 'Kelas 1', 2, 650000]].forEach(([nm, kl, kap, tr]) => { if (!DB.kamar.rows.some((k) => k.nama === nm)) add('kamar', { nama: nm, kelas: kl, kapasitas: kap, tarif: tr }); });

  /* ---------- PASIEN ---------- */
  const jalan = ['Jl. Ketintang', 'Jl. Gayungan', 'Jl. Jemursari', 'Jl. Raya Darmo', 'Jl. Wonokromo', 'Jl. Diponegoro', 'Jl. Pemuda', 'Jl. Basuki Rahmat', 'Jl. Mayjen Sungkono', 'Jl. Ngagel Jaya', 'Jl. Rungkut Madya', 'Jl. Kenjeran', 'Jl. Menur', 'Jl. Dharmahusada', 'Jl. Manyar Kertoadi'];
  const alergiPool = [null, null, null, null, null, null, 'Amoxicillin', 'Seafood', 'Debu', 'Ibuprofen', 'Kacang', 'Sulfa', 'Lateks', 'Penisilin'];
  const gd = ['A', 'B', 'AB', 'O', 'O', 'A'];
  const pj = ['BPJS', 'BPJS', 'BPJS', 'BPJS', 'BPJS', 'Umum', 'Umum', 'Umum', 'Asuransi', 'Asuransi'];
  const mulaiP = DB.pasien.rows.length;
  for (let i = 0; i < 90; i++) {
    const id = DB.pasien.next, jk = i % 2 ? 'P' : 'L', th = pick([1948, 1952, 1957, 1961, 1966, 1971, 1975, 1980, 1984, 1988, 1992, 1996, 2000, 2004, 2009, 2014, 2018, 2021, 2023, 2025]) + ri(0, 2);
    const tgl = `${Math.min(th, 2026)}-${pad(ri(1, 12))}-${pad(ri(1, 28))}`, pen = pick(pj);
    add('pasien', { nomor_rm: 'RM-2026-' + String(id).padStart(6, '0'), nik: '3578' + String(100000000000 + id * 102947).slice(0, 12), nama_lengkap: nama(jk), tanggal_lahir: tgl, jenis_kelamin: jk, alamat: pick(jalan) + ' No. ' + ri(1, 120) + ', Surabaya', no_hp: '0813' + String(45000000 + id * 913).slice(0, 8), golongan_darah: pick(gd), alergi: pick(alergiPool), penjamin: pen, no_penjamin: pen === 'BPJS' ? '000' + String(2000000000 + id * 7919).slice(0, 10) : pen === 'Asuransi' ? 'ASR-' + String(70000000 + id * 31) : null, created_at: addDays(d, -ri(10, 200)) + ' 09:00:00' });
  }
  return { roster, byPoli, add, ri, pick, chance, rnd, addDays, hariOf, ts, hhmm, curMin, HARI, mulaiP };
}

function seedHistory(DB, X, d, n) {
  const { add, ri, pick, chance, rnd, addDays, hariOf, ts, hhmm, curMin } = X;
  const miss = [];
  const low = (s) => String(s).toLowerCase();
  const get = (t, s) => { const q = low(s), rows = DB[t].rows; const r = rows.find((x) => low(x.nama) === q) || rows.find((x) => low(x.nama).startsWith(q)) || rows.find((x) => low(x.nama).includes(q)); if (!r) miss.push(t + ':' + s); return r || null; };
  const staff = (role) => DB.pegawai.rows.filter((p) => p.role_id === role && p.status === 'Aktif');
  const S = { daftar: staff(4), perawat: staff(3), lab: staff(6), rad: staff(7), apt: staff(8), kasir: staff(10), gudang: staff(9) };
  const flagLab = (v0, rj) => { const m = /^\s*([\d.]+)\s*-\s*([\d.]+)\s*$/.exec(rj || ''); const v = +String(v0).replace(',', '.'); if (m && !isNaN(v)) { const lo = +m[1], hi = +m[2]; if (v < lo * 0.5 || (hi > 0 && v > hi * 2)) return 'Kritis'; if (v < lo) return 'Rendah'; if (v > hi) return 'Tinggi'; return 'Normal'; } if (rj && String(v0).trim().toLowerCase() !== String(rj).trim().toLowerCase()) return 'Abnormal'; return 'Normal'; };
  const lama = (a, b) => Math.max(1, Math.round((new Date(b.slice(0, 10) + 'T00:00:00') - new Date(a.slice(0, 10) + 'T00:00:00')) / 86400000));
  const umur = (p, ds) => (new Date(ds + 'T12:00:00') - new Date(p.tanggal_lahir + 'T12:00:00')) / 31557600000;

  const vit = (tp, age) => {
    const kid = age < 12; let sis = kid ? ri(90, 108) : ri(108, 128), dia = kid ? ri(56, 70) : ri(68, 82), nadi = kid ? ri(88, 118) : ri(66, 92), rr = kid ? ri(20, 28) : ri(16, 20), suhu = +(36.3 + rnd() * 0.5).toFixed(1), spo2 = ri(97, 99);
    if (tp === 'ht') { sis = ri(142, 178); dia = ri(88, 106); } if (tp === 'f') { suhu = +(37.9 + rnd() * 1.6).toFixed(1); nadi += 14; }
    if (tp === 'r') { rr = ri(24, 32); spo2 = ri(89, 95); nadi += 12; } if (tp === 'ac') { sis = ri(100, 170); dia = ri(60, 100); nadi = ri(96, 124); rr = ri(20, 26); spo2 = ri(92, 96); }
    if (tp === 'sh') { sis = ri(75, 92); dia = ri(45, 58); nadi = ri(110, 135); rr = ri(24, 30); spo2 = ri(92, 96); }
    return { td_sistolik: sis, td_diastolik: dia, nadi, rr, suhu, spo2, berat_badan: kid ? +(3.3 + age * 2.6 + rnd() * 2).toFixed(1) : +(48 + rnd() * 40).toFixed(1), tinggi_badan: kid ? Math.round(50 + age * 6.2) : Math.round(150 + rnd() * 28) };
  };

  /* ---------- TEMPLATE KASUS PER POLI ----------
     tp(keluhan, S, O, A, icd, plan, {labs, rads, obat, tdk, v, tri, pr, km, ped, fem, lansia})
     labs: nama (akhiran ! = abnormal, !! = kritis) · rads: [nama, temuan, kesan, abnormal] · obat: [nama, jumlah, aturan] */
  const tp = (k, s, o, a, icd, plan, x = {}) => ({ k, s, o, a, icd, plan, labs: [], rads: [], obat: [], tdk: [], v: 'n', ...x });
  const OB = { para: ['Paracetamol 500 mg', 10, '3x1 tablet bila demam / nyeri'], vitc: ['Vitamin C 500 mg', 10, '1x1 tablet pagi'], omep: ['Omeprazole 20 mg', 14, '1x1 kapsul sebelum makan pagi'], amlo: ['Amlodipine 10 mg', 30, '1x1 tablet pagi'] };
  const T = {};
  T[1] = [
    tp('Batuk pilek 3 hari, demam ringan', 'Batuk berdahak, pilek, nyeri menelan. Demam ringan sejak 2 hari. Tidak sesak.', 'Faring hiperemis, tonsil T1-T1 tenang. Paru vesikuler, tidak ada ronki/mengi.', 'Infeksi saluran napas atas akut', 'J06.9', 'Terapi simptomatik, istirahat, perbanyak minum air hangat. Kontrol bila demam > 3 hari atau sesak.', { obat: [OB.para, ['Ambroxol 30 mg', 15, '3x1 tablet sesudah makan'], ['Cetirizine 10 mg', 5, '1x1 tablet malam'], OB.vitc], v: 'f' }),
    tp('Nyeri ulu hati, mual, kembung', 'Nyeri ulu hati hilang timbul, memberat bila telat makan. Mual tanpa muntah. BAB normal.', 'Nyeri tekan epigastrium (+), bising usus normal, tidak ada defans muskular.', 'Dispepsia', 'K30', 'Hindari makanan pedas/asam, makan teratur porsi kecil. Kontrol bila nyeri menetap atau ada BAB hitam.', { obat: [OB.omep, ['Antasida DOEN', 30, '3x1 tablet kunyah sebelum makan'], ['Domperidone 10 mg', 15, '3x1 tablet sebelum makan']] }),
    tp('Kontrol tekanan darah', 'Kontrol rutin hipertensi. Pasien rutin minum obat, kadang pusing di pagi hari. Tidak ada nyeri dada.', 'Kesadaran compos mentis. Jantung/paru dalam batas normal. Edema (-).', 'Hipertensi esensial (primer)', 'I10', 'Lanjutkan amlodipine. Diet rendah garam, olahraga teratur. Kontrol 1 bulan.', { labs: ['Kreatinin', 'Kolesterol Total'], obat: [OB.amlo], v: 'ht' }),
    tp('Pegal-pegal dan nyeri otot', 'Nyeri otot punggung dan bahu setelah bekerja berat. Tidak ada riwayat trauma.', 'Nyeri tekan otot paravertebral, ROM bebas, tidak ada defisit neurologis.', 'Mialgia', 'M79.1', 'Kompres hangat, hindari angkat beban berat, peregangan ringan.', { obat: [['Meloxicam 15 mg', 10, '1x1 tablet sesudah makan'], ['Vitamin B Kompleks', 10, '1x1 tablet']] }),
    tp('Pemeriksaan kesehatan berkala', 'Tidak ada keluhan. Datang untuk pemeriksaan kesehatan rutin.', 'Status generalis dalam batas normal.', 'Pemeriksaan kesehatan umum', 'Z00.0', 'Hasil pemeriksaan dalam batas normal. Pertahankan pola hidup sehat.', { labs: ['Hemoglobin', 'Gula Darah Puasa', 'Kolesterol Total'], rads: [['Rontgen Thorax PA', 'Cor dan pulmo tidak tampak kelainan.', 'Foto thorax dalam batas normal.', false]] })
  ];
  T[2] = [
    tp('Kontrol gula darah', 'Kontrol DM tipe 2. Banyak minum dan sering BAK malam hari. Tidak ada luka sulit sembuh.', 'Kesadaran compos mentis. Pemeriksaan fisik dalam batas normal. Kaki: sensasi baik.', 'Diabetes melitus tipe 2 tanpa komplikasi', 'E11.9', 'Lanjutkan terapi, diet DM 1800 kkal, olahraga ringan 30 menit/hari. Kontrol 1 bulan.', { labs: ['Gula Darah Puasa!', 'HbA1c!', 'Kreatinin'], obat: [['Metformin 500 mg', 60, '2x1 tablet sesudah makan'], ['Glimepiride 2 mg', 30, '1x1 tablet sebelum sarapan']] }),
    tp('Nyeri ulu hati dan sering sendawa', 'Rasa panas di dada dan ulu hati, terutama malam hari. Pahit di mulut. Berat badan stabil.', 'Nyeri tekan epigastrium ringan. Tidak ada massa. Hepar/lien tidak teraba.', 'Penyakit refluks gastroesofageal (GERD)', 'K21.9', 'Angkat kepala saat tidur, hindari kopi/makan malam larut. PPI 2 minggu lalu evaluasi.', { rads: [['USG Abdomen', 'Hepar, VF, pankreas, lien, ginjal dalam batas normal.', 'USG abdomen tidak tampak kelainan.', false]], obat: [['Lansoprazole 30 mg', 14, '1x1 kapsul sebelum makan'], ['Antasida Sirup', 2, '3x1 sendok makan sebelum makan']] }),
    tp('Kolesterol tinggi, tekanan darah naik', 'Hasil MCU kantor menunjukkan kolesterol tinggi. Sering pusing tengkuk berat.', 'TD meningkat. Jantung/paru normal. BMI overweight.', 'Hiperlipidemia dan hipertensi', 'E78.5', 'Diet rendah lemak, olahraga teratur, turunkan berat badan. Evaluasi lipid 3 bulan.', { labs: ['Kolesterol Total!', 'Trigliserida!', 'Kolesterol LDL!'], obat: [['Atorvastatin 20 mg', 30, '1x1 tablet malam'], OB.amlo], v: 'ht' }),
    tp('Nyeri sendi jempol kaki', 'Nyeri hebat di sendi pangkal jempol kaki kanan sejak semalam, bengkak dan merah.', 'Arthritis MTP-1 dekstra: bengkak, hangat, nyeri tekan (+).', 'Gout (artritis gout)', 'M10.9', 'Hindari jeroan dan kacang-kacangan, banyak minum air putih. Kontrol 2 minggu.', { labs: ['Asam Urat!', 'Kreatinin'], obat: [['Natrium Diklofenak 50 mg', 10, '2x1 tablet sesudah makan'], ['Allopurinol 100 mg', 30, '1x1 tablet setelah serangan reda']] })
  ];
  T[3] = [
    tp('Demam dan batuk pilek', 'Ibu mengatakan anak demam 2 hari, batuk pilek, nafsu makan menurun. Tidak ada kejang.', 'Anak rewel, faring hiperemis, ronki (-), retraksi (-).', 'Infeksi saluran napas atas akut', 'J06.9', 'Edukasi ibu: kompres, ASI/cairan adekuat. Kontrol bila demam > 3 hari.', { obat: [['Paracetamol sirup 120 mg/5 ml', 1, '3x1 sendok takar bila demam'], ['Multivitamin Anak Sirup', 1, '1x1 sendok takar']], v: 'f', ped: true }),
    tp('Diare sejak 2 hari', 'BAB cair 5-6x/hari tanpa lendir darah. Muntah 1x. Minum masih mau.', 'Mata tidak cekung, turgor kembali cepat, bising usus meningkat.', 'Diare akut tanpa dehidrasi', 'A09', 'Lanjutkan ASI/makan, beri oralit setiap BAB cair, zinc 10 hari.', { obat: [['Zinc 20 mg', 10, '1x1 tablet selama 10 hari'], ['Oralit', 10, 'Satu sachet setiap BAB cair'], ['Probiotik', 10, '1x1 sachet']], ped: true }),
    tp('Demam naik turun 5 hari', 'Demam terutama sore-malam, nyeri perut, mual, BAB sulit.', 'Lidah kotor, nyeri tekan epigastrium, hepatomegali ringan.', 'Demam tifoid', 'A01.0', 'Istirahat, diet lunak. Antibiotik 7 hari. Kontrol 3 hari.', { labs: ['Widal!', 'Hemoglobin', 'Leukosit'], obat: [['Cefixime 200 mg', 14, '2x1/2 kapsul'], ['Paracetamol sirup 120 mg/5 ml', 1, '3x1 sendok takar bila demam']], v: 'f', ped: true }),
    tp('Imunisasi dan kontrol tumbuh kembang', 'Datang untuk imunisasi sesuai jadwal. Tidak ada keluhan. Tidak demam.', 'Anak aktif, status gizi baik, perkembangan sesuai usia.', 'Imunisasi', 'Z23', 'Imunisasi diberikan. Observasi KIPI 30 menit. Jadwal berikutnya diinformasikan.', { tdk: ['Injeksi'], ped: true })
  ];
  T[4] = [
    tp('Benjolan nyeri di punggung', 'Benjolan membesar dan nyeri sejak 5 hari, terasa hangat.', 'Massa 3x3 cm fluktuatif, eritema, nyeri tekan (+).', 'Abses kulit', 'L02.9', 'Insisi dan drainase. Perawatan luka 3 hari sekali.', { tdk: ['Insisi Abses'], obat: [['Cefadroxil 500 mg', 14, '2x1 kapsul'], ['Natrium Diklofenak 50 mg', 10, '2x1 tablet sesudah makan']], labs: ['Gula Darah Sewaktu'] }),
    tp('Benjolan di lipat paha', 'Benjolan di lipat paha kanan, muncul saat mengejan dan hilang saat berbaring.', 'Benjolan reponibel di regio inguinal dekstra. Tidak ada tanda inkarserasi.', 'Hernia inguinalis', 'K40.9', 'Rencana herniorafi elektif. Hindari angkat beban berat.', { labs: ['Hemoglobin', 'PT (Protrombin Time)', 'Golongan Darah ABO-Rh'], rads: [['USG Abdomen', 'Defek dinding abdomen regio inguinal kanan, isi usus.', 'Hernia inguinalis lateralis dekstra reponibel.', true]] }),
    tp('Nyeri perut kanan atas setelah makan berlemak', 'Nyeri perut kanan atas menjalar ke bahu, mual setelah makan berlemak.', 'Nyeri tekan hipokondrium kanan, Murphy sign (+).', 'Kolelitiasis', 'K80.2', 'Rencana kolesistektomi. Diet rendah lemak.', { labs: ['SGOT', 'SGPT', 'Bilirubin Total'], rads: [['USG Abdomen', 'Tampak batu multipel di kandung empedu ukuran 5-9 mm, dinding menebal ringan.', 'Kolelitiasis dengan kolesistitis ringan.', true]], obat: [['Hyoscine Butylbromide 10 mg', 10, '3x1 tablet bila nyeri']] })
  ];
  T[5] = [
    tp('Kontrol kehamilan trimester 2', 'Hamil 24 minggu, gerak janin aktif. Tidak ada perdarahan, kontrol rutin.', 'TD normal, TFU sesuai usia kehamilan, DJJ 144x/menit.', 'Pengawasan kehamilan normal', 'Z34.9', 'Lanjutkan suplemen. Kontrol 4 minggu. Edukasi tanda bahaya kehamilan.', { fem: true, labs: ['Hemoglobin', 'Urinalisis'], rads: [['USG Kehamilan', 'Janin tunggal intrauterin, presentasi kepala, DJJ (+), plasenta fundus, ketuban cukup.', 'Kehamilan normal sesuai usia gestasi.', false]], obat: [['Asam Folat 400 mcg', 30, '1x1 tablet'], ['Tablet Tambah Darah (Fe + Folat)', 30, '1x1 tablet malam'], ['Kalsium Laktat 500 mg', 30, '1x1 tablet']] }),
    tp('Keputihan berbau dan gatal', 'Keputihan kuning kehijauan berbau, gatal sejak 1 minggu.', 'Inspekulo: sekret vagina kekuningan, portio licin.', 'Vaginitis akut', 'N76.0', 'Jaga kebersihan area kewanitaan, pasangan perlu diperiksa.', { fem: true, obat: [['Metronidazol 500 mg', 14, '2x1 tablet selama 7 hari'], ['Fluconazole 150 mg', 1, 'Dosis tunggal']] }),
    tp('Menstruasi banyak dan tidak teratur', 'Haid memanjang 10 hari, banyak, disertai nyeri perut bawah.', 'Konjungtiva agak pucat. Nyeri tekan suprapubik ringan.', 'Perdarahan uterus abnormal', 'N93.9', 'USG transabdominal, terapi hormonal dan antifibrinolitik. Kontrol 2 minggu.', { fem: true, labs: ['Hemoglobin!', 'Tes Kehamilan (hCG)'], rads: [['USG Abdomen', 'Uterus antefleksi, endometrium menebal 14 mm, tidak tampak massa.', 'Kesan penebalan endometrium.', true]], obat: [['Asam Traneksamat 500 mg', 15, '3x1 tablet selama haid'], ['Dydrogesteron 10 mg', 20, '2x1 tablet'], ['Tablet Tambah Darah (Fe + Folat)', 30, '1x1 tablet']] })
  ];
  T[6] = [
    tp('Sakit kepala berdenyut', 'Nyeri kepala sebelah kiri berdenyut disertai mual dan silau. Berulang 2-3 kali sebulan.', 'GCS 15, saraf kranial normal, tidak ada defisit motorik.', 'Migrain', 'G43.9', 'Hindari pencetus (kurang tidur, stres). Catat diari nyeri kepala.', { obat: [['Sumatriptan 50 mg', 6, '1 tablet saat serangan'], ['Flunarizin 5 mg', 30, '1x1 tablet malam']] }),
    tp('Pusing berputar', 'Pusing berputar saat mengubah posisi kepala, mual, tidak ada penurunan pendengaran.', 'Nistagmus (+) pada manuver Dix-Hallpike. Kekuatan motorik normal.', 'Vertigo (BPPV)', 'R42', 'Manuver Epley, edukasi. Kontrol 1 minggu.', { obat: [['Betahistine 6 mg', 30, '3x1 tablet'], ['Vitamin B Kompleks', 14, '1x1 tablet']] }),
    tp('Kesemutan dan baal kedua kaki', 'Kesemutan dan rasa terbakar di telapak kaki sejak 2 bulan, riwayat DM.', 'Sensasi proprioseptif menurun distal, refleks achilles menurun.', 'Polineuropati', 'G62.9', 'Kontrol gula darah ketat. Terapi neurotropik.', { labs: ['Gula Darah Sewaktu!', 'HbA1c!'], obat: [['Mecobalamin 500 mcg', 30, '3x1 tablet'], ['Gabapentin 300 mg', 30, '1x1 kapsul malam']] }),
    tp('Kontrol pasca stroke', 'Pasien pasca stroke iskemik 3 bulan lalu, kelemahan lengan kanan membaik. Bicara jelas.', 'Hemiparesis dekstra motorik 4, refleks patologis (-).', 'Stroke iskemik', 'I63.9', 'Lanjutkan antiplatelet dan statin. Fisioterapi rutin. Kontrol 1 bulan.', { lansia: true, v: 'ht', rads: [['CT Scan Kepala', 'Area hipodens di ganglia basalis kiri, tidak ada perdarahan baru.', 'Infark lama ganglia basalis kiri.', true]], obat: [['Clopidogrel 75 mg', 30, '1x1 tablet'], ['Atorvastatin 20 mg', 30, '1x1 tablet malam'], ['Citicoline 500 mg', 30, '2x1 tablet']] })
  ];
  T[7] = [
    tp('Demam tinggi 4 hari, mual, bintik merah', 'Demam tinggi 4 hari, nyeri otot, mual, nafsu makan turun, muncul bintik merah di lengan.', 'Tampak lemah. Petekie (+). Uji tourniquet (+). Akral hangat.', 'Suspek demam berdarah dengue', 'A91', 'Infus RL, pantau trombosit tiap 12 jam. Rawat inap observasi.', { tri: 'Kuning', v: 'f', labs: ['Trombosit!', 'Hematokrit!', 'Hemoglobin', 'NS1 Antigen Dengue!'], tdk: ['Pemasangan Infus'], obat: [['Ringer Laktat 500 ml', 3, '20 tpm'], OB.para], pr: 0.65, km: ['Kelas 3', 'Kelas 2'] }),
    tp('Diare cair dan muntah, lemas', 'BAB cair > 8x sejak kemarin, muntah 4x, tidak bisa minum.', 'Mata cekung, turgor kembali lambat, mukosa kering, nadi cepat.', 'Gastroenteritis akut dengan dehidrasi sedang', 'A09', 'Rehidrasi IV, antiemetik, evaluasi 4 jam.', { tri: 'Kuning', v: 'sh', labs: ['Kalium', 'Natrium'], tdk: ['Pemasangan Infus'], obat: [['Ringer Laktat 500 ml', 3, '30 tpm'], ['Ondansetron 4 mg/2 ml', 2, '1 ampul IV'], ['Oralit', 10, 'Sesudah BAB']], pr: 0.1, km: ['Kelas 3'] }),
    tp('Sesak napas dan mengi', 'Sesak mendadak setelah terpapar debu, mengi, batuk malam hari. Riwayat asma.', 'Napas cepat, ekspirasi memanjang, wheezing difus.', 'Asma eksaserbasi akut', 'J45.9', 'Nebulisasi 3 kali, steroid sistemik, evaluasi respons.', { tri: 'Kuning', v: 'r', tdk: ['Nebulizer'], obat: [['Salbutamol Nebule 2,5 mg', 3, 'Nebulisasi tiap 20 menit'], ['Dexamethasone 5 mg/ml', 2, '1 ampul IV'], ['Salbutamol 4 mg', 10, '3x1 tablet']], pr: 0.15, km: ['Kelas 3', 'Kelas 2'] }),
    tp('Kecelakaan lalu lintas, nyeri lengan', 'Jatuh dari motor, lengan bawah kanan nyeri dan bengkak, deformitas (+).', 'Deformitas dan nyeri tekan 1/3 distal radius, NVD baik.', 'Fraktur radius distal', 'S52.5', 'Imobilisasi, analgetik, konsul ortopedi.', { tri: 'Kuning', rads: [['Rontgen Ekstremitas', 'Diskontinuitas korteks radius distal dengan displacement ringan.', 'Fraktur radius distal dekstra.', true]], tdk: ['Pemasangan Bidai / Spalk'], obat: [['Ketorolac 30 mg/ml', 2, '1 ampul IV'], ['Cefadroxil 500 mg', 14, '2x1 kapsul']], pr: 0.35, km: ['Melati 4', 'Kelas 3', 'Kelas 2'] }),
    tp('Nyeri dada kiri menjalar ke lengan', 'Nyeri dada seperti ditindih sejak 1 jam, keringat dingin, mual.', 'Tampak kesakitan, akral dingin, S1S2 reguler, tidak ada ronki.', 'Sindrom koroner akut', 'I21.9', 'EKG, tatalaksana ACS, rawat ICCU.', { tri: 'Merah', v: 'ac', lansia: true, labs: ['Troponin I!!', 'CK-MB!'], tdk: ['Elektrokardiografi 12 Sadapan', 'Pemasangan Infus', 'Pemasangan Oksigen'], obat: [['Asam Asetilsalisilat 80 mg', 4, '320 mg sekali (kunyah)'], ['Clopidogrel 75 mg', 4, '300 mg loading'], ['Heparin 5000 IU/ml', 1, 'Bolus IV']], pr: 1, km: ['ICCU', 'HCU'] }),
    tp('Lemah separuh badan, bicara pelo', 'Mendadak lemah sisi kanan dan bicara pelo sejak 2 jam.', 'GCS 14, hemiparesis dekstra, parese N.VII dan N.XII.', 'Stroke iskemik akut', 'I63.9', 'CT Scan kepala, tatalaksana stroke, rawat HCU.', { tri: 'Merah', v: 'ht', lansia: true, rads: [['CT Scan Kepala', 'Hipodensitas di regio kapsula interna kiri, tidak ada perdarahan.', 'Infark akut regio kapsula interna kiri.', true]], tdk: ['Pemasangan Infus', 'Pemasangan Oksigen'], obat: [['Citicoline 500 mg/4 ml', 2, '1 ampul IV'], ['Asam Asetilsalisilat 80 mg', 4, '1x1 tablet']], pr: 1, km: ['HCU', 'ICU'] }),
    tp('Kejang disertai demam', 'Anak kejang 1x selama 2 menit saat demam tinggi, sadar penuh setelah kejang.', 'Suhu tinggi, kesadaran compos mentis, kaku kuduk (-).', 'Kejang demam sederhana', 'R56.0', 'Antipiretik, observasi, edukasi orang tua.', { tri: 'Kuning', v: 'f', ped: true, tdk: ['Pemasangan Infus Anak'], obat: [['Paracetamol sirup 120 mg/5 ml', 1, '3x1 sendok takar bila demam'], ['Diazepam 5 mg', 6, '3x1/2 tablet saat demam (maks 2 hari)']], pr: 0.25, km: ['Dahlia Anak'] }),
    tp('Luka robek di dahi', 'Terbentur meja, luka robek 4 cm di dahi, perdarahan aktif, tidak pingsan.', 'Luka robek 4 cm tepi rata di frontal, dasar subkutis.', 'Luka robek kepala', 'S01.9', 'Cuci luka, jahit primer, profilaksis antibiotik dan tetanus.', { tri: 'Hijau', tdk: ['Hecting / Jahit Luka'], obat: [['Cefadroxil 500 mg', 14, '2x1 kapsul'], ['Natrium Diklofenak 50 mg', 10, '2x1 tablet'], ['Povidone Iodine 10% 100 ml', 1, 'Ganti verban']], pr: 0 }),
    tp('Sakit kepala hebat, tekanan darah tinggi', 'Sakit kepala hebat dan tengkuk berat, mual, riwayat hipertensi tidak rutin minum obat.', 'TD tinggi, kesadaran baik, tidak ada defisit neurologis.', 'Hipertensi urgensi', 'I10', 'Turunkan TD bertahap, observasi 2 jam, edukasi kepatuhan.', { tri: 'Kuning', v: 'ht', tdk: ['Elektrokardiografi 12 Sadapan'], obat: [['Captopril 25 mg', 10, '3x1 tablet'], OB.amlo], pr: 0.05, km: ['Kelas 3'] }),
    tp('Batuk, demam, sesak sejak 3 hari', 'Batuk berdahak kuning, demam menggigil, sesak, nyeri dada saat batuk.', 'Ronki basah kasar di basal kanan, RR meningkat.', 'Pneumonia', 'J18.9', 'Antibiotik IV, oksigen, rawat inap.', { tri: 'Kuning', v: 'r', labs: ['Leukosit!', 'CRP Kuantitatif!'], rads: [['Rontgen Thorax PA', 'Infiltrat di lobus bawah paru kanan, sinus costofrenikus tajam.', 'Bronkopneumonia lobus bawah kanan.', true]], tdk: ['Pemasangan Infus', 'Pemasangan Oksigen'], obat: [['Ceftriaxone 1 g', 4, '1x1 g IV'], ['Ambroxol 30 mg', 15, '3x1 tablet']], pr: 0.7, km: ['Kelas 3', 'Kelas 2', 'Isolasi'] }),
    tp('Nyeri perut kanan bawah', 'Nyeri perut mulai ulu hati lalu pindah ke kanan bawah, mual dan muntah, demam ringan.', 'Nyeri tekan McBurney (+), Rovsing (+), defans muskular lokal.', 'Apendisitis akut', 'K35.9', 'Puasa, antibiotik IV, konsul bedah, rencana apendektomi.', { tri: 'Kuning', labs: ['Leukosit!'], rads: [['USG Abdomen', 'Struktur tubular non-kompresibel di fossa iliaka kanan diameter 9 mm.', 'Sesuai apendisitis akut.', true]], tdk: ['Pemasangan Infus'], obat: [['Ceftriaxone 1 g', 2, '1 g IV'], ['Metronidazol 500 mg', 14, '3x1 tablet']], pr: 0.9, km: ['Melati 4', 'Kelas 2'] }),
    tp('Lemas, keringat dingin, gemetar', 'Pasien DM, lemas mendadak, berkeringat dingin, gemetar setelah minum obat.', 'Kesadaran menurun ringan, akral basah, GDS rendah.', 'Hipoglikemia', 'E16.2', 'Bolus dextrose 40%, pantau GDS tiap 30 menit.', { tri: 'Kuning', labs: ['Gula Darah Sewaktu!'], tdk: ['Pemasangan Infus'], obat: [['Dextrose 40% 25 ml', 2, 'Bolus IV']], pr: 0.1, km: ['Kelas 3'] }),
    tp('Gatal seluruh badan, bengkak wajah', 'Muncul biduran dan bengkak bibir setelah makan udang.', 'Urtikaria generalisata, angioedema bibir, nadi cepat, TD turun.', 'Reaksi alergi akut', 'T78.4', 'Epinefrin IM, antihistamin, steroid, observasi.', { tri: 'Merah', v: 'sh', tdk: ['Pemasangan Infus'], obat: [['Epinefrin (Adrenalin) 1 mg/ml', 1, '0,3 mg IM'], ['Dexamethasone 5 mg/ml', 2, '1 ampul IV'], ['Cetirizine 10 mg', 5, '1x1 tablet']], pr: 0.3, km: ['HCU', 'Kelas 2'] }),
    tp('Demam dan batuk, nafsu makan turun', 'Demam 2 hari, batuk pilek, tidak sesak, masih mau minum.', 'Faring hiperemis, paru bersih.', 'Demam tanpa penyebab jelas / ISPA', 'R50.9', 'Antipiretik, minum cukup, kontrol bila memburuk.', { tri: 'Hijau', v: 'f', obat: [OB.para, OB.vitc], pr: 0 })
  ];
  T[8] = [
    tp('Kontrol hipertensi dan jantung', 'Kontrol rutin. Kadang berdebar bila lelah. Tidak ada sesak atau nyeri dada.', 'TD terkontrol sebagian, bunyi jantung reguler.', 'Penyakit jantung hipertensi', 'I11.9', 'Lanjutkan bisoprolol dan amlodipine. Diet rendah garam.', { v: 'ht', tdk: ['Elektrokardiografi 12 Sadapan'], obat: [['Bisoprolol 5 mg', 30, '1x1 tablet pagi'], OB.amlo] }),
    tp('Nyeri dada saat aktivitas', 'Nyeri dada tertekan saat naik tangga, hilang dengan istirahat 5 menit.', 'Bunyi jantung reguler, tidak ada murmur, paru bersih.', 'Angina pektoris', 'I20.9', 'Antiplatelet, statin, nitrat bila nyeri. Rencana treadmill/angiografi.', { labs: ['Kolesterol Total!', 'Troponin I'], tdk: ['Elektrokardiografi 12 Sadapan'], rads: [['Ekokardiografi (Echo)', 'EF 52%, hipokinetik ringan dinding anterior, katup normal.', 'Fungsi sistolik LV masih baik, hipokinetik ringan anterior.', true]], obat: [['Asam Asetilsalisilat 80 mg', 30, '1x1 tablet'], ['Isosorbid Dinitrat 5 mg', 30, '3x1 tablet sublingual bila nyeri'], ['Atorvastatin 20 mg', 30, '1x1 tablet malam']], lansia: true }),
    tp('Sesak dan bengkak kaki', 'Sesak saat berbaring, perlu 2-3 bantal, kaki bengkak sejak 1 minggu.', 'JVP meningkat, ronki basah basal, edema tungkai +2.', 'Gagal jantung', 'I50.9', 'Diuretik, pembatasan cairan dan garam, kontrol 1 minggu.', { lansia: true, v: 'r', labs: ['Kreatinin', 'Natrium', 'Kalium'], rads: [['Rontgen Thorax PA', 'Kardiomegali (CTR 0,60), kongesti perihiler, efusi minimal bilateral.', 'Kardiomegali dengan edema paru ringan.', true]], obat: [['Furosemide 40 mg', 30, '1x1 tablet pagi'], ['Spironolakton 25 mg', 30, '1x1 tablet'], ['Bisoprolol 5 mg', 30, '1x1 tablet']] })
  ];
  T[9] = [
    tp('Sesak dan mengi kambuh', 'Sesak dan mengi berulang malam hari, batuk. Riwayat asma sejak kecil.', 'Wheezing ekspirasi difus, tidak ada retraksi.', 'Asma', 'J45.9', 'Edukasi pencetus, inhaler pelega dan pengontrol. Kontrol 1 bulan.', { v: 'r', tdk: ['Spirometri'], obat: [['Salbutamol Inhaler 100 mcg', 1, '2 puff bila sesak'], ['Salmeterol/Fluticasone Inhaler 250 mcg', 1, '2x1 puff']] }),
    tp('Batuk lama dan sesak', 'Batuk berdahak kronik, sesak bertambah saat beraktivitas. Perokok berat 30 tahun.', 'Barrel chest, ekspirasi memanjang, wheezing minimal.', 'PPOK', 'J44.9', 'Berhenti merokok, bronkodilator inhalasi, vaksin influenza.', { lansia: true, rads: [['Rontgen Thorax PA', 'Hiperinflasi paru, diafragma mendatar, corakan bronkovaskular meningkat.', 'Gambaran PPOK.', true]], tdk: ['Spirometri'], obat: [['Salmeterol/Fluticasone Inhaler 250 mcg', 1, '2x1 puff'], ['N-Acetylcysteine 200 mg', 30, '3x1 kapsul']] }),
    tp('Batuk lebih dari 3 minggu, keringat malam', 'Batuk berdahak 5 minggu, demam sore, keringat malam, berat badan turun.', 'Ronki basah di apeks kanan, ada penurunan berat badan 4 kg.', 'Tuberkulosis paru terkonfirmasi BTA', 'A15.0', 'Mulai OAT kategori 1 (obat program). Edukasi kepatuhan dan etika batuk.', { labs: ['BTA Sputum!', 'SGOT', 'SGPT'], rads: [['Rontgen Thorax PA', 'Infiltrat dan kavitas apeks paru kanan.', 'Gambaran TB paru aktif.', true]], obat: [['Vitamin B6 10 mg', 60, '1x1 tablet']] })
  ];
  T[10] = [
    tp('Mata merah dan belekan', 'Mata merah, gatal, belekan sejak 3 hari, kedua mata bergantian.', 'Injeksi konjungtiva, sekret mukopurulen, visus baik.', 'Konjungtivitis', 'H10.9', 'Jaga kebersihan, hindari mengucek mata.', { obat: [['Kloramfenikol Salep Mata 1%', 1, '3x1 oles'], ['Tetes Mata Air Mata Buatan 15 ml', 1, '4x1 tetes']] }),
    tp('Pandangan kabur jauh', 'Sulit melihat jauh, sering menyipitkan mata, sakit kepala saat membaca lama.', 'Visus OD 6/18 OS 6/24, koreksi 6/6 dengan lensa.', 'Miopia', 'H52.1', 'Kacamata koreksi. Kontrol 6 bulan.', { tdk: ['Refraksi / Koreksi Visus'] }),
    tp('Penglihatan berkabut', 'Penglihatan berkabut progresif kedua mata, silau.', 'Lensa keruh (katarak imatur), segmen posterior sulit dinilai.', 'Katarak senilis', 'H25.9', 'Rencana fakoemulsifikasi, persiapan pra-operasi.', { lansia: true, labs: ['Gula Darah Sewaktu', 'Hemoglobin'], tdk: ['Tonometri'] })
  ];
  T[11] = [
    tp('Nyeri menelan', 'Nyeri menelan dan demam 2 hari, suara serak.', 'Faring hiperemis, tonsil T2-T2 hiperemis detritus (-).', 'Faringitis akut', 'J02.9', 'Hindari makanan pedas dan gorengan, perbanyak minum hangat.', { v: 'f', obat: [['Amoxicillin 500 mg', 15, '3x1 kapsul'], OB.para] }),
    tp('Telinga nyeri dan berdenging', 'Nyeri telinga kanan setelah pilek, pendengaran berkurang.', 'Membran timpani hiperemis dan menonjol.', 'Otitis media akut', 'H66.9', 'Hindari air masuk telinga.', { v: 'f', obat: [['Amoxicillin 500 mg', 15, '3x1 kapsul'], ['Ofloxacin Tetes Telinga 5 ml', 1, '2x3 tetes']] }),
    tp('Hidung tersumbat dan bersin', 'Bersin pagi hari, hidung tersumbat dan gatal, riwayat alergi.', 'Konka edema pucat, sekret serous.', 'Rinitis alergi', 'J30.4', 'Hindari alergen, cuci hidung dengan NaCl.', { obat: [['Mometason Nasal Spray', 1, '1x2 semprot'], ['Loratadin 10 mg', 10, '1x1 tablet']] }),
    tp('Telinga terasa penuh', 'Telinga kiri terasa penuh dan pendengaran berkurang.', 'Liang telinga tertutup serumen padat.', 'Impaksi serumen', 'H61.2', 'Serumen diekstraksi.', { tdk: ['Ekstraksi Serumen'] })
  ];
  T[12] = [
    tp('Gatal dan ruam kemerahan', 'Gatal dan ruam kemerahan di lipat siku, kambuh-kambuhan.', 'Plak eritematosa dengan skuama halus.', 'Dermatitis', 'L30.9', 'Hindari pencetus, gunakan pelembab.', { obat: [['Hidrokortison Krim 2,5% 5 g', 1, '2x1 oles'], ['Cetirizine 10 mg', 10, '1x1 tablet malam']] }),
    tp('Gatal malam hari, ruam sela jari', 'Gatal hebat terutama malam, anggota keluarga serupa.', 'Papul dan kanalikuli di sela jari dan pergelangan tangan.', 'Skabies', 'B86', 'Seluruh anggota keluarga diobati, cuci pakaian dengan air panas.', { obat: [['Permethrin Krim 5% 30 g', 1, 'Oles seluruh badan, bilas setelah 8-10 jam'], ['Cetirizine 10 mg', 10, '1x1 tablet']] }),
    tp('Bercak melingkar gatal', 'Bercak merah melingkar bersisik dengan tepi aktif di badan.', 'Plak anular eritematosa dengan central healing.', 'Tinea korporis', 'B35.4', 'Jaga kulit kering, jangan berbagi handuk.', { obat: [['Miconazole Krim 10 g', 1, '2x1 oles'], ['Ketoconazole Krim 15 g', 1, '1x1 oles']] }),
    tp('Jerawat meradang', 'Jerawat meradang di pipi dan dahi sejak 3 bulan.', 'Komedo, papul dan pustul pada wajah.', 'Akne vulgaris', 'L70.0', 'Bersihkan wajah teratur, hindari memencet.', { fem: true, obat: [['Doxycycline 100 mg', 30, '1x1 kapsul sesudah makan'], ['Asam Fusidat Krim 15 g', 1, '2x1 oles']] })
  ];
  T[13] = [
    tp('Nyeri pinggang bawah', 'Nyeri pinggang bawah sejak 2 minggu, memberat saat duduk lama.', 'Nyeri tekan paravertebral L4-L5, Laseque (-).', 'Nyeri punggung bawah', 'M54.5', 'Koreksi postur, fisioterapi, hindari angkat berat.', { tdk: ['Fisioterapi (per Sesi)'], rads: [['Rontgen Lumbosakral', 'Spondilosis lumbal, penyempitan ringan L4-L5.', 'Spondilosis lumbalis ringan.', true]], obat: [['Meloxicam 15 mg', 10, '1x1 tablet sesudah makan'], ['Gabapentin 300 mg', 10, '1x1 kapsul malam']] }),
    tp('Nyeri lutut bila berjalan', 'Nyeri lutut kanan bila naik tangga, kaku pagi hari < 30 menit.', 'Krepitasi (+), nyeri tekan sendi medial, ROM terbatas ringan.', 'Osteoartritis lutut', 'M17.9', 'Turunkan berat badan, latihan penguatan otot.', { lansia: true, rads: [['Rontgen Genu', 'Penyempitan celah sendi medial dan osteofit.', 'Osteoartritis genu kanan grade 2-3.', true]], obat: [['Natrium Diklofenak 50 mg', 14, '2x1 tablet sesudah makan'], ['Kalsium Laktat 500 mg', 30, '1x1 tablet']] }),
    tp('Kaki terkilir saat olahraga', 'Pergelangan kaki terkilir, bengkak dan nyeri sejak kemarin.', 'Bengkak dan nyeri tekan lateral, anterior drawer (-).', 'Keseleo pergelangan kaki', 'S93.4', 'RICE, elastic bandage, kontrol 1 minggu.', { rads: [['Rontgen Ekstremitas', 'Tidak tampak fraktur, jaringan lunak lateral membengkak.', 'Tidak tampak fraktur.', false]], tdk: ['Pemasangan Bidai / Spalk'], obat: [['Meloxicam 15 mg', 7, '1x1 tablet']] })
  ];
  T[14] = [
    tp('Nyeri pinggang menjalar', 'Nyeri pinggang kolik menjalar ke selangkangan, kencing berdarah.', 'Nyeri ketok CVA kanan (+).', 'Batu ginjal', 'N20.0', 'Banyak minum, analgetik, evaluasi ESWL.', { labs: ['Urinalisis!', 'Kreatinin'], rads: [['USG Urologi (Ginjal dan Buli)', 'Batu 7 mm di pelvis renalis kanan dengan hidronefrosis ringan.', 'Nefrolitiasis kanan.', true]], obat: [['Ketorolac 30 mg/ml', 2, 'Injeksi bila nyeri'], ['Hyoscine Butylbromide 10 mg', 10, '3x1 tablet']] }),
    tp('Sering BAK malam, pancaran lemah', 'Pancaran kencing lemah, nokturia 3-4x, merasa tidak tuntas.', 'Colok dubur: prostat membesar, kenyal, nodul (-).', 'Pembesaran prostat jinak (BPH)', 'N40', 'Alpha-blocker, evaluasi PSA.', { lansia: true, labs: ['PSA Total'], rads: [['USG Urologi (Ginjal dan Buli)', 'Prostat membesar volume 42 cc, residu urin 40 cc.', 'BPH.', true]], obat: [['Tamsulosin 0,4 mg', 30, '1x1 kapsul malam']] }),
    tp('Nyeri saat BAK', 'Nyeri dan anyang-anyangan, sering BAK, demam ringan.', 'Nyeri tekan suprapubik, nyeri ketok CVA (-).', 'Infeksi saluran kemih', 'N39.0', 'Banyak minum air putih.', { fem: true, labs: ['Urinalisis!', 'Kultur Urin dan Resistensi'], obat: [['Ciprofloxacin 500 mg', 10, '2x1 tablet'], OB.para] })
  ];
  T[15] = [
    tp('Cemas dan sulit tidur', 'Cemas berlebihan, jantung berdebar, sulit tidur sejak ada masalah pekerjaan.', 'Tampak cemas, kooperatif, tidak ada waham/halusinasi.', 'Gangguan cemas', 'F41.9', 'Psikoedukasi, teknik relaksasi, terapi farmakologi jangka pendek.', { obat: [['Alprazolam 0,5 mg', 10, '1x1 tablet malam'], ['Sertraline 50 mg', 30, '1x1 tablet pagi']] }),
    tp('Murung dan kehilangan minat', 'Sedih berkepanjangan, tidak bersemangat, nafsu makan turun 1 bulan.', 'Afek depresif, tidak ada ide bunuh diri aktif.', 'Episode depresif', 'F32.9', 'Psikoterapi suportif dan antidepresan, kontrol 2 minggu.', { obat: [['Sertraline 50 mg', 30, '1x1 tablet pagi']] })
  ];
  T[16] = [
    tp('Gigi berlubang nyeri', 'Gigi geraham kiri bawah berlubang, nyeri bila makan manis.', 'Karies profunda gigi 36.', 'Karies gigi', 'K02.9', 'Tumpatan komposit, edukasi menyikat gigi.', { tdk: ['Tumpatan Gigi Komposit'], obat: [['Asam Mefenamat 500 mg', 10, '3x1 tablet sesudah makan']] }),
    tp('Gigi nyeri berdenyut malam hari', 'Nyeri spontan berdenyut malam hari pada gigi atas kanan.', 'Karies dalam gigi 16, perkusi (+).', 'Pulpitis', 'K04.0', 'Perawatan saluran akar, kontrol berikutnya.', { tdk: ['Perawatan Saluran Akar (per Kunjungan)'], rads: [['Rontgen Panoramik', 'Radiolusen dalam mencapai ruang pulpa gigi 16, periapikal melebar.', 'Pulpitis ireversibel dengan periodontitis apikalis.', true]], obat: [['Amoxicillin 500 mg', 15, '3x1 kapsul'], ['Asam Mefenamat 500 mg', 10, '3x1 tablet']] }),
    tp('Karang gigi dan gusi berdarah', 'Gusi mudah berdarah saat menyikat gigi.', 'Kalkulus supragingiva, gingiva hiperemis.', 'Gingivitis', 'K02.9', 'Scaling rutin 6 bulan sekali.', { tdk: ['Scaling Gigi'] })
  ];
  T[17] = [tp('Berat badan berlebih', 'Ingin menurunkan berat badan, pola makan tinggi gula dan gorengan.', 'BMI 31. TD normal.', 'Obesitas', 'E66.9', 'Rencana diet 1600 kkal, aktivitas fisik 150 menit/minggu.', { tdk: ['Konseling Gizi'], labs: ['Gula Darah Puasa', 'Kolesterol Total'] })];
  T[18] = [tp('Nyeri leher dan bahu', 'Nyeri leher kaku akibat bekerja di depan komputer.', 'Spasme otot trapezius, ROM terbatas.', 'Nyeri leher (servikalgia)', 'M54.2', 'Fisioterapi dan latihan postur.', { tdk: ['Fisioterapi (per Sesi)'], obat: [['Meloxicam 15 mg', 7, '1x1 tablet']] })];
  T[19] = [tp('Kontrol pasca kemoterapi', 'Kontrol setelah siklus kemoterapi ke-3. Mual ringan, nafsu makan menurun.', 'Keadaan umum baik, massa tidak teraba.', 'Neoplasma ganas payudara', 'C50.9', 'Lanjutkan siklus berikutnya bila hematologi baik.', { fem: true, labs: ['Hemoglobin', 'Leukosit', 'SGPT'], obat: [['Ondansetron 4 mg', 15, '3x1 tablet'], ['Asam Folat 400 mcg', 30, '1x1 tablet']] })];
  T[20] = [tp('Gigi tambalan lepas', 'Tambalan gigi depan lepas dan terasa ngilu.', 'Tumpatan lama lepas gigi 21, karies sekunder.', 'Pulpitis', 'K04.0', 'Penambalan ulang.', { tdk: ['Tumpatan Gigi Komposit'] })];
  T[21] = [tp('Nyeri saraf kronik', 'Nyeri menjalar dari pinggang ke tungkai kanan, tidak membaik dengan obat biasa.', 'Laseque (+) 45°, defisit sensorik ringan.', 'Nyeri punggung bawah dengan radikulopati', 'M54.4', 'Terapi neuropatik dan rencana blok saraf.', { obat: [['Pregabalin 75 mg', 30, '2x1 kapsul'], ['Meloxicam 15 mg', 10, '1x1 tablet']] })];
  T[22] = [tp('Kontrol lansia', 'Kontrol penyakit kronik, mudah lelah. Mandiri dalam aktivitas harian.', 'TD, gula darah terkontrol. Skor ADL baik.', 'Hipertensi esensial (primer)', 'I10', 'Lanjutkan obat, kontrol 1 bulan, edukasi jatuh.', { lansia: true, v: 'ht', labs: ['Gula Darah Puasa', 'Kreatinin'], obat: [OB.amlo, ['Vitamin D3 1000 IU', 30, '1x1 kapsul']] })];
  T[23] = [tp('Konseling dan tes HIV', 'Datang untuk konseling dan skrining sukarela setelah perilaku berisiko.', 'Pemeriksaan fisik normal.', 'Skrining dan konseling HIV', 'Z13.1', 'Hasil tes non-reaktif, konseling pencegahan, tes ulang 3 bulan.', { labs: ['Anti-HIV (Rapid)', 'HBsAg'] })];
  T[24] = [
    tp('Kontrol kehamilan', 'Hamil 32 minggu, kontrol rutin, tidak ada keluhan.', 'TD normal, TFU 31 cm, DJJ 140x/menit.', 'Pengawasan kehamilan normal', 'Z34.9', 'Lanjutkan suplemen. Persiapan persalinan.', { fem: true, labs: ['Hemoglobin', 'HBsAg'], rads: [['USG Kehamilan', 'Janin tunggal intrauterin, presentasi kepala, taksiran berat janin 1900 g.', 'Kehamilan normal 32 minggu.', false]], obat: [['Tablet Tambah Darah (Fe + Folat)', 30, '1x1 tablet'], ['Kalsium Laktat 500 mg', 30, '1x1 tablet']] }),
    tp('Konsultasi KB', 'Ingin ber-KB setelah anak kedua.', 'Pemeriksaan fisik normal, tidak sedang hamil.', 'Konseling kontrasepsi', 'Z30.9', 'Pemasangan implan.', { fem: true, labs: ['Tes Kehamilan (hCG)'], tdk: ['Pemasangan Implan KB'] }),
    tp('Imunisasi bayi', 'Imunisasi dasar sesuai jadwal.', 'Bayi aktif, BB naik baik.', 'Imunisasi', 'Z23', 'Imunisasi diberikan, observasi KIPI.', { ped: true, tdk: ['Injeksi'] })
  ];
  T[25] = [tp('Medical Check Up', 'Tidak ada keluhan, MCU karyawan tahunan.', 'Pemeriksaan fisik dalam batas normal.', 'Pemeriksaan kesehatan umum', 'Z00.0', 'Hasil MCU diserahkan. Pertahankan gaya hidup sehat.', { labs: ['Hemoglobin', 'Leukosit', 'Gula Darah Puasa', 'Kolesterol Total', 'SGPT', 'Kreatinin', 'Urinalisis'], rads: [['Rontgen Thorax PA', 'Cor dan pulmo dalam batas normal.', 'Foto thorax normal.', false]], tdk: ['Elektrokardiografi 12 Sadapan'] })];
  const tplOf = (poli) => T[poli] || T[1];

  /* ---------- UTILITAS GENERATOR ---------- */
  const pasienAll = DB.pasien.rows;
  const kidP = pasienAll.filter((p) => umur(p, d) < 15), adultP = pasienAll.filter((p) => umur(p, d) >= 15), femP = adultP.filter((p) => p.jenis_kelamin === 'P' && umur(p, d) < 46), oldP = adultP.filter((p) => umur(p, d) >= 58);
  const regulars = adultP.slice(0, 45);
  const pickPasien = (poli, t) => {
    if (t.ped || poli === 3) return pick(kidP); if (t.fem || poli === 5 || poli === 24) return pick(femP); if (t.lansia || poli === 22) return pick(oldP);
    if ([1, 11, 12, 16, 9, 10].includes(poli) && chance(0.15)) return pick(kidP); return chance(0.4) ? pick(regulars) : pick(adultP);
  };
  const antr = {}; DB.kunjungan.rows.forEach((k) => { const key = k.poli_id + '|' + k.tanggal; antr[key] = (antr[key] || 0) + 1; });
  const noAntri = (poli, ds) => { const key = poli + '|' + ds; antr[key] = (antr[key] || 0) + 1; return (DB.poli.rows.find((p) => p.id === poli) || { kode: 'X' }).kode + String(antr[key]).padStart(3, '0'); };
  const logs = [];
  const log = (peg, aksi, detail, waktu) => logs.push({ pegawai_id: peg.id, username: peg.username, aksi, detail, waktu });
  const occ = {}; DB.rawat_inap.rows.filter((r) => r.status === 'Dirawat').forEach((r) => { occ[r.kamar_id] = (occ[r.kamar_id] || 0) + 1; });
  const pickKamar = (prefs, pen) => {
    let list = prefs.map((x) => x).flatMap((x) => DB.kamar.rows.filter((k) => k.nama === x || k.kelas === x));
    if (pen !== 'BPJS') list = [...DB.kamar.rows.filter((k) => ['Kelas 1', 'VIP'].includes(k.kelas) && prefs.some((p) => ['Kelas 3', 'Kelas 2'].includes(p))), ...list];
    const ok = list.find((k) => (occ[k.id] || 0) < k.kapasitas); return ok || null;
  };
  const dkRanap = [['Hipertermia b.d. proses infeksi', 'Pantau suhu/TTV tiap 4 jam, kompres hangat, kolaborasi antipiretik', 'Suhu menurun, pasien lebih nyaman'], ['Risiko defisit volume cairan b.d. asupan kurang', 'Monitor intake-output, pastikan infus berjalan, anjurkan minum', 'Turgor membaik, urin adekuat'], ['Bersihan jalan napas tidak efektif b.d. sekret', 'Posisi semi-Fowler, latihan batuk efektif, nebulisasi sesuai instruksi', 'Sesak berkurang, SpO2 membaik'], ['Nyeri akut b.d. agen pencedera', 'Kaji skala nyeri, kolaborasi analgetik, ajarkan relaksasi', 'Skala nyeri turun menjadi 2-3'], ['Risiko penurunan curah jantung', 'Pantau EKG/TTV, batasi aktivitas, kolaborasi obat sesuai instruksi', 'Hemodinamik stabil']];

  const mkOrder = (kun, dok, pm, prio, klinis, status, tOrder, tHasil, abn, spec) => {
    const lab = pm.kategori === 'Lab', pet = lab ? pick(S.lab) : pick(S.rad); let nilai = null, flag = null, hasil = null, jadwal = null;
    if (status === 'Selesai') {
      if (lab) {
        const rj = pm.nilai_rujukan || '', mm = /^\s*([\d.]+)\s*-\s*([\d.]+)\s*$/.exec(rj);
        if (mm) { const lo = +mm[1], hi = +mm[2]; let v; if (abn === 2) v = hi * (2.5 + rnd() * 6); else if (!abn) v = lo + rnd() * (hi - lo); else if (lo > 0 && chance(0.4)) v = lo * (0.55 + rnd() * 0.4); else v = hi * (1.12 + rnd() * 0.7); nilai = String(+v.toFixed(hi < 1 ? 3 : hi < 10 ? 1 : 0)); }
        else if (pm.nama === 'Golongan Darah ABO-Rh') nilai = pick(['A Rh+', 'B Rh+', 'O Rh+', 'AB Rh+', 'O Rh+']);
        else if (pm.nama === 'Urinalisis') nilai = abn ? 'Leukosit +2, nitrit (+), eritrosit 5-8/LPB' : 'Normal';
        else nilai = abn ? (rj === 'Negatif' || rj === 'Non-reaktif' ? (rj === 'Negatif' ? 'Positif' : 'Reaktif') : 'Tidak normal') : (rj || 'Normal');
        flag = pm.nama === 'Golongan Darah ABO-Rh' ? 'Normal' : flagLab(nilai, rj);
      } else { hasil = `Temuan: ${spec[1]}\nKesan: ${spec[2]}`; flag = spec[3] ? 'Abnormal' : 'Normal'; jadwal = tOrder.slice(0, 10) + ' ' + hhmm(Math.min(1439, (+tOrder.slice(11, 13) * 60 + +tOrder.slice(14, 16)) + 40)) + ':00'; }
    } else if (status === 'Diproses' && !lab) jadwal = tOrder;
    return add('order_penunjang', { kunjungan_id: kun.id, pemeriksaan_id: pm.id, kategori: pm.kategori, dokter_id: dok, prioritas: prio, catatan_klinis: klinis, status, jadwal, nilai, flag, hasil, petugas_id: status === 'Menunggu' ? null : pet.id, waktu_order: tOrder, waktu_hasil: status === 'Selesai' ? tHasil : null });
  };

  const hitungTotal = (kun) => {
    const po = DB.poli.rows.find((p) => p.id === kun.poli_id); let tot = po ? +po.tarif : 0;
    DB.tindakan.rows.filter((x) => x.kunjungan_id === kun.id).forEach((x) => { const m = DB.tindakan_master.rows.find((t) => t.id === x.tindakan_id); tot += x.jumlah * +m.tarif; });
    DB.order_penunjang.rows.filter((o) => o.kunjungan_id === kun.id && o.status !== 'Batal').forEach((o) => { tot += +DB.pemeriksaan.rows.find((p) => p.id === o.pemeriksaan_id).tarif; });
    DB.resep.rows.filter((r) => r.kunjungan_id === kun.id && r.status === 'Diserahkan').forEach((r) => DB.resep_item.rows.filter((i) => i.resep_id === r.id).forEach((i) => { tot += i.jumlah * +DB.obat.rows.find((o) => o.id === i.obat_id).harga; }));
    const ri = DB.rawat_inap.rows.find((r) => r.kunjungan_id === kun.id); if (ri) { const km = DB.kamar.rows.find((k) => k.id === ri.kamar_id); tot += lama(ri.tanggal_masuk, ri.tanggal_keluar || n) * +km.tarif; }
    return tot;
  };
  const bayar = (kun, waktu) => {
    const total = hitungTotal(kun), ditg = ['BPJS', 'Asuransi'].includes(kun.penjamin) ? total : 0, harus = total - ditg, kas = pick(S.kasir);
    const metode = harus > 0 ? pick(['Tunai', 'Tunai', 'Debit', 'QRIS', 'Transfer']) : kun.penjamin;
    const dibayar = harus > 0 ? (metode === 'Tunai' ? Math.ceil(harus / 10000) * 10000 : harus) : 0;
    add('tagihan', { kunjungan_id: kun.id, total, ditanggung: ditg, dibayar, metode, kasir_id: kas.id, waktu_bayar: waktu });
    log(kas, 'Pembayaran', `${(DB.pasien.rows.find((p) => p.id === kun.pasien_id) || {}).nomor_rm} · Rp ${total.toLocaleString('id-ID')} · ${metode}`, waktu);
  };

  /* ---------- SATU KUNJUNGAN LENGKAP ---------- */
  const kunjunganBaru = (ds, m, jenis, poli, dok, ps, t, phase) => {
    const age = umur(ps, ds), daf = pick(S.daftar), tReg = ts(ds, m), tDok = ts(ds, m + ri(18, 40));
    const igd = jenis === 'IGD', kun = add('kunjungan', { pasien_id: ps.id, tanggal: ds, waktu_daftar: tReg, jenis, poli_id: poli, dokter_id: phase === 'tunggu' && !igd ? dok : dok, no_antrian: noAntri(poli, ds), penjamin: ps.penjamin, keluhan: t.k, triase: igd ? t.tri || 'Hijau' : null, status: { done: 'Selesai', periksa: 'Diperiksa', panggil: 'Dipanggil', tunggu: 'Menunggu' }[phase], disposisi: null, catatan_disposisi: null, dibuat_oleh: daf.id });
    log(daf, 'Kunjungan baru', `${ps.nomor_rm} — ${jenis} antrean ${kun.no_antrian}`, tReg);
    if (phase === 'tunggu' || phase === 'panggil') return kun;
    // SOAP
    add('rekam_medis', { kunjungan_id: kun.id, dokter_id: dok, subjektif: t.s, objektif: t.o, assessment: t.a, icd10_kode: t.icd, plan: t.plan, ...vit(t.v, age), created_at: tDok, updated_at: null });
    // order penunjang
    const done = phase === 'done';
    t.labs.forEach((ln) => { const abn = ln.endsWith('!!') ? 2 : ln.endsWith('!') ? 1 : (chance(0.12) ? 1 : 0), pm = get('pemeriksaan', ln.replace(/!+$/, '')); if (!pm) return; const st = done ? 'Selesai' : pick(['Menunggu', 'Diproses', 'Diproses']); const o = mkOrder(kun, dok, pm, igd ? 'Cito' : 'Biasa', 'Sesuai asesmen: ' + t.a, st, ts(ds, m + 25), ts(ds, m + ri(70, 130)), abn); if (st === 'Selesai') log(pick(S.lab), 'Lab validasi hasil', `${pm.nama} = ${o.nilai} (${o.flag})`, o.waktu_hasil); });
    t.rads.forEach((rd) => { const pm = get('pemeriksaan', rd[0]); if (!pm) return; const st = done ? 'Selesai' : pick(['Menunggu', 'Diproses']); mkOrder(kun, dok, pm, igd ? 'Cito' : 'Biasa', 'Evaluasi: ' + t.a, st, ts(ds, m + 28), ts(ds, m + ri(80, 160)), rd[3], rd); });
    // tindakan
    t.tdk.forEach((tn) => { const tm = get('tindakan_master', tn); if (tm) add('tindakan', { kunjungan_id: kun.id, tindakan_id: tm.id, jumlah: tn === 'Injeksi' ? ri(1, 2) : 1, petugas_id: pick(S.perawat).id, waktu: ts(ds, m + 35) }); });
    // resep
    if (t.obat.length) {
      const apt = pick(S.apt), rs = add('resep', { kunjungan_id: kun.id, dokter_id: dok, status: done ? 'Diserahkan' : 'Menunggu', catatan: igd ? 'Pasien IGD, siapkan segera' : null, apoteker_id: done ? apt.id : null, catatan_apoteker: null, waktu: ts(ds, m + 45), waktu_serah: done ? ts(ds, m + ri(70, 100)) : null });
      t.obat.forEach(([on, jml, atur]) => { const ob = get('obat', on); if (!ob) return; add('resep_item', { resep_id: rs.id, obat_id: ob.id, jumlah: jml, aturan_pakai: atur }); if (done) add('mutasi_stok', { jenis_item: 'obat', item_id: ob.id, tipe: 'Keluar', jumlah: jml, keterangan: `Resep #${rs.id} — ${ps.nama_lengkap}`, petugas_id: apt.id, waktu: rs.waktu_serah }); });
    }
    return kun;
  };

  /* ---------- JADWAL HARIAN & PEMBUATAN RIWAYAT ---------- */
  const jadwalOf = (hari) => DB.jadwal_dokter.rows.filter((j) => j.hari === hari && j.poli_id !== 7);
  const igdDocs = DB.pegawai.rows.filter((p) => p.role_id === 2 && p.poli_id === 7).map((p) => p.id);
  const ranapTasks = [];
  const phaseToday = (m) => { const a = curMin - m; return a > 100 ? 'done' : a > 35 ? 'periksa' : a > 12 ? 'panggil' : 'tunggu'; };
  for (let off = -29; off <= 0; off++) {
    const ds = addDays(d, off), hari = hariOf(ds), jr = jadwalOf(hari), plan = [];
    const nRJ = hari === 'Minggu' ? 0 : hari === 'Sabtu' ? ri(5, 9) : ri(9, 16), nIGD = ri(3, 7);
    for (let i = 0; i < nRJ && jr.length; i++) { const j = pick(jr); plan.push({ jenis: 'Rawat Jalan', poli: j.poli_id, dok: j.dokter_id, m: off === 0 ? ri(Math.max(0, curMin - 360), curMin) : ri(450, 840) }); }
    for (let i = 0; i < nIGD; i++) plan.push({ jenis: 'IGD', poli: 7, dok: pick(igdDocs), m: off === 0 ? ri(Math.max(0, curMin - 360), curMin) : ri(0, 1380) });
    plan.sort((a, b) => a.m - b.m);
    const seen = new Set();
    plan.forEach((pl) => {
      const t = pick(tplOf(pl.poli)), ps = pickPasien(pl.poli, t), key = ps.id + '|' + pl.poli; if (seen.has(key)) return; seen.add(key);
      const phase = off === 0 ? (pl.jenis === 'IGD' && phaseToday(pl.m) !== 'done' ? 'periksa' : phaseToday(pl.m)) : 'done';
      const kun = kunjunganBaru(ds, pl.m, pl.jenis, pl.poli, pl.dok, ps, t, phase);
      if (pl.jenis === 'IGD' && (phase === 'done' || phase === 'periksa')) {
        const ranap = chance(t.pr ?? 0.1) && t.km;
        if (ranap) ranapTasks.push({ kun, t, ds, m: pl.m, ps, dok: pl.dok });
        else if (phase === 'done') { const dsp = rnd() < 0.04 ? 'Rujuk' : 'Pulang'; update_(kun, { disposisi: dsp, catatan_disposisi: dsp === 'Rujuk' ? 'Dirujuk ke RS dengan fasilitas lebih lengkap sesuai kebutuhan klinis' : 'Boleh pulang, kontrol ke poli bila keluhan menetap' }); }
      }
      if (phase === 'done' && !ranapTasks.some((r) => r.kun === kun)) bayar(kun, ts(ds, pl.m + ri(100, 150)));
    });
  }
  function update_(row, patch) { Object.assign(row, patch); }

  // Rawat inap dari IGD
  ranapTasks.forEach((rt) => {
    const { kun, t, ds, m, ps } = rt, kam = pickKamar(t.km, ps.penjamin);
    if (!kam) { update_(kun, { disposisi: 'Pulang', status: kun.status === 'Selesai' ? 'Selesai' : kun.status, catatan_disposisi: 'Tempat tidur penuh, pasien pulang dengan kontrol ketat' }); if (kun.status === 'Selesai') bayar(kun, ts(ds, m + 140)); return; }
    const masuk = ts(ds, m + ri(80, 140)), los = ri(2, 6), keluarDs = addDays(ds, los), aktif = keluarDs >= d || (ds >= addDays(d, -1));
    const ri_ = add('rawat_inap', { kunjungan_id: kun.id, kamar_id: kam.id, dokter_id: rt.dok, tanggal_masuk: masuk, tanggal_keluar: aktif ? null : ts(keluarDs, 600 + ri(0, 240)), status: aktif ? 'Dirawat' : 'Pulang', diagnosa_masuk: `${t.a} (${t.icd})`, resume_pulang: aktif ? null : `Pasien dipulangkan dalam kondisi membaik. Diagnosis akhir: ${t.a} (${t.icd}). Obat pulang sesuai resep. Kontrol poli dalam 1 minggu atau segera bila keluhan memberat.` });
    if (aktif) occ[kam.id] = (occ[kam.id] || 0) + 1;
    update_(kun, { disposisi: 'Rawat Inap', catatan_disposisi: 'Rawat inap untuk observasi dan terapi lanjutan', status: aktif ? 'Diperiksa' : 'Selesai' });
    log(pick(S.perawat), 'Pasien masuk rawat inap', `${ps.nomor_rm} → ${kam.nama}`, masuk);
    // observasi harian
    const lastDs = aktif ? d : keluarDs;
    for (let day = ds, g = 0; day <= lastDs && g < 8; day = addDays(day, 1), g++) {
      [[6, 'pagi'], [14, 'siang'], [21, 'malam']].forEach(([jam, sh]) => {
        const w = ts(day, jam * 60 + ri(0, 30)); if (w < masuk || (day === d && w > n)) return;
        const dk = pick(dkRanap), v = vit(day === ds ? t.v : 'n', umur(ps, day)), prog = Math.max(0, lastDs === ds ? 0 : (new Date(day) - new Date(ds)) / 86400000 / Math.max(1, los));
        add('observasi', { kunjungan_id: kun.id, perawat_id: pick(S.perawat).id, waktu: w, td: `${v.td_sistolik}/${v.td_diastolik}`, nadi: v.nadi, suhu: prog > 0.5 ? +(36.5 + rnd() * 0.4).toFixed(1) : v.suhu, rr: v.rr, spo2: v.spo2, diagnosa_keperawatan: dk[0], intervensi: dk[1], evaluasi: `${dk[2]} (shift ${sh})` });
      });
    }
    if (!aktif) bayar(kun, ri_.tanggal_keluar);
  });

  /* ---------- APPOINTMENT ---------- */
  for (let off = -6; off <= 12; off++) {
    const ds = addDays(d, off), jr = jadwalOf(hariOf(ds)); if (!jr.length) continue;
    const jml = off < 0 ? ri(1, 2) : ri(3, 6);
    for (let i = 0; i < jml; i++) {
      const j = pick(jr), ps = pickPasien(j.poli_id, tplOf(j.poli_id)[0]), jam = hhmm(ri(8, 15) * 60 + pick([0, 15, 30, 45])), st = off < 0 ? pick(['Check-in', 'Check-in', 'Check-in', 'Batal']) : 'Terjadwal';
      add('appointment', { pasien_id: ps.id, dokter_id: j.dokter_id, poli_id: j.poli_id, tanggal: ds, jam, status: st, catatan: pick(['Kontrol rutin', 'Booking via telepon', 'Booking via aplikasi', 'Hasil laboratorium kontrol', 'Konsultasi lanjutan', 'Pemeriksaan kesehatan']), kunjungan_id: null, created_at: ts(addDays(ds, -ri(1, 6)), 600) });
    }
  }

  /* ---------- STOK MASUK & PEMAKAIAN BMHP ---------- */
  const supplier = ['PBF Kimia Farma', 'PT Enseval Putera Megatrading', 'PT Distribusi Mitra Sehat', 'PBF Penta Valent', 'PT Anugrah Pharmindo Lestari', 'PT Mensa Bina Sukses'];
  for (let i = 0; i < 48; i++) {
    const ds = addDays(d, -ri(0, 29)), gd = pick(S.gudang), obat = chance(0.65), item = obat ? pick(DB.obat.rows) : pick(DB.barang.rows);
    add('mutasi_stok', { jenis_item: obat ? 'obat' : 'barang', item_id: item.id, tipe: 'Masuk', jumlah: ri(2, 20) * (obat ? 25 : 5), keterangan: `Penerimaan dari ${pick(supplier)} (SP-${2026}${String(1000 + i * 7)})`, petugas_id: gd.id, waktu: ts(ds, 600 + ri(0, 240)) });
  }
  const unit = ['IGD', 'Rawat Inap Melati', 'ICU', 'Kamar Bersalin', 'Poli Bedah', 'Laboratorium', 'Radiologi', 'Rawat Jalan'];
  for (let i = 0; i < 40; i++) { const ds = addDays(d, -ri(0, 29)), gd = pick(S.gudang), it = pick(DB.barang.rows); add('mutasi_stok', { jenis_item: 'barang', item_id: it.id, tipe: 'Keluar', jumlah: ri(1, 8) * (it.satuan === 'pcs' ? 10 : 1), keterangan: 'Permintaan unit ' + pick(unit), petugas_id: gd.id, waktu: ts(ds, 540 + ri(0, 480)) }); }

  /* ---------- LOG AKTIVITAS ---------- */
  const semua = DB.pegawai.rows.filter((p) => p.status === 'Aktif');
  for (let i = 0; i < 90; i++) { const p = pick(semua); log(p, 'Login', `Berhasil masuk sebagai Role #${p.role_id}`, ts(addDays(d, -ri(0, 29)), ri(360, 1200))); }
  logs.sort((a, b) => (a.waktu < b.waktu ? -1 : a.waktu > b.waktu ? 1 : 0)).forEach((l) => add('log_aktivitas', l));
  DB.mutasi_stok.rows.sort((a, b) => (a.waktu < b.waktu ? -1 : 1)).forEach((r, i) => { r.id = i + 1; }); DB.mutasi_stok.next = DB.mutasi_stok.rows.length + 1;
  return miss;
}

function seedData() {
  const d = today(), n = now();
  const H = {"demo": "pbkdf2_sha256$100000$5df1ab513bb7239365e189cf7075b721$0e67e0d860e1a36e669525ad817f19d8be5d125bf4d3fa6506f5b7fa9f017b5c", "admin": "pbkdf2_sha256$100000$22272b641d7d8220bf21b3a0ec69547d$036f4a30947c4b5ef6b6c7eb18c95b39808322658670ba9d5c360e6d9d70909c", "pendaftaran": "pbkdf2_sha256$100000$7d29a7e19a84ab55775223db2b4edb6b$a1945bf1ed70c860eb6a06930c8e873678210cf3b9f27a207999e5a3c091b08c", "dr.rudi": "pbkdf2_sha256$100000$2ad338a771c28b9bc437dd98fbdeee8c$6e9a9135f05474f73cea853a1431ef237cf9a965e7d6395af4f37f4b25d6346d", "dr.ahmad": "pbkdf2_sha256$100000$a09249d2e02f418635a4f5da24849b01$06c0c5bca3a9568a55805a37bc8ef6c61de61e59b48e28e06a32ea233fe2f765", "dr.sinta": "pbkdf2_sha256$100000$f87d55343d8d982c5d50cd0130acaa4c$7e74781133d34ae23e49d6d04766a0b742326c5bd5025938e248e08364d99085", "dr.yusuf": "pbkdf2_sha256$100000$52c3f83a0f554f7a34d43218e20a89a1$38353281acb06b1d1d42e3916196b0f658901be88b3f4396e4db7f29e6e77821", "perawat": "pbkdf2_sha256$100000$4935e91e22f76d89c4e35e615f746806$5dbfe2e3b785813e51c2dc1419cdfb346db55d76db1958ba510194c683939259", "rekammedis": "pbkdf2_sha256$100000$e91501cc9613099fbc94bfd93bd2bbf5$37e00b968463829cee48a34e4eb0c9cac3f2313a7c39eb12f90d2c91370efdba", "analis.lab": "pbkdf2_sha256$100000$bce22defaf3f0c8df738d4b3db6780dc$b98a45d3f0ab42945c6dfa7313a07db024519aefc7517c1e9ac1037d638b8aca", "radiografer": "pbkdf2_sha256$100000$c58995c0b6b7b2731c9840e7d2c6354c$872cc227586846f6b17156a13b7d1655be130866305dfd6621501d8a9461e909", "apoteker": "pbkdf2_sha256$100000$ef83a8e483a3e41c55c7085ad0bfae6b$bad335fa4ce2f1b06197bcb0351086ce9d5fd887e1ec1164f6277a0b61f908eb", "gudang": "pbkdf2_sha256$100000$6ca6aad64649cc327bb0165ce8591beb$16507da1911cde183dfed5ff8923090214fae013654800ba446154be6192c927", "kasir": "pbkdf2_sha256$100000$72d19d78c7d76ee49754eab41b11438d$e65bc36cc1e984280dd3ee0506bb387ac409500659e160ffa220b1d3757de59d", "direktur": "pbkdf2_sha256$100000$b4e01e71188082c495840e2bf82b76a2$f1ca8e5ec08e24533ddff352b073f1d964937344f05ad4f2e8d956f7568ac690", "fajar": "pbkdf2_sha256$100000$7a6cac78b7c0b09064ea9f751f28a0d2$835e1a2dab71226b7440c5c1d9018b73c2a4fd6ae024c235146076780cccacc1"};
  const tb = (rows) => ({ rows: rows.map((r) => ({ ...r })), next: rows.reduce((m, r) => Math.max(m, r.id), 0) + 1 });
  const cols = (keys, list) => list.map((v) => Object.fromEntries(keys.map((k, i) => [k, v[i]])));
  const DB = {};
  DB.poli = tb(cols(['id','kode','nama','tarif','is_igd'], [
    [1,'U','Poli Umum',50000,0],[2,'PD','Poli Penyakit Dalam',120000,0],[3,'A','Poli Anak',100000,0],[4,'B','Poli Bedah Umum',120000,0],[5,'OBG','Poli Obstetri dan Ginekologi',120000,0],[6,'SN','Poli Saraf',120000,0],[7,'IGD','Instalasi Gawat Darurat',150000,1],
    [8,'JP','Poli Jantung dan Pembuluh Darah',150000,0],[9,'PAR','Poli Paru',120000,0],[10,'MATA','Poli Mata',110000,0],[11,'THT','Poli THT-KL',110000,0],[12,'KUL','Poli Kulit dan Kelamin',110000,0],[13,'ORT','Poli Orthopedi dan Traumatologi',130000,0],[14,'URO','Poli Urologi',130000,0],[15,'JIWA','Poli Kesehatan Jiwa',120000,0],[16,'GIGI','Poli Gigi dan Mulut',90000,0],[17,'GIZI','Klinik Gizi',85000,0],[18,'REHAB','Rehabilitasi Medik',100000,0],[19,'ONK','Poli Onkologi',150000,0],[20,'KONS','Poli Konservasi Gigi',110000,0],[21,'ANES','Klinik Nyeri/Anestesi',150000,0],[22,'GER','Poli Geriatri',120000,0],[23,'VCT','Klinik VCT dan Infeksi',100000,0],[24,'KIA','Klinik Kesehatan Ibu dan Anak',100000,0],[25,'MCU','Medical Check Up',200000,0]
  ]));
  DB.modul = tb(cols(['id','kode','nama','grup'], [[1,'pegawai','Autentikasi & Manajemen Pegawai','admin'],[2,'master','Master Data & Konfigurasi','admin'],[3,'admisi','Registrasi / Pendaftaran Pasien','front'],[4,'jadwal','Jadwal Dokter & Appointment','front'],[5,'igd','Instalasi Gawat Darurat (IGD)','klinis'],[6,'rawatjalan','Rawat Jalan (Poliklinik)','klinis'],[7,'rawatinap','Rawat Inap','klinis'],[8,'emr','Rekam Medis / Medical Record','klinis'],[9,'cpoe','CPOE / Order Management','klinis'],[10,'keperawatan','Keperawatan (Nursing)','klinis'],[11,'lab','Laboratorium (LIS)','penunjang'],[12,'radiologi','Radiologi','penunjang'],[13,'farmasi','Farmasi / Pharmacy','penunjang'],[14,'gudang','Inventory & Gudang','logistik'],[15,'billing','Billing & Kasir','logistik'],[16,'laporan','Laporan & Dashboard','manajemen']]));
  DB.role = tb(cols(['id','kode','nama','deskripsi','modul_utama_id','boleh_daftar'], [
    [1,'admin','Admin Sistem','Mengelola akun pegawai, role, hak akses, dan master data',1,0],
    [2,'dokter','Dokter','Memeriksa pasien, mengisi SOAP/rekam medis, order penunjang & e-resep',6,1],
    [3,'perawat','Perawat','Observasi tanda vital & asuhan keperawatan',10,1],
    [4,'pendaftaran','Petugas Pendaftaran','Mendaftarkan pasien, kunjungan, antrean, appointment',3,1],
    [5,'rekammedis','Petugas Rekam Medis','Mengelola & memverifikasi rekam medis pasien',8,1],
    [6,'laboran','Analis Laboratorium','Memproses sampel & memvalidasi hasil laboratorium',11,1],
    [7,'radiografer','Radiografer','Melaksanakan pemeriksaan radiologi & mengirim hasil',12,1],
    [8,'apoteker','Apoteker','Verifikasi e-resep, penyerahan obat, stok farmasi',13,1],
    [9,'gudang','Petugas Gudang','Penerimaan & pengeluaran stok obat/barang',14,1],
    [10,'kasir','Kasir / Billing','Memproses tagihan & pembayaran pasien',15,1],
    [11,'manajemen','Manajemen / Direktur','Memantau laporan & kinerja rumah sakit',16,1]]));
  const ha = [[1,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]],[2,[5,6,7,8,9]],[3,[5,7,8,10]],[4,[3,4]],[5,[3,8,16]],[6,[11]],[7,[12]],[8,[13,14]],[9,[14]],[10,[15]],[11,[15,16]]];
  let hid = 1; DB.hak_akses = tb(ha.flatMap(([r, ms]) => ms.map((m) => ({ id: hid++, role_id: r, modul_id: m }))));
  const pg = (id, nip, nama, u, role, poli, jk, st) => ({ id, nip, nama, username: u, password_hash: H[u], role_id: role, poli_id: poli, jenis_kelamin: jk, email: u.replace(/^dr\./, '') + '@octamedika.id', no_hp: '0812000000' + String(id).padStart(2, '0'), status: st || 'Aktif', gagal_login: 0, terkunci_sampai: null, login_terakhir: null, created_at: n });
  DB.pegawai = tb([
    pg(1,'198503122010011001','Budi Hartono, S.Kom','admin',1,null,'L'), pg(2,'199002152015032002','Sari Wulandari','pendaftaran',4,null,'P'),
    pg(3,'198707202014021003','dr. Rudi Santoso','dr.rudi',2,1,'L'), pg(4,'197811052008011004','dr. Ahmad Fauzi, Sp.PD','dr.ahmad',2,2,'L'),
    pg(5,'198304182010012005','dr. Sinta Dewi, Sp.A','dr.sinta',2,3,'P'), pg(6,'198012302009011006','dr. Yusuf Hakim, Sp.EM','dr.yusuf',2,7,'L'),
    pg(7,'199206112016032007','Ns. Dewi Lestari, S.Kep','perawat',3,null,'P'), pg(8,'199108082015032008','Lina Marlina, A.Md.RMIK','rekammedis',5,null,'P'),
    pg(9,'199304212017032009','Rina Kusuma, A.Md.A.K.','analis.lab',6,null,'P'), pg(10,'198909132014021010','Hendra Saputra, A.Md.Rad','radiografer',7,null,'L'),
    pg(11,'198811232013032011','apt. Ratna Sari, S.Farm','apoteker',8,null,'P'), pg(12,'198605142012011012','Agus Setiawan','gudang',9,null,'L'),
    pg(13,'199401092018032013','Maya Anggraini','kasir',10,null,'P'), pg(14,'197505272003011014','dr. Hadi Wijaya, MARS','direktur',11,null,'L'),
    pg(15,'199512012020121015','Ns. Fajar Nugroho, S.Kep','fajar',3,null,'L','Menunggu')]);
  // Staf klinis tambahan untuk simulasi RSU skala besar. Identitas, STR, dan SIP sepenuhnya fiktif.
  const specialistStaff = [
    ['dr. Maya Prameswari, Sp.JP','dr.jantung',8,'P','Kardiologi'],['dr. Bima Arya, Sp.P','dr.paru',9,'L','Pulmonologi'],['dr. Nadia Putri, Sp.M','dr.mata',10,'P','Oftalmologi'],['dr. Kevin Santoso, Sp.THT-KL','dr.tht',11,'L','THT-KL'],['dr. Citra Lestari, Sp.D.V.E.','dr.kulit',12,'P','Dermatologi dan Venereologi'],['dr. Raka Wibowo, Sp.OT','dr.ortopedi',13,'L','Orthopedi dan Traumatologi'],['dr. Farhan Malik, Sp.U','dr.urologi',14,'L','Urologi'],['dr. Intan Maharani, Sp.KJ','dr.jiwa',15,'P','Psikiatri'],['drg. Vina Amelia','dr.gigi',16,'P','Kedokteran Gigi'],['dr. Niken Larasati, Sp.GK','dr.gizi',17,'P','Gizi Klinik'],['dr. Dimas Pratama, Sp.KFR','dr.rehab',18,'L','Kedokteran Fisik dan Rehabilitasi'],['dr. Samuel Wijaya, Sp.B(K)Onk','dr.onkologi',19,'L','Bedah Onkologi'],['drg. Rendi Kurniawan, Sp.KG','dr.konservasi',20,'L','Konservasi Gigi'],['dr. Laila Rahman, Sp.An-TI','dr.anestesi',21,'P','Anestesiologi dan Terapi Intensif'],['dr. Ratih Kusuma, Sp.PD-KGer','dr.geriatri',22,'P','Penyakit Dalam Konsultan Geriatri'],['dr. Yoga Firmansyah, Sp.PD-KPTI','dr.infeksi',23,'L','Penyakit Dalam Konsultan Penyakit Tropik Infeksi'],['dr. Putri Andini, Sp.OG','dr.kia',24,'P','Obstetri dan Ginekologi'],['dr. Rudi Hartawan, Sp.B','dr.bedah',4,'L','Bedah Umum'],['dr. Siska Amelia, Sp.N','dr.saraf',6,'P','Neurologi'],['dr. Aditya Nugraha, Sp.PD','dr.internis',2,'L','Penyakit Dalam']
  ];
  specialistStaff.forEach((x,i)=>{ const id=16+i; const staff=pg(id,'1980'+String(i+1).padStart(2,'0')+'010120'+String(id).padStart(4,'0'),x[0],x[1],2,x[2],x[3]); staff.password_hash=H['dr.rudi']; staff.spesialisasi=x[4]; staff.str='STR-DUMMY-'+String(id).padStart(4,'0'); staff.sip='SIP-DUMMY-'+String(id).padStart(4,'0'); staff.unit_kerja='Pelayanan Medis'; staff.status_kepegawaian='Tetap'; DB.pegawai.rows.push(staff); });
  DB.pegawai.rows.push(pg(Math.max(...DB.pegawai.rows.map(x=>x.id))+1,'199001012020011099','Akun Demo (Akses Penuh)','demo',1,null,'L'));
  DB.pegawai.next = Math.max(...DB.pegawai.rows.map(x=>x.id))+1;
  DB.kamar = tb(cols(['id','nama','kelas','kapasitas','tarif'], [[1,'Melati 1','Kelas 3',4,250000],[2,'Melati 2','Kelas 3',4,250000],[3,'Mawar 1','Kelas 2',2,400000],[4,'Anggrek VIP','VIP',1,900000],[5,'ICU','ICU',6,1500000],[6,'Flamboyan 1','Kelas 1',2,650000],[7,'Flamboyan 2','Kelas 1',2,650000],[8,'Dahlia Anak','Kelas 2',4,450000],[9,'Perinatologi','Khusus',6,750000],[10,'NICU','NICU',4,1800000],[11,'PICU','PICU',4,1800000],[12,'HCU','HCU',4,1250000],[13,'ICCU','ICCU',4,1600000],[14,'Isolasi Tekanan Negatif','Isolasi',4,1100000],[15,'VK / Observasi Bersalin','Khusus',4,700000],[16,'Rawat Gabung','Kelas 2',4,450000]]));
  DB.icd10 = tb([['A01.0','Demam tifoid'],['A09','Diare dan gastroenteritis'],['A91','Demam berdarah dengue (DHF)'],['B34.9','Infeksi virus, tidak spesifik'],['E11','Diabetes melitus tipe 2'],['E78.5','Hiperlipidemia'],['G43.9','Migrain'],['G47.0','Insomnia'],['I10','Hipertensi esensial (primer)'],['I21.9','Infark miokard akut'],['I63.9','Stroke iskemik'],['J00','Nasofaringitis akut (common cold)'],['J06.9','Infeksi saluran napas atas akut'],['J18.9','Pneumonia, tidak spesifik'],['J45.9','Asma'],['K29.7','Gastritis'],['K35.8','Apendisitis akut'],['M54.5','Nyeri punggung bawah'],['N39.0','Infeksi saluran kemih'],['O80','Persalinan normal'],['R50.9','Demam tanpa penyebab jelas'],['R51','Nyeri kepala'],['S06.0','Gegar otak (komosio)'],['S52.5','Fraktur radius distal'],['Z00.0','Pemeriksaan kesehatan umum']].map(([kode, nama], i) => ({ id: i + 1, kode, nama })));
  DB.obat = tb(cols(['id','kode','nama','satuan','harga','stok','stok_min'], [[1,'OB001','Paracetamol 500 mg','tablet',500,500,50],[2,'OB002','Amoxicillin 500 mg','kapsul',1200,300,50],[3,'OB003','Amlodipine 10 mg','tablet',800,200,30],[4,'OB004','Metformin 500 mg','tablet',600,250,30],[5,'OB005','Omeprazole 20 mg','kapsul',1500,150,30],[6,'OB006','Cetirizine 10 mg','tablet',700,100,20],[7,'OB007','Ambroxol 30 mg','tablet',500,120,20],[8,'OB008','Ibuprofen 400 mg','tablet',900,8,20],[9,'OB009','Captopril 25 mg','tablet',400,90,20],[10,'OB010','Ondansetron 4 mg','tablet',2500,60,10],[11,'OB011','Ringer Laktat 500 ml','botol',18000,40,10],[12,'OB012','NaCl 0,9% 500 ml','botol',16000,35,10],[13,'OB013','Salbutamol 2 mg','tablet',300,5,20],[14,'OB014','Oralit','sachet',1000,80,20],[15,'OB015','Ceftriaxone 1 g','vial',25000,30,10],[16,'OB016','Paracetamol sirup 120 mg/5 ml','botol',12000,25,5]]));
  DB.barang = tb(cols(['id','kode','nama','kategori','satuan','stok','stok_min'], [[1,'BR001','Sarung Tangan Nitril','APD','box',40,10],[2,'BR002','Masker Bedah','APD','box',25,10],[3,'BR003','Spuit 3 cc','Alkes Habis Pakai','pcs',500,100],[4,'BR004','Kasa Steril','Alkes Habis Pakai','pak',60,20],[5,'BR005','Alkohol Swab','Alkes Habis Pakai','box',6,10],[6,'BR006','Infus Set','Alkes Habis Pakai','pcs',120,30],[7,'BR007','Kertas HVS A4','ATK','rim',15,5]]));
  DB.pemeriksaan = tb(cols(['id','kategori','nama','satuan','nilai_rujukan','tarif'], [[1,'Lab','Hemoglobin','g/dL','12-16',35000],[2,'Lab','Leukosit','10^3/uL','4-11',35000],[3,'Lab','Trombosit','10^3/uL','150-400',35000],[4,'Lab','Gula Darah Sewaktu','mg/dL','70-140',30000],[5,'Lab','Kolesterol Total','mg/dL','0-200',45000],[6,'Lab','Asam Urat','mg/dL','2.4-7',35000],[7,'Lab','SGOT','U/L','0-40',40000],[8,'Lab','SGPT','U/L','0-41',40000],[9,'Lab','Kreatinin','mg/dL','0.6-1.2',40000],[10,'Lab','NS1 Antigen Dengue',null,'Negatif',150000],[11,'Lab','Urinalisis',null,'Normal',50000],[12,'Radiologi','Rontgen Thorax PA',null,null,150000],[13,'Radiologi','Rontgen Ekstremitas',null,null,125000],[14,'Radiologi','USG Abdomen',null,null,250000],[15,'Radiologi','USG Kehamilan',null,null,200000],[16,'Radiologi','CT Scan Kepala',null,null,900000],[17,'Radiologi','MRI Lumbal',null,null,1800000]]));
  DB.tindakan_master = tb(cols(['id','nama','tarif'], [[1,'Pemasangan Infus',75000],[2,'Nebulizer',60000],[3,'Perawatan Luka',50000],[4,'Injeksi',35000],[5,'Pemasangan Kateter Urin',100000],[6,'Elektrokardiografi (EKG)',80000],[7,'Hecting / Jahit Luka',120000]]));
  DB.pasien = tb(cols(['id','nomor_rm','nik','nama_lengkap','tanggal_lahir','jenis_kelamin','alamat','no_hp','golongan_darah','alergi','penjamin','no_penjamin','created_at'], [
    [1,'RM-2026-000001','3578010101800001','Anton Hermawan','1980-01-01','L','Jl. Ketintang No. 12, Surabaya','081234567801','O',null,'BPJS','0001234567890','2026-09-14 08:10:00'],
    [2,'RM-2026-000002','3578011505190002','Rafa Aditya Pratama','2019-05-15','L','Jl. Gayungan III/8, Surabaya','081234567802','A','Amoxicillin','Umum',null,n],
    [3,'RM-2026-000003','3578012003750003','Herman Saputra','1975-03-20','L','Jl. Jemursari 45, Surabaya','081234567803','B',null,'Umum',null,n],
    [4,'RM-2026-000004','3578014107920004','Dewi Anggraini','1992-07-01','P','Jl. Raya Darmo 101, Surabaya','081234567804','AB','Seafood','Asuransi','PRU-88120045',n],
    [5,'RM-2026-000005','3578011011880005','Budi Santoso','1988-11-10','L','Jl. Wonokromo 7, Surabaya','081234567805','O',null,'Umum',null,n]]));
  const dummyPatients = [
    ['Nadia Safitri','1990-02-12','P','A',null,'BPJS'],['Hendra Kurniawan','1975-06-23','L','B','Debu','Umum'],['Alif Ramadhan','2018-08-05','L','O',null,'BPJS'],['Mutiara Zahra','1995-11-17','P','AB','Seafood','Asuransi'],['Sutrisno Wijaya','1960-01-29','L','A',null,'BPJS'],['Dian Puspita','1988-03-14','P','O',null,'Umum'],['Fikri Maulana','2021-07-22','L','B',null,'BPJS'],['Rina Oktaviani','1982-09-09','P','A','Lateks','Asuransi'],['Agus Setiawan','1970-05-16','L','O',null,'BPJS'],['Clara Angelica','1999-12-03','P','AB',null,'Umum'],['Rizky Firmansyah','1984-04-27','L','A','Ibuprofen','BPJS'],['Salsa Nabila','1993-01-11','P','B',null,'Asuransi'],['Bambang Irawan','1959-06-02','L','O',null,'BPJS'],['Naufal Akbar','2006-07-19','L','A',null,'Umum'],['Lestari Handayani','1977-09-08','P','AB','Udang','BPJS']
  ];
  dummyPatients.forEach((x,i)=>{const id=6+i; DB.pasien.rows.push({id,nomor_rm:'RM-2026-'+String(id).padStart(6,'0'),nik:'357801'+String(1000000000+id),nama_lengkap:x[0],tanggal_lahir:x[1],jenis_kelamin:x[2],alamat:'Alamat fiktif, Jakarta',no_hp:'0812000000'+String(id).padStart(2,'0'),golongan_darah:x[3],alergi:x[4],penjamin:x[5],no_penjamin:x[5]==='BPJS'?'BPJS-DUMMY-'+String(id).padStart(8,'0'):null,created_at:n});});
  DB.pasien.next=DB.pasien.rows.length+1;
  const jd = []; let ji = 1;
  for (const h of ['Senin','Selasa','Rabu','Kamis']) jd.push([ji++,3,1,h,'08:00','14:00',30]);
  jd.push([ji++,3,1,'Jumat','08:00','11:00',20], [ji++,3,1,'Sabtu','08:00','12:00',20], [ji++,4,2,'Senin','09:00','13:00',20], [ji++,4,2,'Rabu','09:00','13:00',20], [ji++,4,2,'Jumat','13:00','16:00',15], [ji++,5,3,'Selasa','10:00','14:00',20], [ji++,5,3,'Kamis','10:00','14:00',20], [ji++,5,3,'Sabtu','09:00','12:00',15]);
  specialistStaff.forEach((x,i)=>{const doctorId=16+i,day=['Senin','Selasa','Rabu','Kamis','Jumat'][i%5]; jd.push([ji++,doctorId,x[2],day,i%2?'13:00':'08:00',i%2?'17:00':'12:00',15+(i%3)*5]);});
  jd.push([ji++,3,1,'Senin','08:00','14:00',25],[ji++,3,1,'Rabu','08:00','14:00',25],[ji++,6,7,'Setiap Hari','00:00','23:59',0]);
  DB.jadwal_dokter = tb(cols(['id','dokter_id','poli_id','hari','jam_mulai','jam_selesai','kuota'], jd));
  const K = ['id','pasien_id','tanggal','waktu_daftar','jenis','poli_id','dokter_id','no_antrian','penjamin','keluhan','triase','status','disposisi','catatan_disposisi','dibuat_oleh'];
  DB.kunjungan = tb(cols(K, [
    [1,1,'2026-09-14','2026-09-14 08:15:00','Rawat Jalan',2,4,'D001','BPJS','Kepala terasa berat, tengkuk kaku',null,'Selesai','Pulang',null,2],
    [2,1,d,n,'Rawat Jalan',2,4,'D001','BPJS','Kontrol tekanan darah, pusing sejak 2 hari',null,'Menunggu',null,null,2],
    [3,2,d,n,'Rawat Jalan',3,5,'A001','Umum','Demam 3 hari, batuk pilek',null,'Menunggu',null,null,2],
    [4,3,d,n,'IGD',7,6,'E001','Umum','Demam tinggi 4 hari, mual, bintik merah di lengan','Kuning','Diperiksa','Rawat Inap',null,2],
    [5,4,d,n,'Rawat Jalan',1,3,'U001','Asuransi','Nyeri ulu hati, mual',null,'Menunggu',null,null,2]]));
  DB.appointment = tb([{ id: 1, pasien_id: 5, dokter_id: 3, poli_id: 1, tanggal: d, jam: '10:00', status: 'Terjadwal', catatan: 'Booking via telepon — pemeriksaan kesehatan umum', kunjungan_id: null, created_at: n }]);
  const RM = ['id','kunjungan_id','dokter_id','subjektif','objektif','assessment','icd10_kode','plan','td_sistolik','td_diastolik','nadi','rr','suhu','spo2','berat_badan','tinggi_badan','created_at','updated_at'];
  DB.rekam_medis = tb(cols(RM, [
    [1,1,4,'Kepala terasa berat dan tengkuk kaku sejak 1 minggu. Riwayat hipertensi pada ayah.','Kesadaran compos mentis. Jantung & paru dalam batas normal.','Hipertensi esensial stage 1','I10','Amlodipine 10 mg 1x1 selama 30 hari. Diet rendah garam. Kontrol 1 bulan.',152,96,84,18,36.6,98,78.5,168,'2026-09-14 09:05:00',null],
    [2,4,6,'Demam tinggi 4 hari, mual, nyeri otot, muncul bintik merah di lengan.','Tampak lemah. Petekie di lengan bawah. Uji tourniquet (+). Akral hangat.','Suspek demam berdarah dengue','A91','Cek darah lengkap & NS1 cito. Infus RL 20 tpm. Rawat inap untuk observasi trombosit.',110,70,102,22,38.9,97,70,170,n,null]]));
  const OP = ['id','kunjungan_id','pemeriksaan_id','kategori','dokter_id','prioritas','catatan_klinis','status','jadwal','nilai','flag','hasil','petugas_id','waktu_order','waktu_hasil'];
  DB.order_penunjang = tb(cols(OP, [
    [1,1,4,'Lab',4,'Biasa','Skrining DM pada pasien hipertensi','Selesai',null,'112','Normal',null,9,'2026-09-14 09:10:00','2026-09-14 10:00:00'],
    [2,4,3,'Lab',6,'Cito','Suspek DHF, pantau trombosit','Menunggu',null,null,null,null,null,n,null],
    [3,4,10,'Lab',6,'Cito','Demam hari ke-4','Menunggu',null,null,null,null,null,n,null],
    [4,4,12,'Radiologi',6,'Biasa','Evaluasi efusi pleura','Menunggu',null,null,null,null,null,n,null]]));
  DB.resep = tb(cols(['id','kunjungan_id','dokter_id','status','catatan','apoteker_id','catatan_apoteker','waktu','waktu_serah'], [[1,1,4,'Diserahkan','Minum pagi hari',11,null,'2026-09-14 09:12:00','2026-09-14 09:40:00'],[2,4,6,'Menunggu','Pasien IGD, siapkan segera',null,null,n,null]]));
  DB.resep_item = tb(cols(['id','resep_id','obat_id','jumlah','aturan_pakai'], [[1,1,3,30,'1x1 tablet pagi'],[2,2,1,10,'3x1 tablet bila demam'],[3,2,11,2,'20 tetes/menit'],[4,2,10,6,'3x1 tablet bila mual']]));
  DB.tindakan = tb([{ id: 1, kunjungan_id: 4, tindakan_id: 1, jumlah: 1, petugas_id: 7, waktu: n }]);
  DB.observasi = tb([{ id: 1, kunjungan_id: 4, perawat_id: 7, waktu: n, td: '110/70', nadi: 102, suhu: 38.9, rr: 22, spo2: 97, diagnosa_keperawatan: 'Hipertermia b.d. proses infeksi virus', intervensi: 'Kompres hangat, pantau suhu tiap 4 jam, pasang infus RL', evaluasi: 'Suhu masih 38,9°C, pasien tampak lemah' }]);
  DB.rawat_inap = tb([{ id: 1, kunjungan_id: 4, kamar_id: 2, dokter_id: 6, tanggal_masuk: n, tanggal_keluar: null, status: 'Dirawat', diagnosa_masuk: 'Suspek demam berdarah dengue (A91)', resume_pulang: null }]);
  DB.mutasi_stok = tb([{ id: 1, jenis_item: 'obat', item_id: 3, tipe: 'Keluar', jumlah: 30, keterangan: 'Resep #1 — Anton Hermawan', petugas_id: 11, waktu: '2026-09-14 09:40:00' }, { id: 2, jenis_item: 'obat', item_id: 1, tipe: 'Masuk', jumlah: 200, keterangan: 'Penerimaan dari PBF Kimia Farma', petugas_id: 12, waktu: '2026-10-01 10:00:00' }]);
  DB.tagihan = tb([{ id: 1, kunjungan_id: 1, total: 174000, ditanggung: 174000, dibayar: 0, metode: 'BPJS', kasir_id: 13, waktu_bayar: '2026-09-14 10:30:00' }]);
  DB.log_aktivitas = tb([{ id: 1, pegawai_id: 1, username: 'admin', aksi: 'Instalasi', detail: 'Database dibuat dan data contoh dimasukkan', waktu: n }]);
  { const X = seedExtend(DB, H, d, n); seedHistory(DB, X, d, n); }
  DB.app_meta = tb([{ id: 1, kunci: 'seed_version', nilai: SEED_VERSION }]);
  return DB;
}

/* ===================== HALAMAN: login, registrasi, beranda, profil ===================== */
const VIEWS = {};

VIEWS.login = () => {
  // Daftar akun demo: akun utama (DEMO_ACCOUNTS) lebih dulu, lalu SEMUA staf seed lain (dokter, perawat, dll.)
  // dengan sandi demo sesuai role. Staf yang didaftarkan manual (tanpa status_kepegawaian) tidak ditampilkan.
  const demo = (() => {
    const rolePw = { 1: 'Admin#2026', 2: 'Rudi#2026', 3: 'Perawat#2026', 4: 'Daftar#2026', 5: 'Rekam#2026', 6: 'Lab#2026', 7: 'Radiologi#2026', 8: 'Apotek#2026', 9: 'Gudang#2026', 10: 'Kasir#2026', 11: 'Direktur#2026' };
    const seen = new Set(), out = [];
    const add = (u, p) => { if (seen.has(u) || !p) return; const r = pegawaiFull(one('pegawai', (x) => x.username === u)); if (r && r.status === 'Aktif') { seen.add(u); out.push([u, p, r]); } };
    DEMO_ACCOUNTS.forEach(([u, p]) => add(u, p));
    [...T('pegawai')].filter((p) => p.status_kepegawaian).sort((a, b) => (a.role_id - b.role_id) || String(a.username).localeCompare(String(b.username))).forEach((p) => add(p.username, rolePw[p.role_id]));
    return out;
  })();
  const d = FORM && FORM.name === 'login' ? FORM.data : {}; FORM = null;
  $('#app').innerHTML = `<div class="auth-page"><div class="auth-wrap"><div class="auth-card">
    <div class="auth-logo">${BRAND}<strong>${RS_NAME}</strong><span>${APP_NAME} · ${APP_TAGLINE}</span></div>
    <h2>Masuk ke SIMRS</h2><p class="lead">Gunakan username dan kata sandi akun pegawai Anda. Menu yang tampil mengikuti role masing-masing.</p>
    ${flashHtml()}
    ${formAct('login', `
      <div class="fld"><label for="inUser">Username</label><div class="inp">${icon('userplus')}<input id="inUser" type="text" name="username" value="${e(d.username || '')}" placeholder="cth. dr.ahmad" autocapitalize="none" spellcheck="false" autocomplete="username"></div></div>
      <div class="fld"><label for="inPass">Kata Sandi</label><div class="inp">${icon('key')}<input id="inPass" type="password" name="password" placeholder="Masukkan kata sandi" autocomplete="current-password">
        <button type="button" class="eye" data-eye="inPass" aria-label="Tampilkan kata sandi"><svg class="ico" viewBox="0 0 24 24"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z"/><circle cx="12" cy="12" r="3"/></svg></button></div>
        <div class="caps" id="inPassCaps" hidden>Caps Lock aktif.</div></div>
      <button class="btn block" id="btnLogin" type="submit">Masuk</button>`)}
    <div class="auth-links">Pegawai baru? <a ${L('registrasi')}><b>Daftar akun pegawai</b></a></div>
    <details class="demo"><summary>Akun demo per role (${demo.length}), klik untuk mengisi</summary><div class="demo-list">
      ${demo.map(([u, p, r]) => `<button type="button" class="demo-row" data-u="${e(u)}" data-p="${e(p)}"><b>${e(u)}</b><code>${e(p)}</code><span>Role #${r.role_id} ${e(r.role_nama)} — ${e(r.nama)}${r.poli_nama ? ' · ' + e(r.poli_nama) : ''}</span></button>`).join('')}
    </div></details>
    <div class="auth-help">Kata sandi disimpan sebagai <b>hash PBKDF2-SHA256</b> dengan salt acak. Salah sandi ${MAX_FAILED_LOGIN} kali akan mengunci akun ${LOCK_MINUTES} menit. Sesi berakhir otomatis setelah ${IDLE_MINUTES} menit tidak aktif.</div>
    <div class="auth-mode">${modeBadge()}</div>
  </div><div class="auth-copy">© ${new Date().getFullYear()} ${RS_NAME} · ${e(APP_TEAM)}</div></div></div>`;
  const f = $('#inUser'); if (f && !f.value) f.focus();
};
ACTIONS.login = async (d) => {
  const uname = (d.username || '').toLowerCase(), pw = d.password || '';
  FORM = { name: 'login', data: { username: uname } };
  const acc = one('pegawai', (p) => p.username === uname);
  if (!uname || !pw) return flash('err', 'Username dan kata sandi wajib diisi.');
  if (acc && acc.terkunci_sampai && toDate(acc.terkunci_sampai) > new Date()) return flash('err', `Akun terkunci sementara karena terlalu banyak percobaan gagal. Coba lagi dalam ${Math.ceil((toDate(acc.terkunci_sampai) - new Date()) / 60000)} menit.`);
  if (!acc || !(await verifyPassword(pw, acc.password_hash))) {
    if (!acc) { audit('Login gagal', 'Username tidak dikenal: ' + uname, { username: uname }); return flash('err', 'Username atau kata sandi salah.'); }
    const g = (+acc.gagal_login || 0) + 1;
    audit('Login gagal', 'Kata sandi salah', acc);
    if (g >= MAX_FAILED_LOGIN) { const t = new Date(Date.now() + LOCK_MINUTES * 60000); update('pegawai', acc.id, { gagal_login: 0, terkunci_sampai: `${t.getFullYear()}-${pad(t.getMonth() + 1)}-${pad(t.getDate())} ${pad(t.getHours())}:${pad(t.getMinutes())}:${pad(t.getSeconds())}` }); return flash('err', `Terlalu banyak percobaan gagal. Akun dikunci ${LOCK_MINUTES} menit.`); }
    update('pegawai', acc.id, { gagal_login: g });
    return flash('err', `Username atau kata sandi salah. Sisa percobaan: ${MAX_FAILED_LOGIN - g}.`);
  }
  if (acc.status === 'Menunggu') return flash('warn', 'Akun Anda sudah terdaftar tetapi masih menunggu persetujuan Admin Sistem.');
  if (acc.status === 'Nonaktif') return flash('err', 'Akun Anda dinonaktifkan. Hubungi Admin Sistem.');
  FORM = null;
  update('pegawai', acc.id, { gagal_login: 0, terkunci_sampai: null, login_terakhir: now() });
  SESSION = { uid: acc.id, last: Date.now() }; saveSession();
  const full = pegawaiFull(acc);
  audit('Login', 'Berhasil masuk sebagai Role #' + full.role_id + ' ' + full.role_nama, full);
  nav(homeOf(full));
};

/* ---------- Form pegawai (dipakai registrasi & edit) ---------- */
function pegawaiInput(d) {
  const rid = +d.role_id || 0;
  return { nama: d.nama || '', nip: (d.nip || '').replace(/\s+/g, ''), jenis_kelamin: d.jenis_kelamin || 'L', email: d.email || '', no_hp: d.no_hp || '', role_id: rid, role: roleKode(rid), poli_id: d.poli_id ? +d.poli_id : null, username: (d.username || '').toLowerCase(), status: d.status || 'Menunggu' };
}
function pegawaiValidate(d, id, cekSandi, bolehAdmin, raw) {
  const err = {};
  if (d.nama.length < 3) err.nama = 'Nama lengkap minimal 3 huruf.';
  if (!/^\d{8,20}$/.test(d.nip)) err.nip = 'NIP/NIK pegawai berupa 8–20 angka.';
  else if (one('pegawai', (p) => p.nip === d.nip && p.id != id)) err.nip = 'NIP ini sudah terdaftar.';
  if (d.email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(d.email)) err.email = 'Format email tidak valid.';
  const r = roles()[d.role];
  if (!r || (!bolehAdmin && (!r.daftar || d.role === 'admin'))) err.role_id = 'Pilih role yang tersedia.';
  if (d.role === 'dokter' && !d.poli_id) err.poli_id = 'Dokter wajib memilih poli/unit.';
  if (!/^[a-z0-9._]{3,30}$/.test(d.username)) err.username = 'Username 3–30 karakter: huruf kecil, angka, titik, atau garis bawah.';
  else if (one('pegawai', (p) => p.username === d.username && p.id != id)) err.username = 'Username sudah dipakai, pilih yang lain.';
  if (!['Menunggu', 'Aktif', 'Nonaktif'].includes(d.status)) err.status = 'Status tidak valid.';
  if (cekSandi) { if (!strongPw(raw.password || '')) err.password = `Minimal ${MIN_PASSWORD_LEN} karakter, memuat huruf dan angka.`; else if (raw.password !== raw.password2) err.password2 = 'Konfirmasi kata sandi tidak sama.'; }
  return err;
}
function pegawaiFields(d, err, sandi, bolehAdmin, tampilStatus) {
  const f = (name, label, input, hint = '') => `<div class="fld"><label for="f_${name}">${label}</label>${input}${hint ? `<div class="hint">${hint}</div>` : ''}${err[name] ? `<div class="err-t">${e(err[name])}</div>` : ''}</div>`;
  const cls = (n) => (err[n] ? ' class="is-err"' : '');
  const rl = roles();
  const roleOpt = '<option value="">— Pilih role —</option>' + Object.entries(rl).filter(([k, r]) => bolehAdmin || (r.daftar && k !== 'admin')).map(([k, r]) => `<option value="${r.id}"${sel(d.role_id, r.id)}>Role ${r.id} — ${e(r.label)}</option>`).join('');
  const poliOpt = '<option value="">— Pilih poli/unit —</option>' + poliList(true).map((p) => `<option value="${p.id}"${sel(d.poli_id, p.id)}>${e(p.nama)}</option>`).join('');
  let h = '<div class="grid g2">';
  h += f('nama', 'Nama lengkap & gelar *', `<input id="f_nama" type="text" name="nama" value="${e(d.nama)}"${cls('nama')} placeholder="cth. dr. Ahmad Fauzi, Sp.PD">`);
  h += f('nip', 'NIP / No. Induk Pegawai *', `<input id="f_nip" type="text" inputmode="numeric" name="nip" value="${e(d.nip)}"${cls('nip')} placeholder="18 angka">`);
  h += f('jenis_kelamin', 'Jenis kelamin *', `<select id="f_jenis_kelamin" name="jenis_kelamin"><option value="L"${sel(d.jenis_kelamin, 'L')}>Laki-laki</option><option value="P"${sel(d.jenis_kelamin, 'P')}>Perempuan</option></select>`);
  h += f('no_hp', 'No. HP', `<input id="f_no_hp" type="tel" name="no_hp" value="${e(d.no_hp)}" placeholder="08xx">`);
  h += f('email', 'Email', `<input id="f_email" type="email" name="email" value="${e(d.email)}"${cls('email')} placeholder="nama@octamedika.id">`);
  h += f('role_id', 'Role / jabatan (ID role) *', `<select id="f_role" name="role_id"${cls('role_id')}>${roleOpt}</select>`, 'Disimpan sebagai angka role_id di tabel pegawai. Role menentukan modul yang bisa dibuka.');
  h += `<div data-show-when="role_id=${roleId('dokter')}" class="full">` + f('poli_id', 'Poli / unit dokter *', `<select id="f_poli_id" name="poli_id"${cls('poli_id')}>${poliOpt}</select>`) + '</div>';
  h += f('username', 'Username *', `<input id="f_username" type="text" name="username" value="${e(d.username)}"${cls('username')} autocapitalize="none" placeholder="cth. dr.ahmad">`, 'Huruf kecil, angka, titik, garis bawah.');
  if (tampilStatus) h += f('status', 'Status akun *', `<select id="f_status" name="status">${['Aktif', 'Menunggu', 'Nonaktif'].map((s) => `<option${sel(d.status, s)}>${s}</option>`).join('')}</select>`);
  if (sandi) {
    h += f('password', 'Kata sandi *', `<input id="f_password" type="password" name="password"${cls('password')} autocomplete="new-password">`, `Minimal ${MIN_PASSWORD_LEN} karakter, ada huruf dan angka. Disimpan sebagai hash.`);
    h += f('password2', 'Ulangi kata sandi *', `<input id="f_password2" type="password" name="password2"${cls('password2')} autocomplete="new-password">`);
  }
  return h + '</div>';
}
function daftarIdRole(semua) {
  return `<div class="role-legend"><b>Daftar ID role</b> <span class="muted small">(tabel <code>role</code>, disimpan di <code>pegawai.role_id</code>)</span><div class="chips-row">` +
    Object.entries(roles()).filter(([k, r]) => semua || (r.daftar && k !== 'admin')).map(([k, r]) => `<span class="role-chip"><b class="rid">${r.id}</b> ${e(r.label)}</span>`).join('') + '</div></div>';
}

/* ---------- HALAMAN 1: Registrasi pegawai ---------- */
VIEWS.registrasi = () => {
  const admin = !!user() && can('pegawai');
  const st = FORM && FORM.name === 'registrasi' ? FORM : { data: { nama: '', nip: '', jenis_kelamin: 'L', email: '', no_hp: '', role_id: '', poli_id: '', username: '', status: admin ? 'Aktif' : 'Menunggu' }, err: {} };
  FORM = null;
  const errBox = Object.keys(st.err).length ? '<div class="alert err">Periksa kembali isian yang ditandai merah.</div>' : '';
  if (admin) {
    page('Registrasi Pegawai', 'registrasi', 'Administrasi Sistem · Halaman 1 dari 2: daftarkan pegawai baru', `
      <div class="page-head"><div><h1>Registrasi Pegawai Baru</h1><p>Akun yang didaftarkan admin bisa langsung <b>Aktif</b>. Pegawai juga bisa mendaftar sendiri dari halaman login (status <b>Menunggu</b>).</p></div>
        <a class="btn ghost" ${L('pegawai')}>${icon('users')} Halaman 2: Kelola Pegawai</a></div>
      <div class="card" style="max-width:860px">${errBox}${formAct('registrasi', pegawaiFields(st.data, st.err, true, true, true) + `<div class="actions"><button class="btn">${icon('userplus')} Daftarkan pegawai</button><a class="btn ghost" ${L('pegawai')}>Batal</a></div>`)}${daftarIdRole(true)}</div>`);
    return;
  }
  $('#app').innerHTML = `<div class="auth-page"><div class="auth-wrap wide"><div class="auth-card">
    <div class="auth-logo">${BRAND}<strong>${RS_NAME}</strong><span>Registrasi akun pegawai · ${APP_NAME}</span></div>
    <h2>Daftar akun pegawai</h2><p class="lead">Isi data di bawah. Setelah dikirim, Anda mendapat <b>ID pegawai</b> dan akun berstatus <b>Menunggu</b> sampai Admin Sistem mengaktifkannya.</p>
    ${flashHtml()}${errBox}${formAct('registrasi', pegawaiFields(st.data, st.err, true, false, false) + '<button class="btn block">Kirim registrasi</button>')}
    ${daftarIdRole(false)}
    <div class="auth-links">Sudah punya akun? <a ${L('login')}><b>Masuk</b></a></div>
  </div><div class="auth-copy">© ${new Date().getFullYear()} ${RS_NAME} · ${e(APP_TEAM)}</div></div></div>`;
  afterRender();
};
ACTIONS.registrasi = async (raw) => {
  const admin = !!user() && can('pegawai');
  const d = pegawaiInput(raw);
  if (!admin) d.status = 'Menunggu';
  if (d.role !== 'dokter') d.poli_id = null;
  const err = pegawaiValidate(d, null, true, admin, raw);
  if (Object.keys(err).length) { FORM = { name: 'registrasi', data: d, err }; return; }
  const row = insert('pegawai', { nip: d.nip, nama: d.nama, username: d.username, password_hash: await hashPassword(raw.password), role_id: d.role_id, poli_id: d.poli_id, jenis_kelamin: d.jenis_kelamin, email: nul(d.email), no_hp: nul(d.no_hp), status: d.status, gagal_login: 0, terkunci_sampai: null, login_terakhir: null, created_at: now() });
  audit('Registrasi pegawai', `${d.username} (Role #${d.role_id} ${roleLabel(d.role)}) status ${d.status}`, admin ? null : { id: row.id, username: d.username });
  if (admin) { flash('ok', `Pegawai ${d.nama} terdaftar dengan ID pegawai #${row.id} sebagai Role ${d.role_id} — ${roleLabel(d.role)} (${d.status}).`); nav('pegawai'); }
  else { flash('ok', `Registrasi berhasil. ID pegawai Anda #${row.id} (Role ${d.role_id} — ${roleLabel(d.role)}). Akun ${d.username} menunggu persetujuan Admin Sistem sebelum bisa dipakai login.`); nav('login'); }
};

/* ---------- Beranda ---------- */
VIEWS.home = () => {
  const u = user(), t = today(), rl = roles(), mods = roleModules(u.role), home = (rl[u.role] || {}).home;
  const h = new Date().getHours(); const salam = h < 11 ? 'Selamat pagi' : h < 15 ? 'Selamat siang' : h < 18 ? 'Selamat sore' : 'Selamat malam';
  const kHari = where('kunjungan', (k) => k.tanggal === t);
  const kap = sum(T('kamar'), (k) => k.kapasitas);
  const byRole = {}; where('pegawai', (p) => p.status === 'Aktif').sort(by('nama')).forEach((p) => { const k = roleKode(p.role_id); (byRole[k] = byRole[k] || []).push(pegawaiFull(p)); });
  const menunggu = where('pegawai', (p) => p.status === 'Menunggu').length;
  page('Beranda', 'home', RS_NAME + ' · ' + u.role_nama, `
  <section class="welcome"><div><div class="eyebrow">${e(tglPanjang())}</div><h1>${salam}, ${e(u.nama)}</h1>
    <p>Anda masuk sebagai <b>${e(u.role_nama)}</b>${home ? ` dengan tugas utama di modul <b>${e(MODULES[home].nama)}</b>` : ''}. Sidebar hanya menampilkan modul sesuai hak akses role Anda.</p></div>
    <div class="welcome-meta"><div class="meta-box"><div class="l">Role</div><div class="v">${roleChip(u.role)}</div></div><div class="meta-box"><div class="l">ID Pegawai</div><div class="v">#${u.id}</div></div>
      <div class="meta-box"><div class="l">Username</div><div class="v">${e(u.username)}</div></div><div class="meta-box"><div class="l">Modul dapat diakses</div><div class="v">${mods.length} dari ${Object.keys(MODULES).length}</div></div></div></section>
  <div class="section-title"><h2>Ringkasan hari ini</h2><span>Data langsung dari database</span></div>
  <div class="stats">${stat('Kunjungan hari ini', kHari.length, 'blue')}${stat('Masih menunggu', kHari.filter((k) => ['Menunggu', 'Dipanggil'].includes(k.status)).length, 'amber')}
    ${stat('Pasien rawat inap', `${where('rawat_inap', (r) => r.status === 'Dirawat').length}<small class="muted" style="font-size:15px"> / ${kap} bed</small>`, 'violet')}
    ${stat('Order lab aktif', where('order_penunjang', (o) => o.kategori === 'Lab' && ['Menunggu', 'Diproses'].includes(o.status)).length)}
    ${stat('Order radiologi aktif', where('order_penunjang', (o) => o.kategori === 'Radiologi' && ['Menunggu', 'Diproses'].includes(o.status)).length)}
    ${stat('Resep belum diserahkan', where('resep', (r) => ['Menunggu', 'Diverifikasi'].includes(r.status)).length, 'red')}</div>
  <div class="section-title"><h2>Modul sesuai role Anda</h2><span>Klik "Buka modul" untuk mulai bekerja</span></div>
  <div class="job-grid">${mods.map((m) => { const M = MODULES[m], g = GROUPS[M.grup]; return `<article class="job ${m === home ? 'main-job' : ''}"><div class="head"><span class="mi-ico ${g.cls}">${icon(M.ikon)}</span><div><h3>${e(M.nama)}</h3><div class="grp">${e(g.label)}</div></div></div><p>${e(M.desk)}</p><div class="foot">${m === home ? '<span class="tag-main">Modul utama</span>' : '<span></span>'}<a class="btn sm" ${L(m)}>Buka modul</a></div></article>`; }).join('')}</div>
  <div class="section-title"><h2>Pegawai per role</h2><span>${Object.values(byRole).reduce((s, a) => s + a.length, 0)} akun aktif${menunggu ? ` · ${menunggu} menunggu persetujuan` : ''}</span></div>
  <div class="role-grid">${Object.entries(rl).map(([rk, r]) => `<div class="role-box"><h4><span><b class="rid">#${r.id}</b> ${e(r.label)}</span> <span class="badge b-blue">${(byRole[rk] || []).length} orang</span></h4>
    ${(byRole[rk] || []).length ? `<ul>${byRole[rk].map((p) => `<li><span class="avatar">${e(initials(p.nama))}</span><span>${e(p.nama)}${p.poli_nama ? ` <span class="muted small">· ${e(p.poli_nama)}</span>` : ''}</span></li>`).join('')}</ul>` : '<div class="none">Belum ada pegawai.</div>'}</div>`).join('')}</div>`);
};

/* ---------- Profil ---------- */
VIEWS.profil = () => {
  const u = user();
  page('Profil & Ganti Sandi', 'profil', '', `<div class="row-gap">
    <div class="card"><h2>Data akun</h2><p class="sub">Role dan status hanya bisa diubah oleh Admin Sistem.</p>
      <dl class="kv"><dt>ID pegawai</dt><dd class="mono">#${u.id}</dd><dt>Nama</dt><dd>${e(u.nama)}</dd><dt>NIP</dt><dd class="mono">${e(u.nip)}</dd><dt>Username</dt><dd class="mono">${e(u.username)}</dd>
        <dt>Role</dt><dd>${roleChip(u.role)} <span class="muted small">(role_id = ${u.role_id})</span></dd>${u.poli_nama ? `<dt>Poli</dt><dd>${e(u.poli_nama)}</dd>` : ''}<dt>Status</dt><dd>${badge(u.status)}</dd><dt>Login terakhir</dt><dd>${e(tgl(u.login_terakhir, true))}</dd></dl>
      ${formAct('profil_kontak', `<div class="grid g2" style="margin-top:18px"><div class="fld"><label for="p_email">Email</label><input id="p_email" type="email" name="email" value="${e(u.email)}"></div><div class="fld"><label for="p_hp">No. HP</label><input id="p_hp" type="tel" name="no_hp" value="${e(u.no_hp)}"></div></div><button class="btn">Simpan profil</button>`)}</div>
    <div class="card"><h2>Ganti kata sandi</h2><p class="sub">Kata sandi baru disimpan sebagai hash PBKDF2-SHA256.</p>
      ${formAct('profil_sandi', `<div class="fld"><label for="s1">Kata sandi lama</label><input id="s1" type="password" name="lama"></div><div class="fld"><label for="s2">Kata sandi baru</label><input id="s2" type="password" name="baru"><div class="hint">Minimal ${MIN_PASSWORD_LEN} karakter, ada huruf dan angka.</div></div><div class="fld"><label for="s3">Ulangi kata sandi baru</label><input id="s3" type="password" name="ulang"></div><button class="btn">Ganti kata sandi</button>`)}</div></div>`);
};
ACTIONS.profil_kontak = (d) => {
  if (d.email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(d.email)) return flash('err', 'Format email tidak valid.');
  update('pegawai', user().id, { email: nul(d.email), no_hp: nul(d.no_hp) }); audit('Ubah profil', 'Email/no. HP'); flash('ok', 'Profil diperbarui.');
};
ACTIONS.profil_sandi = async (d) => {
  const u = user();
  if (!(await verifyPassword(d.lama || '', u.password_hash))) return flash('err', 'Kata sandi lama salah.');
  if (!strongPw(d.baru || '')) return flash('err', `Kata sandi baru minimal ${MIN_PASSWORD_LEN} karakter dan memuat huruf serta angka.`);
  if (d.baru !== d.ulang) return flash('err', 'Konfirmasi kata sandi tidak sama.');
  update('pegawai', u.id, { password_hash: await hashPassword(d.baru) }); audit('Ganti kata sandi'); flash('ok', 'Kata sandi berhasil diganti.');
};

/* ===================== HALAMAN 2: Kelola pegawai + role & hak akses + log ===================== */
VIEWS.pegawai = () => {
  const me = user(), p = Q('p', 'daftar'), rl = roles();
  const t = tabs({ daftar: 'Daftar Pegawai', akses: 'Role (ID) & Hak Akses', log: 'Log Aktivitas' }, p === 'edit' ? 'daftar' : p);
  let body = '';
  if (p === 'edit') {
    const pg = pegawaiFull(find('pegawai', Q('id')));
    if (!pg) body = '<div class="alert err">Pegawai tidak ditemukan.</div>';
    else {
      const st = FORM && FORM.name === 'edit_pegawai' ? FORM : { data: pg, err: {} }; FORM = null;
      const diri = pg.id === me.id; const kunci = pg.terkunci_sampai && toDate(pg.terkunci_sampai) > new Date();
      body = `<div class="page-head"><div><h1>Edit Pegawai</h1><p>ID pegawai <b>#${pg.id}</b> · ${e(pg.nama)} · <span class="mono">${e(pg.username)}</span> · ${roleChip(pg.role)} · terdaftar ${e(tgl(pg.created_at))}</p></div><a class="btn ghost" ${L('pegawai')}>← Kembali ke daftar</a></div>
      <div class="row-gap"><div class="card" style="flex:2"><h2>Data pegawai</h2><p class="sub">${diri ? 'Ini akun Anda sendiri: role dan status tidak bisa diubah dari sini.' : 'Ubah role untuk mengatur modul yang bisa dibuka pegawai ini.'}</p>
        ${formAct('pegawai_simpan', hidden('id', pg.id) + pegawaiFields(st.data, st.err, false, true, !diri) + (diri ? hidden('role_id', pg.role_id) + hidden('status', 'Aktif') : '') + `<div class="actions"><button class="btn">Simpan perubahan</button><a class="btn ghost" ${L('pegawai')}>Batal</a></div>`)}</div>
        <div style="flex:1"><div class="card"><h2>Reset kata sandi</h2><p class="sub">Kata sandi lama tidak bisa dilihat siapa pun karena disimpan sebagai hash. Admin hanya bisa menggantinya.</p>
          ${formAct('pegawai_reset', hidden('id', pg.id) + `<div class="fld"><label for="rs">Kata sandi baru</label><input id="rs" type="text" name="baru" autocomplete="off" placeholder="min. ${MIN_PASSWORD_LEN} karakter, huruf + angka"></div><button class="btn amber">Reset kata sandi</button>`, confirmAttr('Ganti kata sandi ' + pg.username + '?'))}</div>
          <div class="card"><h2>Status akun</h2><dl class="kv"><dt>Status</dt><dd>${badge(pg.status)}</dd><dt>Login terakhir</dt><dd>${e(tgl(pg.login_terakhir, true))}</dd><dt>Gagal login</dt><dd>${+pg.gagal_login || 0}x${kunci ? ' · <b class="badge b-red">terkunci</b>' : ''}</dd></dl></div></div></div>`;
    }
  } else if (p === 'akses') {
    const editR = Q('edit_role') ? find('role', Q('edit_role')) : null;
    const modul = [...T('modul')].sort(by('id'));
    body = `<div class="row-gap"><div class="card flush" style="flex:3;min-width:min(100%,560px)"><div class="card-h"><div><h2>Tabel role</h2><p class="sub">Setiap role punya <b>ID angka</b>. Kolom <code>pegawai.role_id</code> menunjuk ke ID ini.</p></div></div>
      <div class="tbl-wrap"><table class="t"><thead><tr><th>ID</th><th>Kode</th><th>Nama role</th><th>Modul utama</th><th>Pegawai</th><th>Daftar sendiri</th><th></th></tr></thead><tbody>
      ${Object.entries(rl).map(([rk, r]) => `<tr><td><b class="mono" style="font-size:16px;color:var(--primary)">${r.id}</b></td><td class="mono">${e(rk)}</td><td style="min-width:200px"><b>${e(r.label)}</b><span class="sm-line">${e(r.deskripsi || '')}</span></td>
        <td class="small">${r.home ? e(MODULES[r.home].nama) : '-'}</td><td class="nowrap"><a ${L('pegawai', { role: rk })}>${where('pegawai', (x) => x.role_id === r.id).length} orang</a></td>
        <td>${r.daftar ? '<span class="badge b-green">Ya</span>' : '<span class="badge b-gray">Tidak</span>'}</td>
        <td><div class="actions"><a class="btn sm ghost" ${L('pegawai', { p: 'akses', edit_role: r.id })}>Edit</a>${r.id > 11 ? formAct('role_hapus', hidden('role_id', r.id) + '<button class="btn sm red">Hapus</button>', confirmAttr('Hapus role #' + r.id + '?')) : ''}</div></td></tr>`).join('')}</tbody></table></div></div>
      <div class="card" style="flex:1;min-width:260px"><h2>${editR ? 'Edit role #' + editR.id : 'Tambah role baru'}</h2><p class="sub">${editR ? 'Kode role tidak bisa diubah.' : 'ID dibuat otomatis (auto increment).'}</p>
        ${formAct('role_simpan', hidden('role_id', editR ? editR.id : 0) + `<div class="fld"><label for="rk">Kode role</label><input id="rk" type="text" name="kode" value="${e(editR ? editR.kode : '')}" placeholder="cth. fisioterapis"${editR ? ' readonly' : ''}></div>
          <div class="fld"><label for="rn">Nama role</label><input id="rn" type="text" name="nama" value="${e(editR ? editR.nama : '')}" placeholder="cth. Fisioterapis"></div>
          <div class="fld"><label for="rd">Deskripsi tugas</label><input id="rd" type="text" name="deskripsi" value="${e(editR ? editR.deskripsi : '')}"></div>
          <label class="check"><input type="checkbox" name="boleh_daftar" value="1"${chk(editR ? +editR.boleh_daftar : 1)}> Boleh dipilih saat registrasi pegawai</label>
          <div class="actions" style="margin-top:10px"><button class="btn">Simpan role</button>${editR ? `<a class="btn ghost" ${L('pegawai', { p: 'akses' })}>Batal</a>` : ''}</div>`)}
        <p class="small muted" style="margin-top:12px">Role baru bisa membuka modul yang dicentang di matriks. Hak menyimpan data klinis tetap khusus role inti (mis. SOAP hanya Dokter).</p></div></div>
      ${formAct('hak_akses', `<div class="card-h"><div><h2>Matriks hak akses (tabel hak_akses)</h2><p class="sub">Centang modul yang boleh dibuka setiap role. ● = modul utama (dibuka pertama setelah login). Admin (#1) selalu bisa semua modul.</p></div><button class="btn">Simpan hak akses</button></div>
        <div class="tbl-wrap"><table class="t" style="min-width:1100px"><thead><tr><th>ID · Modul</th>${Object.values(rl).map((r) => `<th style="text-align:center;white-space:normal;min-width:84px">#${r.id}<br>${e(r.label)}</th>`).join('')}</tr></thead><tbody>
        ${modul.map((m) => `<tr><td><span class="mono muted">#${m.id}</span> <b>${e(m.nama)}</b></td>${Object.entries(rl).map(([rk, r]) => { const ok = r.modules.includes(m.kode), home = r.home === m.kode; return `<td style="text-align:center">${rk === 'admin' ? `<b style="color:var(--${home ? 'primary' : 'green'})">${home ? '●' : '✓'}</b>` : `<input type="checkbox" name="akses_${r.id}[]" value="${e(m.kode)}"${chk(ok)} aria-label="${e(r.label + ' — ' + m.nama)}" style="width:17px;height:17px">${home ? '<b style="color:var(--primary)"> ●</b>' : ''}`}</td>`; }).join('')}</tr>`).join('')}
        <tr><td><b>Modul utama</b></td>${Object.entries(rl).map(([rk, r]) => `<td>${rk === 'admin' ? '' : `<select name="utama_${r.id}" style="padding:6px;font-size:12px;min-width:90px">${(r.modules.length ? r.modules : modul.map((m) => m.kode)).map((mk) => `<option value="${e(mk)}"${sel(r.home, mk)}>${e(MODULES[mk].nama)}</option>`).join('')}</select>`}</td>`).join('')}</tr>
        </tbody></table></div>`, 'class="card flush"')}`;
  } else if (p === 'log') {
    const cari = Q('cari');
    const log = [...T('log_aktivitas')].filter((l) => !cari || like(l.username, cari) || like(l.aksi, cari) || like(l.detail, cari)).sort(by([(x) => x.id, -1])).slice(0, 200);
    body = `<div class="card flush"><div class="card-h"><div><h2>Log aktivitas</h2><p class="sub">Login, logout, registrasi, perubahan akun, akses rekam medis, dan transaksi penting. 200 terakhir.</p></div>
      ${formAct('cari', hidden('_m', 'pegawai') + hidden('p', 'log') + `<input type="search" name="cari" value="${e(cari)}" placeholder="Cari username / aksi" aria-label="Cari log"><button class="btn sm ghost">Cari</button>`, 'class="inline-form"')}</div>
      <div class="tbl-wrap"><table class="t"><thead><tr><th>Waktu</th><th>Pengguna</th><th>Aktivitas</th><th>Detail</th></tr></thead><tbody>
      ${log.map((l) => `<tr><td class="nowrap">${e(tgl(l.waktu, true))}</td><td class="mono">${e(l.username)}</td><td>${/gagal/i.test(l.aksi) ? `<span class="badge b-red">${e(l.aksi)}</span>` : e(l.aksi)}</td><td>${e(l.detail)}</td></tr>`).join('') || emptyRow(4)}</tbody></table></div></div>`;
  } else {
    const fRole = Q('role'), fStatus = Q('status'), cari = Q('cari');
    let list = T('pegawai').map(pegawaiFull);
    if (fRole && rl[fRole]) list = list.filter((g) => g.role === fRole);
    if (fStatus) list = list.filter((g) => g.status === fStatus);
    if (cari) list = list.filter((g) => like(g.nama, cari) || like(g.username, cari) || like(g.nip, cari));
    const ord = { Menunggu: 0, Aktif: 1, Nonaktif: 2 };
    list.sort(by([(g) => ord[g.status], 1], 'role_id', 'nama'));
    const cnt = { Aktif: 0, Menunggu: 0, Nonaktif: 0 }; T('pegawai').forEach((g) => cnt[g.status]++);
    body = `<div class="page-head"><div><h1>Daftar Pegawai</h1><p>Setujui pendaftar baru, ubah role, nonaktifkan, reset sandi, atau hapus akun.</p></div><a class="btn" ${L('registrasi')}>${icon('userplus')} Halaman 1: Registrasi Pegawai</a></div>
    <div class="stats">${stat('Total pegawai', T('pegawai').length)}${stat('Aktif', cnt.Aktif, 'green')}${stat('Menunggu persetujuan', cnt.Menunggu, 'amber')}${stat('Nonaktif', cnt.Nonaktif)}</div>
    ${cnt.Menunggu ? `<div class="alert warn">${cnt.Menunggu} pegawai mendaftar dan menunggu persetujuan. Klik <b>Setujui</b> agar akunnya bisa dipakai login.</div>` : ''}
    <div class="card flush"><div class="card-h">${formAct('cari', hidden('_m', 'pegawai') + `<select name="role" aria-label="Filter role"><option value="">Semua role</option>${Object.entries(rl).map(([rk, r]) => `<option value="${rk}"${sel(fRole, rk)}>#${r.id} ${e(r.label)} (${where('pegawai', (x) => x.role_id === r.id).length})</option>`).join('')}</select>
      <select name="status" aria-label="Filter status"><option value="">Semua status</option>${Object.keys(cnt).map((s) => `<option${sel(fStatus, s)}>${s}</option>`).join('')}</select>
      <input type="search" name="cari" value="${e(cari)}" placeholder="Nama / username / NIP" aria-label="Cari pegawai"><button class="btn sm">${icon('search')} Tampilkan</button>${fRole || fStatus || cari ? `<a class="btn sm ghost" ${L('pegawai')}>Reset</a>` : ''}`, 'class="inline-form"')}</div>
    <div class="tbl-wrap"><table class="t"><thead><tr><th>ID</th><th>Pegawai</th><th>Username</th><th>Role (ID)</th><th>Status</th><th>Login terakhir</th><th>Aksi</th></tr></thead><tbody>
    ${list.map((g) => { const diri = g.id === me.id, kunci = g.terkunci_sampai && toDate(g.terkunci_sampai) > new Date(); const fb = (aksi, label, cls, conf) => formAct('pegawai_aksi', hidden('id', g.id) + hidden('aksi', aksi) + `<button class="btn sm ${cls}">${label}</button>`, conf ? confirmAttr(conf) : '');
      return `<tr><td class="mono"><b>#${g.id}</b></td><td><b>${e(g.nama)}</b>${diri ? ' <span class="badge b-blue">Anda</span>' : ''}<span class="sm-line mono">NIP ${e(g.nip)} · ${jk(g.jenis_kelamin)}</span></td><td class="mono">${e(g.username)}</td>
        <td>${roleChip(g.role)}${g.poli_nama ? `<span class="sm-line">${e(g.poli_nama)}</span>` : ''}</td><td>${badge(g.status)}${kunci ? ' <span class="badge b-red">Terkunci</span>' : ''}</td><td class="small">${e(tgl(g.login_terakhir, true))}</td>
        <td><div class="actions">${g.status === 'Menunggu' ? fb('setujui', 'Setujui', 'green') : ''}<a class="btn sm ghost" ${L('pegawai', { p: 'edit', id: g.id })}>Edit</a>${kunci ? fb('buka_kunci', 'Buka kunci', 'ghost') : ''}
          ${!diri ? (g.status === 'Aktif' ? fb('nonaktifkan', 'Nonaktifkan', 'amber', `Nonaktifkan akun ${g.nama}? Ia tidak bisa login, tetapi datanya tetap tersimpan.`) : g.status === 'Nonaktif' ? fb('aktifkan', 'Aktifkan', 'green') : '') + fb('hapus', 'Hapus', 'red', `Hapus permanen akun ${g.nama}?`) : ''}</div></td></tr>`; }).join('') || emptyRow(7, 'Tidak ada pegawai yang cocok.')}
    </tbody></table></div></div>`;
  }
  page('Kelola Pegawai', 'pegawai', 'Administrasi Sistem · Halaman 2 dari 2: edit, hapus, setujui, reset sandi', t + body);
};
/* Form pencarian/filter umum: pindah halaman dengan parameter baru */
ACTIONS.cari = (d) => { const m = d._m || NAV.m; delete d._m; nav(m, d); };
function pakaiData(pg) { const id = pg.id; return T('kunjungan').some((k) => k.dokter_id == id) || T('rekam_medis').some((r) => r.dokter_id == id) || T('order_penunjang').some((o) => o.dokter_id == id || o.petugas_id == id) || T('resep').some((r) => r.dokter_id == id || r.apoteker_id == id) || T('observasi').some((o) => o.perawat_id == id) || T('rawat_inap').some((r) => r.dokter_id == id) || T('appointment').some((a) => a.dokter_id == id) || T('tindakan').some((t) => t.petugas_id == id); }
ACTIONS.pegawai_aksi = (d) => {
  const me = user(); const pg = pegawaiFull(find('pegawai', d.id)); if (!pg) return flash('err', 'Pegawai tidak ditemukan.');
  const diri = pg.id === me.id, adminTerakhir = pg.role === 'admin' && pg.status === 'Aktif' && where('pegawai', (x) => x.role_id === roleId('admin') && x.status === 'Aktif').length <= 1;
  if (d.aksi === 'setujui' || d.aksi === 'aktifkan') { update('pegawai', pg.id, { status: 'Aktif', gagal_login: 0, terkunci_sampai: null }); audit(d.aksi === 'setujui' ? 'Setujui registrasi' : 'Aktifkan pegawai', pg.username); flash('ok', `Akun ${pg.nama} (ID #${pg.id}) sekarang Aktif dan bisa dipakai login.`); }
  if (d.aksi === 'buka_kunci') { update('pegawai', pg.id, { gagal_login: 0, terkunci_sampai: null }); audit('Buka kunci akun', pg.username); flash('ok', `Kunci akun ${pg.username} dibuka.`); }
  if (d.aksi === 'nonaktifkan') { if (diri || adminTerakhir) return flash('err', 'Tidak bisa menonaktifkan akun sendiri atau admin aktif terakhir.'); update('pegawai', pg.id, { status: 'Nonaktif' }); audit('Nonaktifkan pegawai', pg.username); flash('ok', `Akun ${pg.nama} dinonaktifkan. Data riwayatnya tetap tersimpan.`); }
  if (d.aksi === 'hapus') {
    if (diri || adminTerakhir) return flash('err', 'Tidak bisa menghapus akun sendiri atau admin aktif terakhir.');
    if (pakaiData(pg)) return flash('err', `${pg.nama} sudah tercatat di data pelayanan (rekam medis, order, resep, dll), jadi tidak boleh dihapus. Gunakan Nonaktifkan.`);
    removeWhere('pegawai', (x) => x.id === pg.id); removeWhere('jadwal_dokter', (j) => j.dokter_id === pg.id); audit('Hapus pegawai', pg.username + ' — ' + pg.nama); flash('ok', `Pegawai ${pg.nama} dihapus.`);
  }
};
ACTIONS.pegawai_reset = async (d) => {
  const pg = find('pegawai', d.id); if (!pg) return;
  if (!strongPw(d.baru || '')) return flash('err', `Kata sandi baru minimal ${MIN_PASSWORD_LEN} karakter, memuat huruf dan angka.`);
  update('pegawai', pg.id, { password_hash: await hashPassword(d.baru), gagal_login: 0, terkunci_sampai: null }); audit('Reset kata sandi', pg.username);
  flash('ok', `Kata sandi ${pg.username} sudah diganti. Beri tahu pegawai yang bersangkutan.`);
};
ACTIONS.pegawai_simpan = (raw) => {
  const me = user(); const pg = pegawaiFull(find('pegawai', raw.id)); if (!pg) return;
  const d = pegawaiInput(raw); if (d.role !== 'dokter') d.poli_id = null;
  const adminTerakhir = pg.role === 'admin' && pg.status === 'Aktif' && where('pegawai', (x) => x.role_id === roleId('admin') && x.status === 'Aktif').length <= 1;
  if (pg.id === me.id) { d.role_id = pg.role_id; d.role = pg.role; d.status = 'Aktif'; }
  if (adminTerakhir && (d.role !== 'admin' || d.status !== 'Aktif')) { d.role_id = roleId('admin'); d.role = 'admin'; d.status = 'Aktif'; }
  const err = pegawaiValidate(d, pg.id, false, true, raw);
  if (Object.keys(err).length) { FORM = { name: 'edit_pegawai', data: d, err }; return flash('err', 'Periksa kembali isian yang ditandai merah.'); }
  update('pegawai', pg.id, { nama: d.nama, nip: d.nip, jenis_kelamin: d.jenis_kelamin, email: nul(d.email), no_hp: nul(d.no_hp), role_id: d.role_id, poli_id: d.poli_id, username: d.username, status: d.status });
  audit('Edit pegawai', `${d.username} → role #${d.role_id} ${roleLabel(d.role)}, ${d.status}`); flash('ok', `Data ${d.nama} disimpan.`); nav('pegawai');
};
ACTIONS.role_simpan = (d) => {
  const rid = +d.role_id, kode = (d.kode || '').toLowerCase(), nama = d.nama || '';
  if (nama.length < 3) return flash('err', 'Nama role minimal 3 huruf.');
  if (rid) { update('role', rid, { nama, deskripsi: nul(d.deskripsi), boleh_daftar: d.boleh_daftar ? 1 : 0 }); audit('Edit role', `#${rid} ${nama}`); flash('ok', `Role #${rid} diperbarui.`); nav('pegawai', { p: 'akses' }); return; }
  if (!/^[a-z_]{3,20}$/.test(kode) || one('role', (r) => r.kode === kode)) return flash('err', 'Kode role 3–20 huruf kecil/garis bawah dan belum dipakai.');
  const r = insert('role', { kode, nama, deskripsi: nul(d.deskripsi), modul_utama_id: null, boleh_daftar: d.boleh_daftar ? 1 : 0 });
  audit('Tambah role', `#${r.id} ${nama}`); flash('ok', `Role baru dibuat dengan ID #${r.id}. Centang modul yang boleh dibuka di matriks hak akses.`);
};
ACTIONS.role_hapus = (d) => {
  const rid = +d.role_id;
  if (rid <= 11) return flash('err', 'Role bawaan (ID 1–11) dipakai oleh sistem dan tidak bisa dihapus.');
  if (where('pegawai', (p) => p.role_id === rid).length) return flash('err', 'Masih ada pegawai dengan role ini. Pindahkan dulu role mereka.');
  removeWhere('role', (r) => r.id === rid); removeWhere('hak_akses', (h) => h.role_id === rid); audit('Hapus role', '#' + rid); flash('ok', `Role #${rid} dihapus.`);
};
ACTIONS.hak_akses = (d) => {
  const modulId = Object.fromEntries(T('modul').map((m) => [m.kode, m.id]));
  for (const r of T('role')) {
    if (r.kode === 'admin') continue;
    const dipilih = (d['akses_' + r.id] || []).filter((k) => modulId[k]);
    removeWhere('hak_akses', (h) => h.role_id === r.id);
    dipilih.forEach((k) => insert('hak_akses', { role_id: r.id, modul_id: modulId[k] }));
    let u = d['utama_' + r.id]; if (!dipilih.includes(u)) u = dipilih[0] || null;
    update('role', r.id, { modul_utama_id: u ? modulId[u] : null });
  }
  audit('Ubah hak akses', 'Matriks role × modul diperbarui'); flash('ok', 'Hak akses tersimpan di tabel hak_akses dan langsung berlaku.');
};

/* ===================== MASTER DATA ===================== */
const MASTER = {
  poli: { judul: 'Poli & Unit', kolom: { kode: ['Kode antrean (1 huruf)', 'text'], nama: ['Nama poli', 'text'], tarif: ['Tarif konsultasi (Rp)', 'number'], is_igd: ['Unit IGD?', 'select', { 0: 'Tidak', 1: 'Ya' }] } },
  kamar: { judul: 'Kamar Rawat Inap', kolom: { nama: ['Nama kamar', 'text'], kelas: ['Kelas', 'select', { 'Kelas 3': 'Kelas 3', 'Kelas 2': 'Kelas 2', 'Kelas 1': 'Kelas 1', VIP: 'VIP', ICU: 'ICU' }], kapasitas: ['Jumlah bed', 'number'], tarif: ['Tarif per hari (Rp)', 'number'] } },
  pemeriksaan: { judul: 'Pemeriksaan Lab & Radiologi', kolom: { kategori: ['Kategori', 'select', { Lab: 'Laboratorium', Radiologi: 'Radiologi' }], nama: ['Nama pemeriksaan', 'text'], satuan: ['Satuan hasil', 'text'], nilai_rujukan: ['Nilai rujukan (cth. 12-16)', 'text'], tarif: ['Tarif (Rp)', 'number'] } },
  tindakan_master: { judul: 'Tindakan Medis', kolom: { nama: ['Nama tindakan', 'text'], tarif: ['Tarif (Rp)', 'number'] } },
  icd10: { judul: 'Master ICD-10', kolom: { kode: ['Kode ICD-10', 'text'], nama: ['Nama diagnosis', 'text'] } },
};
const masterDipakai = (t, r) => ({ poli: () => T('kunjungan').some((k) => k.poli_id == r.id) || T('pegawai').some((p) => p.poli_id == r.id), kamar: () => T('rawat_inap').some((x) => x.kamar_id == r.id), pemeriksaan: () => T('order_penunjang').some((o) => o.pemeriksaan_id == r.id), tindakan_master: () => T('tindakan').some((x) => x.tindakan_id == r.id), icd10: () => T('rekam_medis').some((x) => x.icd10_kode === r.kode) }[t]());
VIEWS.master = () => {
  const tab = MASTER[Q('t')] ? Q('t') : 'poli', M = MASTER[tab];
  const list = [...T(tab)].sort(by(tab === 'icd10' ? 'kode' : tab === 'pemeriksaan' ? 'kategori' : 'id', tab === 'pemeriksaan' ? 'nama' : 'id'));
  const edit = Q('edit') ? find(tab, Q('edit')) : null, ubah = isRole('admin');
  page('Master Data', 'master', '', tabs(Object.fromEntries(Object.entries(MASTER).map(([k, m]) => [k, m.judul])), tab, 't') + `
  <div class="row-gap"><div class="card flush" style="flex:2"><div class="card-h"><div><h2>${e(M.judul)}</h2><p class="sub">${list.length} data · dipakai langsung oleh modul lain</p></div></div>
    <div class="tbl-wrap"><table class="t"><thead><tr>${Object.values(M.kolom).map(([l]) => `<th>${e(l)}</th>`).join('')}<th></th></tr></thead><tbody>
    ${list.map((r) => `<tr>${Object.entries(M.kolom).map(([c, [l, tp, op]]) => `<td>${tp === 'number' && l.includes('Rp') ? rupiah(r[c]) : tp === 'select' ? e(op[r[c]] ?? r[c]) : e(r[c] ?? '-')}</td>`).join('')}
      <td>${ubah ? `<div class="actions"><a class="btn sm ghost" ${L('master', { t: tab, edit: r.id })}>Edit</a>${formAct('master_hapus', hidden('t', tab) + hidden('id', r.id) + '<button class="btn sm red">Hapus</button>', confirmAttr('Hapus data ini?'))}</div>` : ''}</td></tr>`).join('') || emptyRow(Object.keys(M.kolom).length + 1)}</tbody></table></div></div>
  ${ubah ? `<div class="card"><h2>${edit ? 'Edit data' : 'Tambah data'}</h2><p class="sub">${e(M.judul)}</p>${formAct('master_simpan', hidden('t', tab) + hidden('id', edit ? edit.id : '') + Object.entries(M.kolom).map(([c, [l, tp, op]]) => `<div class="fld"><label for="m_${c}">${e(l)}</label>${tp === 'select' ? `<select id="m_${c}" name="${c}">${Object.entries(op).map(([v, lb]) => `<option value="${e(v)}"${sel(edit ? edit[c] : '', v)}>${e(lb)}</option>`).join('')}</select>` : `<input id="m_${c}" type="${tp}" name="${c}" value="${e(edit ? edit[c] ?? '' : '')}"${tp === 'number' ? ' min="0"' : ''}${c === 'kode' && tab === 'poli' ? ' maxlength="1"' : ''}>`}</div>`).join('') + `<div class="actions"><button class="btn">Simpan</button>${edit ? `<a class="btn ghost" ${L('master', { t: tab })}>Batal</a>` : ''}</div>`)}</div>` : ''}</div>
  <div class="card"><h2>Pengaturan data</h2><p class="sub">Mode penyimpanan saat ini: <b>MySQL melalui PHP PDO</b>. Data dibaca dan disimpan di server database.</p>
    ${ubah ? formAct('reset_data', '<button class="btn red">Kembalikan ke data contoh</button>', confirmAttr('Semua data (pasien, kunjungan, pegawai baru, dll) akan dihapus dan diganti data contoh. Lanjutkan?')) : ''}</div>`);
};
ACTIONS.master_simpan = (d) => {
  const tab = d.t, M = MASTER[tab]; const val = {};
  for (const [c, [l, tp]] of Object.entries(M.kolom)) {
    let v = d[c] ?? ''; if (tp === 'number') v = Math.max(0, +v || 0);
    if (v === '' && !['satuan', 'nilai_rujukan'].includes(c)) { nav('master', { t: tab, edit: d.id || undefined }); return flash('err', `${l} wajib diisi.`); }
    val[c] = v === '' ? null : v;
  }
  if (tab === 'poli') { val.kode = String(val.kode).slice(0, 1).toUpperCase(); val.is_igd = +val.is_igd; }
  const kembar = tab === 'icd10' ? one(tab, (r) => r.kode === val.kode && r.id != d.id) : one(tab, (r) => r.nama === val.nama && r.id != d.id && (tab !== 'pemeriksaan' || r.kategori === val.kategori));
  if (kembar) return flash('err', 'Gagal menyimpan: data kembar (nama/kode sudah ada).');
  if (d.id) update(tab, d.id, val); else insert(tab, val);
  audit((d.id ? 'Edit' : 'Tambah') + ' master ' + tab, val.nama || ''); flash('ok', `Data ${M.judul} disimpan.`); nav('master', { t: tab });
};
ACTIONS.master_hapus = (d) => {
  const r = find(d.t, d.id); if (!r) return;
  if (masterDipakai(d.t, r)) return flash('err', 'Data ini sudah dipakai di transaksi (kunjungan, order, rekam medis), jadi tidak bisa dihapus.');
  removeWhere(d.t, (x) => x.id == d.id); audit('Hapus master ' + d.t, r.nama || r.kode); flash('ok', 'Data dihapus.');
};
ACTIONS.reset_data = async () => { const u = user(); DATA = normalize(seedData()); TABLES.forEach(touch); const adm = one('pegawai', (p) => p.username === u.username); SESSION = adm ? { uid: adm.id, last: Date.now() } : null; saveSession(); flash('ok', 'Data dikembalikan ke data contoh.'); nav('home'); };

/* ===================== PENDAFTARAN PASIEN (Admisi) ===================== */
const PENJAMIN = ['Umum', 'BPJS', 'Asuransi'];
const pasienOpts = () => '<option value="">— Pilih pasien —</option>' + [...T('pasien')].sort(by('nama_lengkap')).map((r) => `<option value="${r.id}">${e(r.nama_lengkap)} · ${e(r.nomor_rm)}</option>`).join('');
function cariPasien(q, lim = 50) { return T('pasien').filter((p) => like(p.nama_lengkap, q) || like(p.nomor_rm, q) || like(p.nik, q)).sort(by('nama_lengkap')).slice(0, lim); }

VIEWS.admisi = () => {
  const p = Q('p', 'dashboard'), t = today();
  let body = tabs({ dashboard: 'Dashboard & Antrean', pasien: 'Data Pasien', form: '+ Pasien Baru', kunjungan: '+ Kunjungan' }, p);
  if (p === 'dashboard') {
    const antri = where('kunjungan', (k) => k.tanggal === t).sort(by('id')).map((k) => kunjungan(k.id));
    const baru = where('pasien', (x) => (x.created_at || '') >= t).length;
    const c = (s) => antri.filter((r) => [].concat(s).includes(r.status)).length;
    body += `<div class="page-head"><div><h1>Dashboard Pendaftaran</h1><p>${e(tglPanjang())}</p></div><div class="actions"><a class="btn" ${L('admisi', { p: 'form' })}>${icon('plus')} Pasien Baru</a><a class="btn ghost" ${L('admisi', { p: 'kunjungan' })}>Kunjungan Pasien Lama</a></div></div>
    <div class="stats">${stat('Pasien baru hari ini', baru, 'blue')}${stat('Total kunjungan', antri.length)}${stat('Menunggu', c(['Menunggu', 'Dipanggil']), 'amber')}${stat('Sedang diperiksa', c('Diperiksa'), 'violet')}${stat('Selesai', c('Selesai'), 'green')}</div>
    <div class="card flush"><div class="card-h"><h2>Antrean hari ini — ${e(tgl(t))}</h2></div><div class="tbl-wrap"><table class="t"><thead><tr><th>No.</th><th>Pasien</th><th>Jenis</th><th>Poli / Dokter</th><th>Penjamin</th><th>Daftar</th><th>Status</th><th></th></tr></thead><tbody>
    ${antri.map((a) => `<tr><td class="mono"><b style="color:var(--primary)">${e(a.no_antrian)}</b></td><td><b>${e(a.nama_lengkap)}</b><span class="sm-line mono">${e(a.nomor_rm)}</span></td><td>${badge(a.jenis)}</td><td>${e(a.poli_nama || '-')}<span class="sm-line">${e(a.dokter_nama || '-')}</span></td><td>${badge(a.penjamin)}</td><td class="small">${jam(a.waktu_daftar)}</td><td>${badge(a.status)}</td>
      <td>${['Menunggu', 'Dipanggil'].includes(a.status) ? formAct('kunjungan_batal', hidden('id', a.id) + '<button class="btn sm ghost">Batal</button>', confirmAttr('Batalkan kunjungan ' + a.no_antrian + '?')) : ''}</td></tr>`).join('') || emptyRow(8, 'Belum ada antrean hari ini.')}</tbody></table></div></div>`;
  }
  if (p === 'pasien') {
    const cari = Q('cari');
    const list = cari ? cariPasien(cari) : [...T('pasien')].sort(by([(x) => x.id, -1])).slice(0, 50);
    body += `<div class="card flush"><div class="card-h"><div><h2>Data pasien</h2><p class="sub">${T('pasien').length} pasien terdaftar${cari ? '' : ' · menampilkan 50 terbaru'}</p></div>
      ${formAct('cari', hidden('_m', 'admisi') + hidden('p', 'pasien') + `<input type="search" name="cari" value="${e(cari)}" placeholder="Nama / No. RM / NIK" aria-label="Cari pasien"><button class="btn sm">${icon('search')} Cari</button>`, 'class="inline-form"')}</div>
      <div class="tbl-wrap"><table class="t"><thead><tr><th>No. RM</th><th>Nama</th><th>NIK</th><th>Lahir / Usia</th><th>Penjamin</th><th>No. HP</th><th>Aksi</th></tr></thead><tbody>
      ${list.map((r) => `<tr><td class="mono">${e(r.nomor_rm)}</td><td><b>${e(r.nama_lengkap)}</b><span class="sm-line">${jk(r.jenis_kelamin)}${r.alergi ? ` · <span style="color:var(--red)">Alergi: ${e(r.alergi)}</span>` : ''}</span></td><td class="mono">${e(r.nik)}</td><td>${e(tgl(r.tanggal_lahir))}<span class="sm-line">${umur(r.tanggal_lahir)}</span></td><td>${badge(r.penjamin)}</td><td>${e(r.no_hp || '-')}</td>
        <td><div class="actions"><a class="btn sm" ${L('admisi', { p: 'kunjungan', pasien: r.id })}>+ Kunjungan</a><a class="btn sm ghost" ${L('admisi', { p: 'form', id: r.id })}>Edit</a>${can('emr') ? `<a class="btn sm ghost" ${L('emr', { p: 'pasien', id: r.id })}>Rekam medis</a>` : ''}${formAct('pasien_hapus', hidden('id', r.id) + '<button class="btn sm red">Hapus</button>', confirmAttr('Hapus data pasien ' + r.nama_lengkap + '?'))}</div></td></tr>`).join('') || emptyRow(7, 'Pasien tidak ditemukan.')}</tbody></table></div></div>`;
  }
  if (p === 'form') {
    const id = +Q('id') || 0;
    const st = FORM && FORM.name === 'pasien' ? FORM : { data: find('pasien', id) || { nama_lengkap: '', nik: '', tanggal_lahir: '', jenis_kelamin: 'L', alamat: '', no_hp: '', golongan_darah: '', alergi: '', penjamin: 'Umum', no_penjamin: '' }, err: {} };
    FORM = null; const d = st.data, err = st.err;
    const er = (k) => (err[k] ? `<div class="err-t">${e(err[k])}</div>` : ''), ec = (k) => (err[k] ? ' class="is-err"' : '');
    body += `<div class="card" style="max-width:900px"><h2>${id ? 'Edit data pasien' : 'Pendaftaran pasien baru'}</h2><p class="sub">${id ? 'Nomor RM tidak berubah.' : 'Nomor rekam medis dibuat otomatis. Pastikan NIK belum terdaftar (cek di Data Pasien).'}</p>
      ${Object.keys(err).length ? '<div class="alert err">Periksa kembali isian yang ditandai merah.</div>' : ''}
      ${formAct('pasien_simpan', hidden('id', id) + `<div class="grid g2">
        <div class="fld"><label for="pn">Nama lengkap *</label><input id="pn" type="text" name="nama_lengkap" value="${e(d.nama_lengkap)}"${ec('nama_lengkap')}>${er('nama_lengkap')}</div>
        <div class="fld"><label for="pk">NIK (16 angka) *</label><input id="pk" type="text" inputmode="numeric" maxlength="16" name="nik" value="${e(d.nik)}"${ec('nik')}>${er('nik')}</div>
        <div class="fld"><label for="pl">Tanggal lahir *</label><input id="pl" type="date" name="tanggal_lahir" max="${today()}" value="${e(d.tanggal_lahir)}"${ec('tanggal_lahir')}>${er('tanggal_lahir')}</div>
        <div class="fld"><label for="pj">Jenis kelamin *</label><select id="pj" name="jenis_kelamin"><option value="L"${sel(d.jenis_kelamin, 'L')}>Laki-laki</option><option value="P"${sel(d.jenis_kelamin, 'P')}>Perempuan</option></select></div>
        <div class="fld full"><label for="pa">Alamat</label><input id="pa" type="text" name="alamat" value="${e(d.alamat)}"></div>
        <div class="fld"><label for="ph">No. HP</label><input id="ph" type="tel" name="no_hp" value="${e(d.no_hp)}" placeholder="08xx"></div>
        <div class="fld"><label for="pg">Golongan darah</label><select id="pg" name="golongan_darah"><option value="">Belum diketahui</option>${['A', 'B', 'AB', 'O'].map((g) => `<option${sel(d.golongan_darah, g)}>${g}</option>`).join('')}</select></div>
        <div class="fld full"><label for="pal">Riwayat alergi</label><input id="pal" type="text" name="alergi" value="${e(d.alergi)}" placeholder="cth. Amoxicillin, seafood (kosongkan bila tidak ada)"><div class="hint">Alergi tampil sebagai banner merah di EMR, CPOE, dan Farmasi.</div></div>
        <div class="fld"><label for="ppj">Penjamin *</label><select id="ppj" name="penjamin">${PENJAMIN.map((g) => `<option${sel(d.penjamin, g)}>${g}</option>`).join('')}</select></div>
        <div class="fld" data-show-when="penjamin=BPJS|Asuransi"><label for="pnp">No. kartu BPJS / polis *</label><input id="pnp" type="text" name="no_penjamin" value="${e(d.no_penjamin)}"${ec('no_penjamin')}>${er('no_penjamin')}</div></div>
        <div class="actions"><button class="btn">${id ? 'Simpan perubahan' : 'Daftarkan pasien'}</button><a class="btn ghost" ${L('admisi', { p: 'pasien' })}>Batal</a></div>`)}</div>`;
  }
  if (p === 'kunjungan') {
    const ps = find('pasien', Q('pasien'));
    if (!ps) {
      const cari = Q('cari'); const hasil = cari ? cariPasien(cari, 20) : [];
      body += `<div class="card" style="max-width:900px"><h2>Buat kunjungan — pilih pasien</h2><p class="sub">Cari pasien lama dengan nama, nomor RM, atau NIK. Pasien belum terdaftar? <a ${L('admisi', { p: 'form' })}>Daftarkan pasien baru</a>.</p>
        ${formAct('cari', hidden('_m', 'admisi') + hidden('p', 'kunjungan') + `<input type="search" name="cari" value="${e(cari)}" placeholder="Nama / No. RM / NIK" style="flex:1" aria-label="Cari pasien"><button class="btn">${icon('search')} Cari</button>`, 'class="inline-form" style="margin-bottom:14px"')}
        ${cari ? `<div class="tbl-wrap"><table class="t"><thead><tr><th>No. RM</th><th>Nama</th><th>Lahir</th><th>Penjamin</th><th></th></tr></thead><tbody>${hasil.map((r) => `<tr><td class="mono">${e(r.nomor_rm)}</td><td><b>${e(r.nama_lengkap)}</b></td><td>${e(tgl(r.tanggal_lahir))}</td><td>${badge(r.penjamin)}</td><td><a class="btn sm" ${L('admisi', { p: 'kunjungan', pasien: r.id })}>Pilih</a></td></tr>`).join('') || emptyRow(5, 'Pasien tidak ditemukan.')}</tbody></table></div>` : ''}</div>`;
    } else {
      const riw = where('kunjungan', (k) => k.pasien_id === ps.id).sort(by([(x) => x.id, -1])).slice(0, 5);
      body += `${ps.alergi ? `<div class="allergy">⚠ ALERGI: ${e(ps.alergi)}</div>` : ''}<div class="row-gap"><div class="card" style="flex:2"><h2>Form pendaftaran kunjungan</h2><p class="sub"><a ${L('admisi', { p: 'kunjungan' })}>← Ganti pasien</a></p>
        <div class="alert info"><b>${e(ps.nama_lengkap)}</b> · ${e(ps.nomor_rm)} · NIK ${e(ps.nik)} · ${umur(ps.tanggal_lahir)}</div>
        ${formAct('kunjungan_buat', hidden('pasien_id', ps.id) + `<div class="fld"><span class="lbl">Jenis kunjungan *</span><label class="check"><input type="radio" name="jenis" value="Rawat Jalan" checked> Rawat Jalan (Poliklinik)</label><label class="check"><input type="radio" name="jenis" value="IGD"> Instalasi Gawat Darurat (IGD)</label></div>
          <div class="grid g2" data-show-when="jenis=Rawat Jalan"><div class="fld"><label for="selPoli">Poli tujuan *</label><select name="poli_id" id="selPoli" data-poli-for="selDokter"><option value="">— Pilih poli —</option>${poliList().map((po) => `<option value="${po.id}">${e(po.nama)} (${rupiah(po.tarif)})</option>`).join('')}</select></div>
            <div class="fld"><label for="selDokter">Dokter *</label><select name="dokter_id" id="selDokter"><option value="">— Pilih dokter —</option>${dokterList().map((dk) => `<option value="${dk.id}" data-poli="${dk.poli_id}">${e(dk.nama)}</option>`).join('')}</select></div></div>
          <div class="grid g2"><div class="fld"><label for="kpj">Penjamin *</label><select id="kpj" name="penjamin">${PENJAMIN.map((g) => `<option${sel(ps.penjamin, g)}>${g}</option>`).join('')}</select></div><div class="fld"><label for="kkel">Keluhan utama</label><input id="kkel" type="text" name="keluhan" placeholder="cth. demam 3 hari"></div></div>
          <button class="btn">Daftarkan ke antrean</button>`)}</div>
        <div class="card"><h2>Riwayat kunjungan</h2><p class="sub">5 kunjungan terakhir</p>${riw.map((r) => `<div class="li-row"><span>${e(tgl(r.tanggal))}<span class="sm-line">${e((find('poli', r.poli_id) || {}).nama || r.jenis)}</span></span>${badge(r.status)}</div>`).join('') || '<p class="muted small">Belum pernah berkunjung.</p>'}</div></div>`;
    }
  }
  page('Pendaftaran Pasien', 'admisi', '', body);
};
ACTIONS.pasien_simpan = (raw) => {
  const id = +raw.id || 0, t = today();
  const d = { nama_lengkap: raw.nama_lengkap || '', nik: raw.nik || '', tanggal_lahir: raw.tanggal_lahir || '', jenis_kelamin: raw.jenis_kelamin, alamat: raw.alamat || '', no_hp: raw.no_hp || '', golongan_darah: raw.golongan_darah || '', alergi: raw.alergi || '', penjamin: raw.penjamin || 'Umum', no_penjamin: raw.no_penjamin || '' };
  const err = {};
  if (d.nama_lengkap.length < 3) err.nama_lengkap = 'Nama wajib diisi (min. 3 huruf).';
  if (!/^\d{16}$/.test(d.nik)) err.nik = 'NIK harus tepat 16 angka.';
  else if (one('pasien', (p) => p.nik === d.nik && p.id !== id)) err.nik = 'NIK ini sudah terdaftar sebagai pasien lama. Cari di menu Data Pasien.';
  if (!d.tanggal_lahir || d.tanggal_lahir > t) err.tanggal_lahir = 'Tanggal lahir tidak valid.';
  if (d.penjamin !== 'Umum' && !d.no_penjamin) err.no_penjamin = 'Nomor kartu BPJS/asuransi wajib diisi.';
  if (Object.keys(err).length) { FORM = { name: 'pasien', data: d, err }; return; }
  const row = { ...d, alamat: nul(d.alamat), no_hp: nul(d.no_hp), golongan_darah: nul(d.golongan_darah), alergi: nul(d.alergi), no_penjamin: d.penjamin === 'Umum' ? null : d.no_penjamin };
  if (id) { update('pasien', id, row); audit('Edit pasien', d.nama_lengkap); flash('ok', `Data pasien ${d.nama_lengkap} diperbarui.`); nav('admisi', { p: 'pasien', cari: d.nik }); return; }
  const rm = buatNomorRM(); const p = insert('pasien', { nomor_rm: rm, ...row, created_at: now() });
  audit('Pasien baru', `${rm} — ${d.nama_lengkap}`); flash('ok', `Pasien ${d.nama_lengkap} terdaftar dengan No. RM ${rm}. Lanjutkan dengan membuat kunjungan.`);
  nav('admisi', { p: 'kunjungan', pasien: p.id });
};
ACTIONS.pasien_hapus = (d) => {
  const ps = find('pasien', d.id); if (!ps) return;
  if (T('kunjungan').some((k) => k.pasien_id === ps.id)) return flash('err', 'Pasien yang sudah punya riwayat kunjungan tidak boleh dihapus (rekam medis wajib disimpan).');
  removeWhere('pasien', (p) => p.id === ps.id); removeWhere('appointment', (a) => a.pasien_id === ps.id); audit('Hapus pasien', ps.nama_lengkap); flash('ok', `Pasien ${ps.nama_lengkap} dihapus.`);
};
ACTIONS.kunjungan_buat = (d) => {
  const me = user(), t = today(), ps = find('pasien', d.pasien_id);
  const jenis = d.jenis === 'IGD' ? 'IGD' : 'Rawat Jalan';
  const poli = jenis === 'IGD' ? igdPoliId() : +d.poli_id || 0, dok = d.dokter_id ? +d.dokter_id : null;
  let err = '';
  if (!ps) err = 'Pasien tidak ditemukan.';
  else if (!find('poli', poli)) err = 'Pilih poli tujuan.';
  else if (jenis === 'Rawat Jalan' && !dok) err = 'Pilih dokter tujuan.';
  else if (dok && !one('pegawai', (p) => p.id === dok && p.role_id === roleId('dokter') && p.status === 'Aktif')) err = 'Dokter tidak valid.';
  else if (where('kunjungan', (k) => k.pasien_id === ps.id && k.poli_id === poli && k.tanggal === t && !['Selesai', 'Batal'].includes(k.status)).length) err = 'Pasien ini sudah ada di antrean poli yang sama hari ini.';
  if (err) return flash('err', err);
  const no = nomorAntrian(poli, t);
  insert('kunjungan', { pasien_id: ps.id, tanggal: t, waktu_daftar: now(), jenis, poli_id: poli, dokter_id: jenis === 'IGD' ? null : dok, no_antrian: no, penjamin: d.penjamin, keluhan: nul(d.keluhan), triase: null, status: 'Menunggu', disposisi: null, catatan_disposisi: null, dibuat_oleh: me.id });
  audit('Kunjungan baru', `${ps.nomor_rm} — ${jenis} antrean ${no}`); flash('ok', `Kunjungan ${ps.nama_lengkap} berhasil dibuat. Nomor antrean: ${no}.`); nav('admisi');
};
ACTIONS.kunjungan_batal = (d) => { const k = find('kunjungan', d.id); if (k && ['Menunggu', 'Dipanggil'].includes(k.status)) { update('kunjungan', k.id, { status: 'Batal' }); audit('Batal kunjungan', k.no_antrian); flash('ok', `Kunjungan ${k.no_antrian} dibatalkan.`); } };

/* ===================== JADWAL DOKTER & APPOINTMENT ===================== */
const URUT_HARI = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
function cekSlot(dok, tg, jm, kecuali = 0) {
  if (tg < today()) return 'Tanggal tidak boleh sebelum hari ini.';
  const j = one('jadwal_dokter', (x) => x.dokter_id == dok && x.hari === hariDari(tg));
  if (!j) return `Dokter tidak praktik pada hari ${hariDari(tg)}.`;
  if (jm < j.jam_mulai.slice(0, 5) || jm > j.jam_selesai.slice(0, 5)) return `Jam di luar jadwal praktik (${j.jam_mulai.slice(0, 5)}–${j.jam_selesai.slice(0, 5)}).`;
  if (where('appointment', (a) => a.dokter_id == dok && a.tanggal === tg && a.status !== 'Batal' && a.id != kecuali).length >= +j.kuota) return `Kuota dokter pada tanggal itu sudah penuh (${j.kuota} pasien).`;
  return '';
}
VIEWS.jadwal = () => {
  const p = Q('p', 'appointment'), t = today(), dokter = dokterList().filter((d) => d.poli_id && !+(find('poli', d.poli_id) || {}).is_igd);
  let body = tabs({ appointment: 'Daftar Appointment', booking: '+ Booking Baru', jadwal: 'Jadwal Praktik Dokter' }, p);
  if (p === 'appointment') {
    const tg = Q('tgl', t);
    const list = where('appointment', (a) => a.tanggal === tg).sort(by('jam'));
    body += `<div class="card flush"><div class="card-h"><div><h2>Appointment ${e(tglPanjang(tg + ' 00:00:00'))}</h2><p class="sub">${list.length} appointment</p></div>
      ${formAct('cari', hidden('_m', 'jadwal') + `<input type="date" name="tgl" value="${e(tg)}" aria-label="Tanggal"><button class="btn sm ghost">Tampilkan</button><a class="btn sm" ${L('jadwal', { p: 'booking' })}>${icon('plus')} Booking</a>`, 'class="inline-form"')}</div>
      <div class="tbl-wrap"><table class="t"><thead><tr><th>Jam</th><th>Pasien</th><th>Dokter / Poli</th><th>Catatan</th><th>Status</th><th>Aksi</th></tr></thead><tbody>
      ${list.map((a) => { const ps = find('pasien', a.pasien_id) || {}, dk = find('pegawai', a.dokter_id) || {}, po = find('poli', a.poli_id) || {}, k = find('kunjungan', a.kunjungan_id);
        return `<tr><td class="mono"><b>${e(a.jam.slice(0, 5))}</b></td><td><b>${e(ps.nama_lengkap)}</b><span class="sm-line mono">${e(ps.nomor_rm)}</span></td><td>${e(dk.nama)}<span class="sm-line">${e(po.nama)}</span></td><td class="small">${e(a.catatan || '-')}</td><td>${badge(a.status)}${k ? `<span class="sm-line">Antrean ${e(k.no_antrian)}</span>` : ''}</td>
        <td>${a.status === 'Terjadwal' ? `<div class="actions">${a.tanggal === t ? formAct('appt', hidden('id', a.id) + hidden('aksi', 'checkin') + '<button class="btn sm green">Check-in</button>') : ''}
          <details class="inline-det"><summary class="btn sm ghost">Reschedule</summary>${formAct('appt', hidden('id', a.id) + hidden('aksi', 'reschedule') + `<input type="date" name="tanggal" min="${t}" value="${e(a.tanggal)}" aria-label="Tanggal baru"><input type="time" name="jam" value="${e(a.jam.slice(0, 5))}" aria-label="Jam baru"><button class="btn sm">Simpan</button>`, 'class="inline-form" style="margin-top:6px"')}</details>
          ${formAct('appt', hidden('id', a.id) + hidden('aksi', 'batal') + '<button class="btn sm red">Batal</button>', confirmAttr('Batalkan appointment ' + ps.nama_lengkap + '?'))}</div>` : ''}</td></tr>`; }).join('') || emptyRow(6, 'Tidak ada appointment pada tanggal ini.')}</tbody></table></div></div>`;
  }
  if (p === 'booking') {
    body += `<div class="row-gap"><div class="card" style="flex:2"><h2>Booking appointment</h2><p class="sub">Sistem mengecek hari praktik, jam, dan kuota dokter secara otomatis.</p>
      ${formAct('booking', `<div class="grid g2"><div class="fld full"><label for="bp">Pasien *</label><select id="bp" name="pasien_id">${pasienOpts()}</select><div class="hint">Pasien belum ada? Daftarkan dulu di modul Pendaftaran Pasien.</div></div>
        <div class="fld full"><label for="bd">Dokter *</label><select id="bd" name="dokter_id"><option value="">— Pilih dokter —</option>${dokter.map((d) => `<option value="${d.id}">${e(d.nama)} — ${e(d.poli_nama)}</option>`).join('')}</select></div>
        <div class="fld"><label for="bt">Tanggal *</label><input id="bt" type="date" name="tanggal" min="${t}" value="${t}"></div><div class="fld"><label for="bj">Jam *</label><input id="bj" type="time" name="jam" value="09:00"></div>
        <div class="fld full"><label for="bc">Catatan / keluhan</label><input id="bc" type="text" name="catatan"></div></div><button class="btn">Buat appointment</button>`)}</div>
      <div class="card"><h2>Jadwal praktik</h2><p class="sub">Acuan saat memilih tanggal</p>${[...T('jadwal_dokter')].sort(by([(j) => (find('pegawai', j.dokter_id) || {}).nama, 1], [(j) => URUT_HARI.indexOf(j.hari), 1])).map((j) => `<div class="li-row"><span><b>${e((find('pegawai', j.dokter_id) || {}).nama)}</b><span class="sm-line">${e(j.hari)} ${e(j.jam_mulai.slice(0, 5))}–${e(j.jam_selesai.slice(0, 5))} · kuota ${j.kuota}</span></span></div>`).join('')}</div></div>`;
  }
  if (p === 'jadwal') {
    const edit = Q('edit') ? find('jadwal_dokter', Q('edit')) : null; const hi = HARI[new Date().getDay()];
    const list = [...T('jadwal_dokter')].sort(by([(j) => URUT_HARI.indexOf(j.hari), 1], 'jam_mulai'));
    body += `<div class="row-gap"><div class="card flush" style="flex:2"><div class="card-h"><h2>Jadwal praktik dokter</h2></div><div class="tbl-wrap"><table class="t"><thead><tr><th>Hari</th><th>Jam</th><th>Dokter</th><th>Poli</th><th>Kuota</th><th></th></tr></thead><tbody>
      ${list.map((j) => `<tr${j.hari === hi ? ' class="today-row"' : ''}><td><b>${e(j.hari)}</b>${j.hari === hi ? ' <span class="badge b-blue">hari ini</span>' : ''}</td><td class="mono">${e(j.jam_mulai.slice(0, 5))}–${e(j.jam_selesai.slice(0, 5))}</td><td>${e((find('pegawai', j.dokter_id) || {}).nama)}</td><td>${e((find('poli', j.poli_id) || {}).nama)}</td><td>${j.kuota}</td>
        <td><div class="actions"><a class="btn sm ghost" ${L('jadwal', { p: 'jadwal', edit: j.id })}>Edit</a>${formAct('jadwal_hapus', hidden('id', j.id) + '<button class="btn sm red">Hapus</button>', confirmAttr('Hapus jadwal ini?'))}</div></td></tr>`).join('') || emptyRow(6)}</tbody></table></div></div>
      <div class="card"><h2>${edit ? 'Edit jadwal' : 'Tambah jadwal'}</h2><p class="sub">Poli mengikuti poli dokter.</p>
        ${formAct('jadwal_simpan', hidden('id', edit ? edit.id : 0) + `<div class="fld"><label for="jd">Dokter</label><select id="jd" name="dokter_id">${dokter.map((d) => `<option value="${d.id}"${sel(edit && edit.dokter_id, d.id)}>${e(d.nama)}</option>`).join('')}</select></div>
          <div class="fld"><label for="jh">Hari</label><select id="jh" name="hari">${URUT_HARI.map((h) => `<option${sel(edit && edit.hari, h)}>${h}</option>`).join('')}</select></div>
          <div class="grid g2"><div class="fld"><label for="jm">Mulai</label><input id="jm" type="time" name="jam_mulai" value="${e(edit ? edit.jam_mulai.slice(0, 5) : '08:00')}"></div><div class="fld"><label for="js">Selesai</label><input id="js" type="time" name="jam_selesai" value="${e(edit ? edit.jam_selesai.slice(0, 5) : '12:00')}"></div></div>
          <div class="fld"><label for="jk">Kuota pasien</label><input id="jk" type="number" name="kuota" min="1" value="${edit ? edit.kuota : 20}"></div>
          <div class="actions"><button class="btn">Simpan</button>${edit ? `<a class="btn ghost" ${L('jadwal', { p: 'jadwal' })}>Batal</a>` : ''}</div>`)}</div></div>`;
  }
  page('Jadwal & Appointment', 'jadwal', '', body);
};
const tulisFront = () => { if (!isRole('pendaftaran')) { flash('err', 'Role Anda hanya dapat melihat data di halaman ini.'); return false; } return true; };
ACTIONS.jadwal_simpan = (d) => {
  if (!tulisFront()) return;
  const id = +d.id, dok = find('pegawai', d.dokter_id), kuota = +d.kuota;
  if (!dok || !dok.poli_id || !URUT_HARI.includes(d.hari) || !d.jam_mulai || !d.jam_selesai || d.jam_selesai <= d.jam_mulai || kuota < 1) return flash('err', 'Lengkapi jadwal: dokter, hari, jam selesai lebih besar dari jam mulai, kuota minimal 1.');
  if (one('jadwal_dokter', (j) => j.dokter_id === dok.id && j.hari === d.hari && j.id !== id)) return flash('err', `Dokter ini sudah punya jadwal di hari ${d.hari}. Edit jadwal yang ada.`);
  const row = { dokter_id: dok.id, poli_id: dok.poli_id, hari: d.hari, jam_mulai: d.jam_mulai, jam_selesai: d.jam_selesai, kuota };
  if (id) update('jadwal_dokter', id, row); else insert('jadwal_dokter', row);
  audit(id ? 'Edit jadwal dokter' : 'Tambah jadwal dokter', `${d.hari} ${d.jam_mulai}-${d.jam_selesai}`); flash('ok', 'Jadwal disimpan.'); nav('jadwal', { p: 'jadwal' });
};
ACTIONS.jadwal_hapus = (d) => { if (!tulisFront()) return; removeWhere('jadwal_dokter', (j) => j.id == d.id); audit('Hapus jadwal dokter', d.id); flash('ok', 'Jadwal dihapus.'); };
ACTIONS.booking = (d) => {
  if (!tulisFront()) return;
  const dok = find('pegawai', d.dokter_id);
  let err = !d.pasien_id || !dok || !d.tanggal || !d.jam ? 'Lengkapi pasien, dokter, tanggal, dan jam.' : cekSlot(dok.id, d.tanggal, d.jam);
  if (!err && one('appointment', (a) => a.pasien_id == d.pasien_id && a.dokter_id === dok.id && a.tanggal === d.tanggal && a.status !== 'Batal')) err = 'Pasien sudah punya appointment dengan dokter ini di tanggal tersebut.';
  if (err) return flash('err', err);
  insert('appointment', { pasien_id: +d.pasien_id, dokter_id: dok.id, poli_id: dok.poli_id, tanggal: d.tanggal, jam: d.jam, status: 'Terjadwal', catatan: nul(d.catatan), kunjungan_id: null, created_at: now() });
  audit('Booking appointment', `pasien #${d.pasien_id} ${d.tanggal} ${d.jam}`); flash('ok', `Appointment dibuat untuk ${tgl(d.tanggal)} pukul ${d.jam}.`); nav('jadwal', { tgl: d.tanggal });
};
ACTIONS.appt = (d) => {
  if (!tulisFront()) return;
  const a = find('appointment', d.id); if (!a || a.status !== 'Terjadwal') return;
  const ps = find('pasien', a.pasien_id) || {}, t = today();
  if (d.aksi === 'checkin') {
    if (a.tanggal !== t) return flash('err', 'Check-in hanya bisa pada tanggal appointment.');
    const no = nomorAntrian(a.poli_id, t);
    const k = insert('kunjungan', { pasien_id: a.pasien_id, tanggal: t, waktu_daftar: now(), jenis: 'Rawat Jalan', poli_id: a.poli_id, dokter_id: a.dokter_id, no_antrian: no, penjamin: ps.penjamin, keluhan: a.catatan, triase: null, status: 'Menunggu', disposisi: null, catatan_disposisi: null, dibuat_oleh: user().id });
    update('appointment', a.id, { status: 'Check-in', kunjungan_id: k.id }); audit('Check-in appointment', `${ps.nama_lengkap} → ${no}`);
    flash('ok', `${ps.nama_lengkap} sudah check-in dan masuk antrean poli dengan nomor ${no}.`);
  }
  if (d.aksi === 'reschedule') { const err = cekSlot(a.dokter_id, d.tanggal, d.jam, a.id); if (err) return flash('err', err); update('appointment', a.id, { tanggal: d.tanggal, jam: d.jam }); audit('Reschedule appointment', `${ps.nama_lengkap} → ${d.tanggal} ${d.jam}`); flash('ok', `Jadwal ${ps.nama_lengkap} dipindah ke ${tgl(d.tanggal)} ${d.jam}.`); }
  if (d.aksi === 'batal') { update('appointment', a.id, { status: 'Batal' }); audit('Batal appointment', ps.nama_lengkap); flash('ok', `Appointment ${ps.nama_lengkap} dibatalkan.`); }
};

/* ===================== IGD ===================== */
const TRIASE = { Merah: 'Gawat darurat — segera', Kuning: 'Darurat tidak gawat — ≤ 30 menit', Hijau: 'Tidak darurat — dapat menunggu', Hitam: 'Meninggal / DOA' };
const ORD_TRIASE = { Merah: 0, Kuning: 1, Hijau: 2 };
VIEWS.igd = () => {
  const p = Q('p', 'daftar'), t = today();
  let body = tabs({ daftar: 'Daftar Pasien IGD', baru: '+ Pasien IGD Masuk' }, p === 'detail' ? 'daftar' : p);
  if (p === 'daftar') {
    const list = where('kunjungan', (k) => k.jenis === 'IGD' && ((!['Selesai', 'Batal'].includes(k.status) && !ranapOf(k.id)) || k.tanggal === t)).map((k) => ({ ...kunjungan(k.id), ranap: !!ranapOf(k.id), soap: !!one('rekam_medis', (r) => r.kunjungan_id === k.id) }))
      .sort(by([(k) => (['Selesai', 'Batal'].includes(k.status) || k.ranap ? 1 : 0), 1], [(k) => ORD_TRIASE[k.triase] ?? 3, 1], 'id'));
    const aktif = list.filter((k) => !['Selesai', 'Batal'].includes(k.status) && !k.ranap); const ct = (tr) => aktif.filter((k) => k.triase === tr).length;
    body += `<div class="page-head"><div><h1>Pasien IGD</h1><p>Urut berdasarkan prioritas triase</p></div><a class="btn red" ${L('igd', { p: 'baru' })}>${icon('plus')} Pasien IGD masuk</a></div>
    <div class="stats">${stat('Pasien aktif', aktif.length)}${stat('Merah', ct('Merah'), 'red')}${stat('Kuning', ct('Kuning'), 'amber')}${stat('Hijau', ct('Hijau'), 'green')}</div>
    <div class="card flush"><div class="tbl-wrap"><table class="t"><thead><tr><th>Triase</th><th>No.</th><th>Pasien</th><th>Keluhan</th><th>Dokter</th><th>Status</th><th>Disposisi</th><th></th></tr></thead><tbody>
    ${list.map((a) => `<tr><td>${badge(a.triase || '-')}</td><td class="mono">${e(a.no_antrian)}</td><td><b>${e(a.nama_lengkap)}</b><span class="sm-line">${e(a.nomor_rm)} · ${umur(a.tanggal_lahir)}</span>${a.alergi ? '<span class="badge b-red">Alergi</span>' : ''}</td><td class="small">${e(a.keluhan || '-')}</td><td class="small">${e(a.dokter_nama || '-')}</td>
      <td>${a.ranap ? badge('Rawat Inap') : badge(a.status)}${a.soap ? '<span class="sm-line">SOAP ✓</span>' : ''}</td><td>${e(a.disposisi || '-')}</td><td><a class="btn sm" ${L('igd', { p: 'detail', k: a.id })}>Buka</a></td></tr>`).join('') || emptyRow(8, 'Tidak ada pasien IGD.')}</tbody></table></div></div>`;
  }
  if (p === 'baru') {
    body += `<div class="card" style="max-width:860px"><h2>Pasien IGD masuk</h2><p class="sub">Pendaftaran cepat. Status langsung <b>Diperiksa</b>.</p>
      ${formAct('igd_daftar', `<div class="fld"><label class="check"><input type="radio" name="mode" value="lama" checked> Pasien lama (sudah punya No. RM)</label><label class="check"><input type="radio" name="mode" value="baru"> Pasien baru</label></div>
        <div data-show-when="mode=lama" class="fld"><label for="ip">Pasien</label><select id="ip" name="pasien_id">${pasienOpts()}</select></div>
        <div data-show-when="mode=baru" class="grid g2"><div class="fld"><label for="in">Nama lengkap</label><input id="in" type="text" name="nama"></div><div class="fld"><label for="ik">NIK (16 angka)</label><input id="ik" type="text" name="nik" maxlength="16" inputmode="numeric"></div>
          <div class="fld"><label for="il">Tanggal lahir</label><input id="il" type="date" name="tanggal_lahir" max="${t}"></div><div class="fld"><label for="ij">Jenis kelamin</label><select id="ij" name="jenis_kelamin"><option value="L">Laki-laki</option><option value="P">Perempuan</option></select></div>
          <div class="fld full"><label for="ia">Alergi (bila diketahui)</label><input id="ia" type="text" name="alergi"></div></div>
        <div class="fld"><label for="ikel">Keluhan / mekanisme kejadian</label><input id="ikel" type="text" name="keluhan" placeholder="cth. jatuh dari motor, nyeri lengan kanan"></div>
        <div class="fld"><span class="lbl">Level triase *</span>${Object.entries(TRIASE).map(([tr, ket]) => `<label class="check"><input type="radio" name="triase" value="${tr}"${tr === 'Kuning' ? ' checked' : ''}> ${badge(tr)} ${e(ket)}</label>`).join('')}</div>
        <button class="btn red">Daftarkan ke IGD</button>`)}</div>`;
  }
  if (p === 'detail') {
    const k = kunjungan(Q('k'));
    if (!k || k.jenis !== 'IGD') body += '<div class="alert err">Kunjungan IGD tidak ditemukan.</div>';
    else {
      const obs = where('observasi', (o) => o.kunjungan_id === k.id).sort(by([(x) => x.id, -1]));
      const rm = one('rekam_medis', (r) => r.kunjungan_id === k.id), ri = ranapOf(k.id);
      const aktif = !['Selesai', 'Batal'].includes(k.status) && !ri;
      body += (ri ? `<div class="alert info">Pasien sudah dipindah ke rawat inap: ${e((find('kamar', ri.kamar_id) || {}).nama)} sejak ${e(tgl(ri.tanggal_masuk, true))} (${e(ri.status)}).</div>` : '') + pasienCard(k) + `
      <div class="actions" style="margin-bottom:14px">${can('emr') ? `<a class="btn" ${L('emr', { p: 'soap', k: k.id })}>Pemeriksaan dokter (SOAP)</a>` : ''}${can('cpoe') ? `<a class="btn ghost" ${L('cpoe', { k: k.id })}>Order penunjang & resep</a>` : ''}${can('keperawatan') ? `<a class="btn ghost" ${L('keperawatan', { k: k.id })}>Asuhan keperawatan</a>` : ''}</div>
      <div class="grid g2"><div class="card"><h3>Triase & tanda vital</h3><p class="sub">Triase saat ini: ${badge(k.triase || '-')}</p>
        ${aktif ? formAct('igd_triase', hidden('kid', k.id) + `<div class="fld"><label for="tr">Level triase</label><select id="tr" name="triase">${Object.entries(TRIASE).map(([tr, ket]) => `<option value="${tr}"${sel(k.triase, tr)}>${tr} — ${e(ket)}</option>`).join('')}</select></div>
          <div class="grid g3"><div class="fld"><label for="ttd">TD</label><input id="ttd" type="text" name="td" placeholder="120/80"></div><div class="fld"><label for="tn">Nadi</label><input id="tn" type="number" name="nadi"></div><div class="fld"><label for="ts">Suhu</label><input id="ts" type="number" step="0.1" name="suhu"></div>
          <div class="fld"><label for="trr">RR</label><input id="trr" type="number" name="rr"></div><div class="fld"><label for="tsp">SpO₂</label><input id="tsp" type="number" name="spo2"></div></div><button class="btn">Simpan triase</button>`) : ''}
        ${obs.map((o) => `<div class="li-row small"><span><b>${e(tgl(o.waktu, true))}</b> · ${e((find('pegawai', o.perawat_id) || {}).nama || '-')}<br>TD ${e(o.td || '-')} · N ${e(o.nadi ?? '-')} · S ${e(o.suhu ?? '-')}°C · RR ${e(o.rr ?? '-')} · SpO₂ ${e(o.spo2 ?? '-')}%</span></div>`).join('')}</div>
      <div class="card"><h3>Disposisi pasien</h3><p class="sub">Diagnosis kerja: ${rm ? `<b>${e(rm.icd10_kode || '')}</b> ${e(rm.assessment)}` : '<span style="color:var(--amber)">belum diisi dokter</span>'}</p>
        ${aktif ? formAct('igd_disposisi', hidden('kid', k.id) + `${[['Pulang', 'Pulang / rawat jalan'], ['Rawat Inap', 'Rawat inap (lanjut pilih kamar)'], ['Rujuk', 'Rujuk ke RS lain'], ['Meninggal', 'Meninggal']].map(([v, l]) => `<label class="check"><input type="radio" name="disposisi" value="${v}"${chk(v === k.disposisi)}> ${l}</label>`).join('')}
          <div class="fld" style="margin-top:8px"><label for="dc">Catatan (RS rujukan, instruksi pulang, dll)</label><input id="dc" type="text" name="catatan" value="${e(k.catatan_disposisi)}"></div><button class="btn">Simpan disposisi</button>`, confirmAttr('Simpan disposisi pasien?')) : `<div class="alert ok">Disposisi: <b>${e(k.disposisi || '-')}</b> ${e(k.catatan_disposisi || '')}</div>`}
        ${k.disposisi === 'Rawat Inap' && can('rawatinap') && !ri ? `<a class="btn" ${L('rawatinap', { p: 'admit', k: k.id })}>Lanjut pilih kamar rawat inap →</a>` : ''}</div></div>`;
    }
  }
  page('Instalasi Gawat Darurat', 'igd', '', body);
};
const tulis = (...rs) => { if (!isRole(...rs)) { flash('err', 'Role Anda hanya dapat melihat data di halaman ini.'); return false; } return true; };
ACTIONS.igd_daftar = (d) => {
  if (!tulis('dokter', 'perawat')) return;
  const me = user(), t = today(); let pid = +d.pasien_id || 0;
  if (d.mode === 'baru') {
    if ((d.nama || '').length < 3 || !/^\d{16}$/.test(d.nik || '') || !d.tanggal_lahir) { nav('igd', { p: 'baru' }); return flash('err', 'Pasien baru: isi nama, NIK 16 angka, tanggal lahir, dan jenis kelamin.'); }
    const ada = one('pasien', (p) => p.nik === d.nik);
    pid = ada ? ada.id : insert('pasien', { nomor_rm: buatNomorRM(), nik: d.nik, nama_lengkap: d.nama, tanggal_lahir: d.tanggal_lahir, jenis_kelamin: d.jenis_kelamin, alamat: null, no_hp: null, golongan_darah: null, alergi: nul(d.alergi), penjamin: 'Umum', no_penjamin: null, created_at: now() }).id;
  }
  const ps = find('pasien', pid);
  if (!ps || !TRIASE[d.triase]) { nav('igd', { p: 'baru' }); return flash('err', 'Pilih pasien dan level triase.'); }
  const poli = igdPoliId(), no = nomorAntrian(poli, t);
  const dok = me.role === 'dokter' ? me.id : (one('pegawai', (p) => p.role_id === roleId('dokter') && p.poli_id === poli && p.status === 'Aktif') || {}).id || null;
  const k = insert('kunjungan', { pasien_id: pid, tanggal: t, waktu_daftar: now(), jenis: 'IGD', poli_id: poli, dokter_id: dok, no_antrian: no, penjamin: ps.penjamin, keluhan: nul(d.keluhan), triase: d.triase, status: 'Diperiksa', disposisi: null, catatan_disposisi: null, dibuat_oleh: me.id });
  audit('Pasien IGD', `${ps.nomor_rm} · triase ${d.triase} · ${no}`); flash('ok', `Pasien ${ps.nama_lengkap} masuk IGD (${no}) dengan triase ${d.triase}.`); nav('igd', { p: 'detail', k: k.id });
};
ACTIONS.igd_triase = (d) => {
  if (!tulis('dokter', 'perawat')) return;
  if (!TRIASE[d.triase]) return; update('kunjungan', +d.kid, { triase: d.triase });
  if (d.td || d.nadi || d.suhu) insert('observasi', { kunjungan_id: +d.kid, perawat_id: user().id, waktu: now(), td: nul(d.td), nadi: num(d.nadi), suhu: num(d.suhu, true), rr: num(d.rr), spo2: num(d.spo2), diagnosa_keperawatan: 'Triase IGD: ' + d.triase, intervensi: null, evaluasi: null });
  audit('Triase IGD', `kunjungan #${d.kid} → ${d.triase}`); flash('ok', 'Triase diperbarui menjadi ' + d.triase + '.');
};
ACTIONS.igd_disposisi = (d) => {
  if (!tulis('dokter', 'perawat')) return;
  const kid = +d.kid;
  if (d.disposisi === 'Rawat Inap') { update('kunjungan', kid, { disposisi: 'Rawat Inap', catatan_disposisi: nul(d.catatan) }); nav('rawatinap', { p: 'admit', k: kid }); return; }
  if (['Pulang', 'Rujuk', 'Meninggal'].includes(d.disposisi)) { update('kunjungan', kid, { disposisi: d.disposisi, catatan_disposisi: nul(d.catatan), status: 'Selesai' }); audit('Disposisi IGD', `kunjungan #${kid} → ${d.disposisi}`); flash('ok', `Disposisi pasien: ${d.disposisi}. Kunjungan IGD selesai.`); nav('igd'); return; }
  flash('err', 'Pilih disposisi.');
};

/* ===================== RAWAT JALAN ===================== */
VIEWS.rawatjalan = () => {
  const me = user(), t = today(), dokter = me.role === 'dokter';
  const poliSel = Q('poli', dokter && me.poli_id ? String(me.poli_id) : ''), saya = Q('saya', dokter ? '1' : '0') === '1';
  const ord = { Diperiksa: 0, Dipanggil: 1, Menunggu: 2 };
  const list = where('kunjungan', (k) => k.tanggal === t && k.jenis === 'Rawat Jalan' && (!poliSel || k.poli_id == poliSel) && (!(saya && dokter) || k.dokter_id === me.id)).map((k) => ({ ...kunjungan(k.id), soap: !!one('rekam_medis', (r) => r.kunjungan_id === k.id) })).sort(by([(k) => ord[k.status] ?? 3, 1], 'id'));
  const aktif = list.filter((k) => k.status in ord), selesai = list.filter((k) => k.status === 'Selesai'); const c = (s) => list.filter((k) => k.status === s).length;
  page('Rawat Jalan', 'rawatjalan', '', `<div class="page-head"><div><h1>Antrean Poliklinik</h1><p>${e(tglPanjang())}${dokter && me.poli_nama ? ' · ' + e(me.poli_nama) : ''}</p></div>
    ${formAct('cari', hidden('_m', 'rawatjalan') + `<select name="poli" aria-label="Poli"><option value="">Semua poli</option>${poliList().map((po) => `<option value="${po.id}"${sel(poliSel, po.id)}>${e(po.nama)}</option>`).join('')}</select>${dokter ? `<select name="saya" aria-label="Filter dokter"><option value="1"${sel(saya ? 1 : 0, 1)}>Pasien saya</option><option value="0"${sel(saya ? 1 : 0, 0)}>Semua dokter</option></select>` : ''}<button class="btn sm ghost">Tampilkan</button>`, 'class="inline-form"')}</div>
  <div class="stats">${stat('Menunggu', c('Menunggu'), 'amber')}${stat('Dipanggil', c('Dipanggil'), 'blue')}${stat('Sedang diperiksa', c('Diperiksa'), 'violet')}${stat('Selesai', c('Selesai'), 'green')}</div>
  <div class="card flush"><div class="card-h"><h2>Pasien belum selesai</h2></div><div class="tbl-wrap"><table class="t"><thead><tr><th>No.</th><th>Pasien</th><th>Keluhan</th><th>Poli / Dokter</th><th>Status</th><th>Aksi</th></tr></thead><tbody>
  ${aktif.map((a) => `<tr><td class="mono"><b style="color:var(--primary);font-size:15px">${e(a.no_antrian)}</b></td><td><b>${e(a.nama_lengkap)}</b><span class="sm-line">${e(a.nomor_rm)} · ${jk(a.jenis_kelamin)} · ${umur(a.tanggal_lahir)}</span>${a.alergi ? `<span class="badge b-red">Alergi: ${e(a.alergi)}</span>` : ''}</td><td class="small">${e(a.keluhan || '-')}</td><td>${e(a.poli_nama)}<span class="sm-line">${e(a.dokter_nama || '-')}</span></td><td>${badge(a.status)}${a.soap ? '<span class="sm-line">SOAP draf tersimpan</span>' : ''}</td>
    <td><div class="actions">${a.status === 'Menunggu' ? formAct('rj', hidden('id', a.id) + hidden('aksi', 'panggil') + '<button class="btn sm ghost">Panggil</button>') : ''}${formAct('rj', hidden('id', a.id) + hidden('aksi', 'periksa') + `<button class="btn sm">${a.status === 'Diperiksa' ? 'Lanjutkan SOAP' : 'Periksa'}</button>`)}<a class="btn sm ghost" ${L('cpoe', { k: a.id })}>Order</a></div></td></tr>`).join('') || emptyRow(6, 'Tidak ada pasien menunggu.')}</tbody></table></div></div>
  ${selesai.length ? `<div class="card flush"><div class="card-h"><h2>Selesai diperiksa hari ini</h2></div><div class="tbl-wrap"><table class="t"><thead><tr><th>No.</th><th>Pasien</th><th>Dokter</th><th></th></tr></thead><tbody>${selesai.map((a) => `<tr><td class="mono">${e(a.no_antrian)}</td><td>${e(a.nama_lengkap)}<span class="sm-line">${e(a.nomor_rm)}</span></td><td>${e(a.dokter_nama || '-')}</td><td><a class="btn sm ghost" ${L('emr', { p: 'soap', k: a.id })}>Lihat SOAP</a></td></tr>`).join('')}</tbody></table></div></div>` : ''}`);
};
ACTIONS.rj = (d) => {
  if (!tulis('dokter', 'perawat')) return;
  const me = user(), k = find('kunjungan', d.id); if (!k) return;
  if (d.aksi === 'panggil' && k.status === 'Menunggu') { update('kunjungan', k.id, { status: 'Dipanggil' }); flash('ok', `Pasien antrean ${k.no_antrian} dipanggil.`); }
  if (d.aksi === 'periksa') { update('kunjungan', k.id, { status: k.status === 'Selesai' ? 'Selesai' : 'Diperiksa', dokter_id: k.dokter_id || (me.role === 'dokter' ? me.id : null) }); nav('emr', { p: 'soap', k: k.id }); }
};

/* ===================== RAWAT INAP ===================== */
const kamarTerisi = () => { const r = {}; where('rawat_inap', (x) => x.status === 'Dirawat').forEach((x) => (r[x.kamar_id] = (r[x.kamar_id] || 0) + 1)); return r; };
VIEWS.rawatinap = () => {
  const p = Q('p', 'dashboard'), me = user(), kamar = [...T('kamar')].sort(by('id')), isi = kamarTerisi();
  let body = tabs({ dashboard: 'Pasien Dirawat & Bed', admit: '+ Admisi Rawat Inap', riwayat: 'Riwayat Pulang' }, p === 'detail' ? 'dashboard' : p);
  const riRow = (r) => { const k = kunjungan(r.kunjungan_id) || {}; return { ...r, ...k, id: r.id, kid: r.kunjungan_id, kamar: (find('kamar', r.kamar_id) || {}).nama, kelas: (find('kamar', r.kamar_id) || {}).kelas, dpjp: (find('pegawai', r.dokter_id) || {}).nama }; };
  if (p === 'dashboard') {
    const list = where('rawat_inap', (r) => r.status === 'Dirawat').map(riRow).sort(by('kamar_id', 'tanggal_masuk'));
    const kap = sum(kamar, (k) => k.kapasitas), ter = Object.values(isi).reduce((a, b) => a + b, 0);
    body += `<div class="stats">${stat('Pasien dirawat', ter, 'violet')}${stat('Bed tersedia', kap - ter, 'green', `dari ${kap} bed`)}${stat('BOR saat ini', (kap ? Math.round((ter / kap) * 100) : 0) + '%', 'blue', 'Bed Occupancy Rate')}</div>
    <div class="beds" style="margin-bottom:18px">${kamar.map((km) => { const n = isi[km.id] || 0; return `<div class="bed${n >= km.kapasitas ? ' full' : ''}"><h4>${e(km.nama)}</h4><div class="muted small">${e(km.kelas)} · ${rupiah(km.tarif)}/hari</div><div class="meter"><i style="width:${km.kapasitas ? Math.round((n / km.kapasitas) * 100) : 0}%"></i></div><div class="small"><b>${n}</b> / ${km.kapasitas} terisi</div></div>`; }).join('')}</div>
    <div class="card flush"><div class="card-h"><h2>Pasien rawat inap aktif</h2></div><div class="tbl-wrap"><table class="t"><thead><tr><th>Pasien</th><th>Kamar</th><th>DPJP</th><th>Diagnosa masuk</th><th>Masuk</th><th>Lama</th><th></th></tr></thead><tbody>
    ${list.map((r) => `<tr><td><b>${e(r.nama_lengkap)}</b><span class="sm-line">${e(r.nomor_rm)} · ${umur(r.tanggal_lahir)}</span>${r.alergi ? '<span class="badge b-red">Alergi</span>' : ''}</td><td>${e(r.kamar)}<span class="sm-line">${e(r.kelas)}</span></td><td class="small">${e(r.dpjp || '-')}</td><td class="small">${e(r.diagnosa_masuk || '-')}</td><td class="small nowrap">${e(tgl(r.tanggal_masuk, true))}</td><td>${lamaRawat(r.tanggal_masuk)} hari</td><td><a class="btn sm" ${L('rawatinap', { p: 'detail', id: r.id })}>Kelola</a></td></tr>`).join('') || emptyRow(7, 'Tidak ada pasien dirawat.')}</tbody></table></div></div>`;
  }
  if (p === 'admit') {
    const k = Q('k') ? kunjungan(Q('k')) : null; const rm = k ? one('rekam_medis', (r) => r.kunjungan_id === k.id) : null;
    body += (k ? pasienCard(k) : '') + `<div class="card" style="max-width:820px"><h2>Admisi rawat inap</h2><p class="sub">${k ? `Lanjutan dari kunjungan ${e(k.jenis)} ${e(k.no_antrian)}.` : 'Pasien elektif (bukan dari IGD/poli hari ini).'}</p>
      ${formAct('ranap_admit', hidden('kid', k ? k.id : 0) + `${k ? '' : `<div class="fld"><label for="rp">Pasien *</label><select id="rp" name="pasien_id">${pasienOpts()}</select></div>`}
        <div class="grid g2"><div class="fld"><label for="rk">Kamar *</label><select id="rk" name="kamar_id"><option value="">— Pilih kamar —</option>${kamar.map((km) => { const s = km.kapasitas - (isi[km.id] || 0); return `<option value="${km.id}"${s <= 0 ? ' disabled' : ''}>${e(km.nama)} · ${e(km.kelas)} · sisa ${s} bed</option>`; }).join('')}</select></div>
          <div class="fld"><label for="rd">Dokter penanggung jawab (DPJP) *</label><select id="rd" name="dokter_id">${dokterList().map((dk) => `<option value="${dk.id}"${sel(k ? k.dokter_id : me.role === 'dokter' ? me.id : '', dk.id)}>${e(dk.nama)}</option>`).join('')}</select></div>
          <div class="fld full"><label for="rdx">Diagnosa masuk</label><input id="rdx" type="text" name="diagnosa" value="${e(rm ? `${rm.assessment}${rm.icd10_kode ? ' (' + rm.icd10_kode + ')' : ''}` : '')}"></div></div><button class="btn">Rawat inap-kan pasien</button>`)}</div>`;
  }
  if (p === 'detail') {
    const ri = find('rawat_inap', Q('id'));
    if (!ri) body += '<div class="alert err">Data tidak ditemukan.</div>';
    else {
      const k = kunjungan(ri.kunjungan_id), km = find('kamar', ri.kamar_id) || {};
      body += pasienCard(k) + `<div class="actions" style="margin-bottom:14px">${can('emr') ? `<a class="btn" ${L('emr', { p: 'soap', k: k.id })}>CPPT / SOAP dokter</a>` : ''}${can('cpoe') ? `<a class="btn ghost" ${L('cpoe', { k: k.id })}>Order & resep</a>` : ''}${can('keperawatan') ? `<a class="btn ghost" ${L('keperawatan', { k: k.id })}>Asuhan keperawatan</a>` : ''}</div>
      <div class="grid g2"><div class="card"><h3>Info rawat</h3><dl class="kv"><dt>Kamar</dt><dd>${e(km.nama)}</dd><dt>Masuk</dt><dd>${e(tgl(ri.tanggal_masuk, true))}</dd><dt>Lama rawat</dt><dd>${lamaRawat(ri.tanggal_masuk, ri.tanggal_keluar)} hari</dd><dt>Diagnosa masuk</dt><dd>${e(ri.diagnosa_masuk || '-')}</dd><dt>Status</dt><dd>${badge(ri.status)}</dd></dl>
        ${ri.status === 'Dirawat' ? formAct('ranap_pindah', hidden('id', ri.id) + `<select name="kamar_id" aria-label="Kamar tujuan">${kamar.filter((x) => x.id !== ri.kamar_id).map((x) => { const s = x.kapasitas - (isi[x.id] || 0); return `<option value="${x.id}"${s <= 0 ? ' disabled' : ''}>${e(x.nama)} (sisa ${s})</option>`; }).join('')}</select><button class="btn sm ghost">Pindah kamar</button>`, 'class="inline-form" style="margin-top:14px"') : ''}</div>
      <div class="card"><h3>Resume pulang</h3>${ri.status === 'Dirawat' ? formAct('ranap_pulang', hidden('id', ri.id) + '<div class="fld"><textarea name="resume" rows="6" aria-label="Resume pulang" placeholder="Diagnosis akhir, ringkasan perawatan, kondisi pulang, obat pulang, jadwal kontrol"></textarea></div><button class="btn green">Pulangkan pasien</button>', confirmAttr('Pulangkan pasien sekarang?')) : `<p style="white-space:pre-line">${e(ri.resume_pulang)}</p><p class="muted small">Pulang ${e(tgl(ri.tanggal_keluar, true))}</p>`}</div></div>`;
    }
  }
  if (p === 'riwayat') {
    const list = where('rawat_inap', (r) => r.status === 'Pulang').map(riRow).sort(by([(r) => r.tanggal_keluar, -1])).slice(0, 100);
    body += `<div class="card flush"><div class="tbl-wrap"><table class="t"><thead><tr><th>Pasien</th><th>Kamar</th><th>Masuk</th><th>Pulang</th><th>Lama</th><th></th></tr></thead><tbody>${list.map((r) => `<tr><td><b>${e(r.nama_lengkap)}</b><span class="sm-line">${e(r.nomor_rm)}</span></td><td>${e(r.kamar)}</td><td class="small">${e(tgl(r.tanggal_masuk, true))}</td><td class="small">${e(tgl(r.tanggal_keluar, true))}</td><td>${lamaRawat(r.tanggal_masuk, r.tanggal_keluar)} hari</td><td><a class="btn sm ghost" ${L('rawatinap', { p: 'detail', id: r.id })}>Resume</a></td></tr>`).join('') || emptyRow(6)}</tbody></table></div></div>`;
  }
  page('Rawat Inap', 'rawatinap', '', body);
};
ACTIONS.ranap_admit = (d) => {
  if (!tulis('dokter', 'perawat')) return;
  const me = user(), isi = kamarTerisi(), km = find('kamar', d.kamar_id), dok = +d.dokter_id; let kid = +d.kid, pid = +d.pasien_id || 0, err = '';
  const back = () => nav('rawatinap', { p: 'admit', k: kid || undefined });
  if (!km) err = 'Pilih kamar.'; else if ((isi[km.id] || 0) >= km.kapasitas) err = `Kamar ${km.nama} sudah penuh.`;
  else if (!one('pegawai', (p) => p.id === dok && p.role_id === roleId('dokter'))) err = 'Pilih dokter penanggung jawab (DPJP).';
  if (!err && kid) { const k = find('kunjungan', kid); if (!k) err = 'Kunjungan tidak ditemukan.'; else if (ranapOf(kid)) err = 'Kunjungan ini sudah dirawat inap.'; else pid = k.pasien_id; }
  if (!err && T('rawat_inap').some((r) => r.status === 'Dirawat' && (find('kunjungan', r.kunjungan_id) || {}).pasien_id === pid)) err = 'Pasien ini masih tercatat dirawat.';
  const ps = find('pasien', pid); if (!err && !ps) err = 'Pilih pasien.';
  if (err) { back(); return flash('err', err); }
  if (!kid) kid = insert('kunjungan', { pasien_id: pid, tanggal: today(), waktu_daftar: now(), jenis: 'Rawat Inap', poli_id: null, dokter_id: dok, no_antrian: 'RI-' + pad(T('rawat_inap').length + 1, 3), penjamin: ps.penjamin, keluhan: nul(d.diagnosa), triase: null, status: 'Diperiksa', disposisi: null, catatan_disposisi: null, dibuat_oleh: me.id }).id;
  else update('kunjungan', kid, { status: 'Diperiksa', disposisi: 'Rawat Inap' });
  insert('rawat_inap', { kunjungan_id: kid, kamar_id: km.id, dokter_id: dok, tanggal_masuk: now(), tanggal_keluar: null, status: 'Dirawat', diagnosa_masuk: nul(d.diagnosa), resume_pulang: null });
  audit('Admisi rawat inap', `${ps.nomor_rm} → ${km.nama}`); flash('ok', `${ps.nama_lengkap} dirawat di ${km.nama}.`); nav('rawatinap');
};
ACTIONS.ranap_pindah = (d) => {
  if (!tulis('dokter', 'perawat')) return;
  const ri = find('rawat_inap', d.id), km = find('kamar', d.kamar_id), isi = kamarTerisi(); if (!ri || ri.status !== 'Dirawat') return;
  if (!km || (isi[km.id] || 0) >= km.kapasitas) return flash('err', 'Kamar tujuan tidak tersedia.');
  update('rawat_inap', ri.id, { kamar_id: km.id }); audit('Pindah kamar', `rawat inap #${ri.id} → ${km.nama}`); flash('ok', `Pasien dipindah ke ${km.nama}.`);
};
ACTIONS.ranap_pulang = (d) => {
  if (!tulis('dokter', 'perawat')) return;
  const ri = find('rawat_inap', d.id); if (!ri || ri.status !== 'Dirawat') return;
  if (!d.resume) { nav('rawatinap', { p: 'detail', id: ri.id }); return flash('err', 'Isi resume pulang terlebih dahulu.'); }
  update('rawat_inap', ri.id, { status: 'Pulang', tanggal_keluar: now(), resume_pulang: d.resume }); update('kunjungan', ri.kunjungan_id, { status: 'Selesai' });
  const k = kunjungan(ri.kunjungan_id); audit('Pasien pulang', k.nama_lengkap); flash('ok', `${k.nama_lengkap} dipulangkan. Tagihan siap diproses kasir.`); nav('rawatinap');
};

/* ===================== REKAM MEDIS / MEDICAL RECORD (EMR) ===================== */
const VITAL = [['td_sistolik', 'TD sistolik', 'mmHg', 1, 40, 300], ['td_diastolik', 'TD diastolik', 'mmHg', 1, 20, 200], ['nadi', 'Nadi', 'x/menit', 1, 20, 250], ['rr', 'Napas (RR)', 'x/menit', 1, 5, 80], ['suhu', 'Suhu', '°C', 0.1, 30, 45], ['spo2', 'SpO₂', '%', 1, 30, 100], ['berat_badan', 'Berat badan', 'kg', 0.1, 0.5, 400], ['tinggi_badan', 'Tinggi badan', 'cm', 0.1, 30, 250]];
const pemeriksaanOf = (o) => find('pemeriksaan', o.pemeriksaan_id) || {};
function hasilHtml(o) {
  const pm = pemeriksaanOf(o);
  if (o.status !== 'Selesai') return `<span class="muted small">${o.status === 'Batal' ? 'Dibatalkan' : 'Menunggu hasil'}</span>`;
  return (o.nilai != null ? `<b>${e(o.nilai)}</b> ${e(pm.satuan || '')} ` : '') + badge(o.flag) + (pm.nilai_rujukan && o.nilai != null ? `<span class="sm-line">Rujukan ${e(pm.nilai_rujukan)}</span>` : '') + (o.hasil ? `<span class="sm-line pre">${e(o.hasil)}</span>` : '');
}
VIEWS.emr = () => {
  const me = user(), p = Q('p', 'antrian'), t = today(), tulisRM = isRole('dokter');
  let body = tabs({ antrian: 'Antrean & Akses RME', riwayat: 'Medical Record Pasien' }, ['riwayat', 'pasien'].includes(p) ? 'riwayat' : 'antrian');
  if (p === 'antrian') {
    const saya = me.role === 'dokter' && Q('saya', '1') === '1';
    const list = T('kunjungan').filter((k) => ((k.tanggal === t && k.status !== 'Batal') || (ranapOf(k.id) || {}).status === 'Dirawat') && (!saya || k.dokter_id === me.id))
      .map((k) => ({ ...kunjungan(k.id), rm: one('rekam_medis', (r) => r.kunjungan_id === k.id), ranap: (ranapOf(k.id) || {}).status === 'Dirawat' }))
      .sort(by([(k) => (['Menunggu', 'Dipanggil', 'Diperiksa'].includes(k.status) ? 0 : 1), 1], 'id'));
    body += `<div class="page-head"><div><h1>Antrean Pasien — Rekam Medis</h1><p>${e(tglPanjang())} · kunjungan hari ini + pasien rawat inap aktif</p></div>
      ${me.role === 'dokter' ? formAct('cari', hidden('_m', 'emr') + `<select name="saya" data-autosubmit aria-label="Filter pasien"><option value="1"${sel(saya ? 1 : 0, 1)}>Pasien saya</option><option value="0"${sel(saya ? 1 : 0, 0)}>Semua pasien</option></select>`, 'class="inline-form"') : ''}</div>
    ${!tulisRM ? `<div class="alert info">Role ${e(me.role_nama)} dapat membaca rekam medis. Pengisian SOAP dilakukan oleh dokter.</div>` : ''}
    <div class="card flush"><div class="tbl-wrap"><table class="t"><thead><tr><th>No.</th><th>Pasien</th><th>Unit</th><th>Dokter</th><th>Status</th><th>Diagnosis</th><th></th></tr></thead><tbody>
    ${list.map((a) => `<tr><td class="mono"><b style="color:var(--primary)">${e(a.no_antrian)}</b></td><td><b>${e(a.nama_lengkap)}</b><span class="sm-line">${e(a.nomor_rm)}</span>${a.alergi ? '<span class="badge b-red">Alergi</span>' : ''}</td><td>${badge(a.ranap ? 'Rawat Inap' : a.jenis)}<span class="sm-line">${e(a.poli_nama || '')}</span></td><td class="small">${e(a.dokter_nama || '-')}</td><td>${badge(a.status)}</td>
      <td>${a.rm ? `<span class="badge b-green">SOAP ✓</span> <span class="mono small">${e(a.rm.icd10_kode || '')}</span>` : '<span class="muted small">Belum ada</span>'}</td>
      <td><div class="actions"><a class="btn sm${a.rm ? ' ghost' : ''}" ${L('emr', { p: 'soap', k: a.id })}>${tulisRM ? (a.rm ? 'Buka SOAP' : 'Isi SOAP') : 'Lihat'}</a><a class="btn sm ghost" ${L('emr', { p: 'pasien', id: a.pasien_id })}>Rekam medis</a></div></td></tr>`).join('') || emptyRow(7, 'Belum ada pasien hari ini.')}</tbody></table></div></div>`;
  }
  if (p === 'soap') {
    const k = kunjungan(Q('k'));
    if (!k) body += '<div class="alert err">Kunjungan tidak ditemukan.</div>';
    else {
      const rm = one('rekam_medis', (r) => r.kunjungan_id === k.id) || {};
      const f = FORM && FORM.name === 'soap' ? FORM.data : rm; FORM = null;
      const obs = where('observasi', (o) => o.kunjungan_id === k.id).sort(by([(o) => o.id, -1]))[0];
      const order = where('order_penunjang', (o) => o.kunjungan_id === k.id).sort(by('id'));
      const resep = where('resep', (r) => r.kunjungan_id === k.id);
      const riw = T('kunjungan').filter((x) => x.pasien_id === k.pasien_id && x.id !== k.id).map((x) => ({ k: x, r: one('rekam_medis', (r) => r.kunjungan_id === x.id) })).filter((x) => x.r).sort(by([(x) => x.k.tanggal, -1], [(x) => x.k.id, -1])).slice(0, 10);
      const ro = tulisRM ? '' : ' readonly';
      const icdAll = [...T('icd10')].sort(by('kode'));
      body += pasienCard(k) + `<div class="actions" style="margin-bottom:12px"><a class="btn sm ghost" ${L('emr', { p: 'pasien', id: k.pasien_id })}>📁 Buka medical record lengkap (${e(k.nomor_rm)})</a></div>
      ${k.keluhan ? `<div class="alert info"><b>Keluhan saat daftar:</b> ${e(k.keluhan)}</div>` : ''}
      ${formAct('soap', hidden('kid', k.id) + `<div class="row-gap"><div class="card" style="flex:1;min-width:260px"><h3>Tanda-tanda vital</h3><p class="sub">Kosongkan bila belum diukur (tersimpan NULL, bukan 0).${obs ? ` Observasi perawat terakhir: TD ${e(obs.td || '-')}, N ${e(obs.nadi ?? '-')}, S ${e(obs.suhu ?? '-')}°C.` : ''}</p>
        <div class="grid g2">${VITAL.map(([n, l, s, st]) => `<div class="fld"><label for="v_${n}">${l} <span class="muted">(${s})</span></label><input id="v_${n}" type="number" step="${st}" name="${n}" value="${e(f[n] ?? '')}"${ro}></div>`).join('')}</div></div>
        <div class="card" style="flex:2"><h3>Catatan SOAP</h3><p class="sub">${rm.id ? `Terakhir disimpan ${e(tgl(rm.updated_at || rm.created_at, true))} oleh ${e((find('pegawai', rm.dokter_id) || {}).nama || '-')}` : 'Belum ada catatan untuk kunjungan ini.'}</p>
          <div class="fld"><label class="soap-lbl" for="s_s"><i>S</i> Subjektif — keluhan menurut pasien</label><textarea id="s_s" name="subjektif" rows="3"${ro} placeholder="Keluhan utama, onset, riwayat penyakit sekarang/dahulu, alergi">${e(f.subjektif || '')}</textarea></div>
          <div class="fld"><label class="soap-lbl" for="s_o"><i>O</i> Objektif — hasil pemeriksaan</label><textarea id="s_o" name="objektif" rows="3"${ro} placeholder="Kesadaran, status generalis & lokalis, hasil penunjang">${e(f.objektif || '')}</textarea></div>
          <div class="fld"><label class="soap-lbl" for="assessment"><i>A</i> Assessment — diagnosis kerja *</label><textarea id="assessment" name="assessment" rows="2"${ro} placeholder="cth. I10 — Hipertensi esensial">${e(f.assessment || '')}</textarea></div>
          <div class="fld"><label for="icd10_kode">Kode ICD-10 utama</label><select id="icd10_kode" name="icd10_kode"${tulisRM ? '' : ' disabled'}><option value="">— Pilih kode ICD-10 —</option>${icdAll.map((i) => `<option value="${e(i.kode)}"${sel(f.icd10_kode, i.kode)}>${e(i.kode + ' — ' + i.nama)}</option>`).join('')}</select>
            ${tulisRM ? `<div class="icd-chips" style="margin-top:8px">${icdAll.slice(0, 25).map((i) => `<button type="button" data-icd="${e(i.kode)}" data-nama="${e(i.nama)}" title="${e(i.nama)}">${e(i.kode)}</button>`).join('')}</div>` : ''}</div>
          <div class="fld"><label class="soap-lbl" for="s_p"><i>P</i> Plan — rencana</label><textarea id="s_p" name="plan" rows="3"${ro} placeholder="Terapi, pemeriksaan lanjutan, edukasi, jadwal kontrol">${e(f.plan || '')}</textarea></div>
          ${tulisRM ? `<div class="actions"><button class="btn green" name="aksi" value="simpan">💾 Simpan SOAP</button>${k.jenis === 'Rawat Jalan' && k.status !== 'Selesai' ? '<button class="btn" name="aksi" value="selesai">Simpan & Selesai</button>' : ''}${can('cpoe') ? `<a class="btn ghost" ${L('cpoe', { k: k.id })}>Order lab / radiologi / resep →</a>` : ''}${k.jenis === 'IGD' && can('igd') ? `<a class="btn ghost" ${L('igd', { p: 'detail', k: k.id })}>Disposisi IGD →</a>` : ''}</div>` : ''}</div></div>`)}
      <div class="row-gap"><div class="card flush"><div class="card-h"><h3>Hasil penunjang kunjungan ini</h3></div><div class="tbl-wrap"><table class="t"><thead><tr><th>Pemeriksaan</th><th>Status</th><th>Hasil</th></tr></thead><tbody>
        ${order.map((o) => `<tr><td>${badge(o.kategori)} ${e(pemeriksaanOf(o).nama)}${o.prioritas === 'Cito' ? ' ' + badge('Cito') : ''}</td><td>${badge(o.status)}</td><td>${hasilHtml(o)}</td></tr>`).join('') || emptyRow(3, 'Belum ada order penunjang.')}</tbody></table></div></div>
        <div class="card"><h3>Resep</h3>${resep.map((r) => `<div class="li-row"><span>Resep #${r.id} · ${where('resep_item', (i) => i.resep_id === r.id).length} obat</span>${badge(r.status)}</div>`).join('') || '<p class="muted small">Belum ada resep.</p>'}</div></div>
      <div class="card"><h3>Riwayat kunjungan sebelumnya</h3><p class="sub">Diagnosis dan terapi sebelumnya sebagai bahan pertimbangan (10 terakhir).</p>
        ${riw.map(({ k: x, r }) => `<details class="hist"><summary>${e(tgl(x.tanggal))} ${badge(x.jenis)} <span class="muted">${e((find('poli', x.poli_id) || {}).nama || '')} · ${e((find('pegawai', r.dokter_id) || {}).nama || '-')}</span> <span class="mono small">${e(r.icd10_kode || '')}</span></summary>
          <div class="hb"><p><b>S:</b> ${e(r.subjektif || '-')}</p><p><b>A:</b> ${e(r.assessment || '-')}</p><p><b>P:</b> ${e(r.plan || '-')}</p><p class="muted small">TD ${e(r.td_sistolik ?? '-')}/${e(r.td_diastolik ?? '-')} mmHg · Suhu ${e(r.suhu ?? '-')}°C</p></div></details>`).join('') || '<p class="muted small">Belum ada riwayat kunjungan lain.</p>'}</div>`;
    }
  }
  if (p === 'riwayat') {
    const cari = Q('cari');
    const withN = (ps) => { const ks = where('kunjungan', (k) => k.pasien_id === ps.id && k.status !== 'Batal'); return { ...ps, n: ks.length, terakhir: ks.map((k) => k.tanggal).sort().pop(), lastId: Math.max(0, ...ks.map((k) => k.id)) }; };
    const hasil = cari ? cariPasien(cari, 30).map(withN) : T('pasien').map(withN).filter((x) => x.n).sort(by([(x) => x.lastId, -1])).slice(0, 15);
    body += `<div class="card flush"><div class="card-h"><div><h2>Medical Record — Rekam Medis Pasien</h2><p class="sub">Satu pasien = satu nomor rekam medis (No. RM) berisi seluruh riwayat pelayanan.${cari ? '' : ' Menampilkan 15 pasien dengan kunjungan terbaru.'}</p></div>
      ${formAct('cari', hidden('_m', 'emr') + hidden('p', 'riwayat') + `<input type="search" name="cari" value="${e(cari)}" placeholder="Nama / No. RM / NIK" aria-label="Cari pasien"><button class="btn sm">${icon('search')} Cari</button>`, 'class="inline-form"')}</div>
      <div class="tbl-wrap"><table class="t"><thead><tr><th>No. RM</th><th>Nama pasien</th><th>NIK</th><th>Usia</th><th>Kunjungan</th><th>Terakhir</th><th></th></tr></thead><tbody>
      ${hasil.map((r) => `<tr><td class="mono"><b>${e(r.nomor_rm)}</b></td><td><b>${e(r.nama_lengkap)}</b>${r.alergi ? ' <span class="badge b-red">Alergi</span>' : ''}</td><td class="mono small">${e(r.nik)}</td><td>${umur(r.tanggal_lahir)}</td><td>${r.n}x</td><td class="small">${e(tgl(r.terakhir))}</td><td><a class="btn sm" ${L('emr', { p: 'pasien', id: r.id })}>Buka rekam medis</a></td></tr>`).join('') || emptyRow(7, 'Pasien tidak ditemukan.')}</tbody></table></div></div>`;
  }
  if (p === 'pasien') {
    const ps = find('pasien', Q('id'));
    if (!ps) body += '<div class="alert err">Pasien tidak ditemukan.</div>';
    else {
      if (!NAV.q._logged) { audit('Akses rekam medis', `${ps.nomor_rm} — ${ps.nama_lengkap}`); NAV.q._logged = 1; persist(); }
      const kun = where('kunjungan', (k) => k.pasien_id === ps.id && k.status !== 'Batal').sort(by([(k) => k.tanggal, -1], [(k) => k.id, -1])).map((k) => ({ ...kunjungan(k.id), rm: one('rekam_medis', (r) => r.kunjungan_id === k.id) }));
      const masalah = {};
      [...kun].reverse().forEach((k) => { if (k.rm && k.rm.icd10_kode) { const m = (masalah[k.rm.icd10_kode] = masalah[k.rm.icd10_kode] || { nama: (one('icd10', (i) => i.kode === k.rm.icd10_kode) || {}).nama, n: 0 }); m.n++; m.terakhir = k.tanggal; } });
      const vital = kun.find((k) => k.rm && (k.rm.td_sistolik || k.rm.suhu || k.rm.nadi));
      body += `<div class="card"><div class="card-h" style="margin-bottom:6px"><div><div class="muted small" style="font-weight:700;letter-spacing:.06em">MEDICAL RECORD · ${RS_NAME}</div><h2 style="font-size:20px;margin-top:4px">${e(ps.nama_lengkap)}</h2></div>
        <div style="text-align:right"><div class="muted small">Nomor Rekam Medis</div><div class="mono" style="font-size:20px;font-weight:700;color:var(--primary)">${e(ps.nomor_rm)}</div></div></div>
        ${ps.alergi ? `<div class="allergy">⚠ ALERGI: ${e(ps.alergi)}</div>` : ''}
        <div class="grid g2"><dl class="kv"><dt>NIK</dt><dd class="mono">${e(ps.nik)}</dd><dt>Tanggal lahir</dt><dd>${e(tgl(ps.tanggal_lahir))} (${umur(ps.tanggal_lahir)})</dd><dt>Jenis kelamin</dt><dd>${jk(ps.jenis_kelamin)}</dd><dt>Golongan darah</dt><dd>${e(ps.golongan_darah || '-')}</dd></dl>
          <dl class="kv"><dt>Alamat</dt><dd>${e(ps.alamat || '-')}</dd><dt>No. HP</dt><dd>${e(ps.no_hp || '-')}</dd><dt>Penjamin</dt><dd>${badge(ps.penjamin)} ${e(ps.no_penjamin || '')}</dd><dt>Kunjungan</dt><dd>${kun.length} kali</dd></dl></div></div>
      <div class="grid g2"><div class="card"><h3>Daftar masalah / diagnosis</h3><p class="sub">Semua diagnosis ICD-10 yang pernah ditegakkan</p>
        ${Object.entries(masalah).map(([kd, m]) => `<div class="li-row"><span><b class="mono">${e(kd)}</b> ${e(m.nama)}</span><span class="muted small nowrap">${m.n}x · terakhir ${e(tgl(m.terakhir))}</span></div>`).join('') || '<p class="muted small">Belum ada diagnosis.</p>'}</div>
        <div class="card"><h3>Tanda vital terakhir</h3>${vital ? `<p class="sub">${e(tgl(vital.tanggal))} · ${e(vital.poli_nama || '')}</p><div class="grid g3 vital-grid">${[['TD', `${vital.rm.td_sistolik ?? '-'}/${vital.rm.td_diastolik ?? '-'}`, 'mmHg'], ['Nadi', vital.rm.nadi, 'x/mnt'], ['Suhu', vital.rm.suhu, '°C'], ['RR', vital.rm.rr, 'x/mnt'], ['SpO₂', vital.rm.spo2, '%'], ['BB', vital.rm.berat_badan, 'kg']].map(([l, v, s]) => `<div class="stat sm"><div class="l">${l}</div><div class="v">${e(v ?? '-')} <small class="muted">${s}</small></div></div>`).join('')}</div>` : '<p class="muted small">Belum ada data tanda vital.</p>'}</div></div>
      <h2 style="font-size:16px;margin:8px 0 12px">Riwayat pelayanan (terbaru di atas)</h2>
      ${kun.map((k, i) => { const r = k.rm, ord = where('order_penunjang', (o) => o.kunjungan_id === k.id && o.status !== 'Batal'), obat = where('resep', (x) => x.kunjungan_id === k.id && x.status !== 'Ditolak').flatMap((x) => where('resep_item', (it) => it.resep_id === x.id).map((it) => ({ ...it, st: x.status, o: find('obat', it.obat_id) || {} }))), tin = where('tindakan', (x) => x.kunjungan_id === k.id), obs = where('observasi', (x) => x.kunjungan_id === k.id).sort(by('waktu')), ri = ranapOf(k.id);
        return `<details class="hist card" style="padding:0"${i === 0 ? ' open' : ''}><summary>${e(tgl(k.tanggal))} ${badge(k.jenis)} ${badge(k.status)} <span class="muted">${e(k.poli_nama || '-')} · ${e(k.dokter_nama || '-')}</span> ${r && r.icd10_kode ? `<span class="mono small"><b>${e(r.icd10_kode)}</b> ${e((one('icd10', (x) => x.kode === r.icd10_kode) || {}).nama || '')}</span>` : ''}</summary><div class="hb">
          ${k.keluhan ? `<p class="muted small">Keluhan saat daftar: ${e(k.keluhan)}${k.triase ? ' · Triase ' + e(k.triase) : ''}</p>` : ''}
          ${r ? `<p><b>S:</b> ${e(r.subjektif || '-')}</p><p><b>O:</b> ${e(r.objektif || '-')}</p><p><b>A:</b> ${e(r.assessment)}</p><p><b>P:</b> ${e(r.plan || '-')}</p><p class="muted small">TD ${e(r.td_sistolik ?? '-')}/${e(r.td_diastolik ?? '-')} · Nadi ${e(r.nadi ?? '-')} · RR ${e(r.rr ?? '-')} · Suhu ${e(r.suhu ?? '-')}°C · SpO₂ ${e(r.spo2 ?? '-')}% · BB ${e(r.berat_badan ?? '-')} kg · TB ${e(r.tinggi_badan ?? '-')} cm</p>` : '<p class="muted">Belum ada catatan SOAP dokter.</p>'}
          ${ord.length ? `<p class="h-sub"><b>Hasil penunjang</b></p><ul>${ord.map((o) => `<li>${e(o.kategori)} — ${e(pemeriksaanOf(o).nama)}: ${hasilHtml(o)}</li>`).join('')}</ul>` : ''}
          ${obat.length ? `<p class="h-sub"><b>Obat</b></p><ul>${obat.map((x) => `<li>${e(x.o.nama)} × ${x.jumlah} ${e(x.o.satuan)} — ${e(x.aturan_pakai)} <span class="muted small">(${e(x.st)})</span></li>`).join('')}</ul>` : ''}
          ${tin.length ? `<p class="h-sub"><b>Tindakan:</b> ${e(tin.map((x) => (find('tindakan_master', x.tindakan_id) || {}).nama + (x.jumlah > 1 ? ' ×' + x.jumlah : '')).join(', '))}</p>` : ''}
          ${obs.length ? `<p class="h-sub"><b>Catatan keperawatan</b> (${obs.length})</p><ul>${obs.map((o) => `<li class="small">${e(tgl(o.waktu, true))} — TD ${e(o.td || '-')}, S ${e(o.suhu ?? '-')}°C${o.diagnosa_keperawatan ? ' · ' + e(o.diagnosa_keperawatan) : ''}${o.intervensi ? ' · ' + e(o.intervensi) : ''} <span class="muted">(${e((find('pegawai', o.perawat_id) || {}).nama || '-')})</span></li>`).join('')}</ul>` : ''}
          ${ri ? `<p class="h-sub"><b>Rawat inap:</b> ${e((find('kamar', ri.kamar_id) || {}).nama)}, ${e(tgl(ri.tanggal_masuk, true))} – ${ri.tanggal_keluar ? e(tgl(ri.tanggal_keluar, true)) : 'masih dirawat'} (${lamaRawat(ri.tanggal_masuk, ri.tanggal_keluar)} hari)${ri.resume_pulang ? `<span class="sm-line pre">Resume: ${e(ri.resume_pulang)}</span>` : ''}</p>` : ''}
          ${k.disposisi ? `<p class="small"><b>Disposisi:</b> ${e(k.disposisi)} ${e(k.catatan_disposisi || '')}</p>` : ''}
          <a class="btn sm ghost" ${L('emr', { p: 'soap', k: k.id })}>${tulisRM ? 'Buka / ubah SOAP' : 'Buka kunjungan'}</a></div></details>`; }).join('') || '<div class="card"><p class="muted" style="margin:0">Belum ada kunjungan.</p></div>'}
      <p class="muted small">Diakses oleh ${e(me.nama)} · ${e(tgl(now(), true))}. Setiap akses rekam medis tercatat di log aktivitas.</p>`;
    }
  }
  page('Rekam Medis / Medical Record', 'emr', '', body);
};
ACTIONS.soap = (d) => {
  if (!tulis('dokter')) return;
  const me = user(), k = kunjungan(d.kid); if (!k || k.status === 'Batal') return flash('err', 'Kunjungan tidak ditemukan.');
  const v = {}; const err = [];
  for (const [n, l, , st, lo, hi] of VITAL) { v[n] = num(d[n], st < 1); if (v[n] != null && (v[n] < lo || v[n] > hi)) err.push(`${l} harus ${lo}–${hi}`); }
  if (!d.assessment) err.push('Assessment (diagnosis) wajib diisi');
  if (d.icd10_kode && !one('icd10', (i) => i.kode === d.icd10_kode)) err.push('Kode ICD-10 tidak dikenal');
  if (err.length) { FORM = { name: 'soap', data: d }; return flash('err', 'SOAP belum disimpan: ' + err.join('; ') + '.'); }
  const data = { dokter_id: me.role === 'dokter' ? me.id : k.dokter_id, subjektif: d.subjektif, objektif: d.objektif, assessment: d.assessment, icd10_kode: nul(d.icd10_kode), plan: d.plan, ...v };
  const ada = one('rekam_medis', (r) => r.kunjungan_id === k.id);
  if (ada) update('rekam_medis', ada.id, { ...data, updated_at: now() }); else insert('rekam_medis', { kunjungan_id: k.id, ...data, created_at: now(), updated_at: null });
  const selesai = d.aksi === 'selesai' && k.jenis === 'Rawat Jalan';
  update('kunjungan', k.id, { status: selesai || k.status === 'Selesai' ? 'Selesai' : 'Diperiksa', dokter_id: k.dokter_id || data.dokter_id, ...(selesai ? { disposisi: k.disposisi || 'Pulang' } : {}) });
  audit('Simpan SOAP', `${k.nomor_rm} · ${d.icd10_kode || '-'}${selesai ? ' · kunjungan selesai' : ''}`);
  flash('ok', selesai ? 'Rekam medis tersimpan dan kunjungan ditutup (Selesai). Pasien lanjut ke farmasi/kasir.' : 'SOAP tersimpan.');
  if (selesai) nav(can('rawatjalan') ? 'rawatjalan' : 'emr');
};

/* ===================== CPOE / ORDER ===================== */
VIEWS.cpoe = () => {
  const t = today(), kid = Q('k');
  if (!kid) {
    const list = T('kunjungan').filter((k) => (k.tanggal === t && ['Menunggu', 'Dipanggil', 'Diperiksa'].includes(k.status)) || (ranapOf(k.id) || {}).status === 'Dirawat').sort(by('id')).map((k) => kunjungan(k.id));
    page('CPOE / Order', 'cpoe', '', `<div class="page-head"><div><h1>CPOE — Pilih Pasien</h1><p>Pasien yang sedang dilayani hari ini dan pasien rawat inap</p></div></div>
      <div class="card flush"><div class="tbl-wrap"><table class="t"><thead><tr><th>No.</th><th>Pasien</th><th>Unit / Dokter</th><th>Status</th><th>Order</th><th></th></tr></thead><tbody>
      ${list.map((a) => `<tr><td class="mono"><b>${e(a.no_antrian)}</b></td><td><b>${e(a.nama_lengkap)}</b><span class="sm-line">${e(a.nomor_rm)}</span></td><td>${badge(a.jenis)} ${e(a.poli_nama || '')}<span class="sm-line">${e(a.dokter_nama || '-')}</span></td><td>${badge(a.status)}</td><td class="small">${where('order_penunjang', (o) => o.kunjungan_id === a.id && o.status !== 'Batal').length} penunjang · ${where('resep', (r) => r.kunjungan_id === a.id && r.status !== 'Ditolak').length} resep</td><td><a class="btn sm" ${L('cpoe', { k: a.id })}>Buat order</a></td></tr>`).join('') || emptyRow(6, 'Tidak ada pasien aktif.')}</tbody></table></div></div>`);
    return;
  }
  const k = kunjungan(kid); if (!k) { page('CPOE / Order', 'cpoe', '', '<div class="alert err">Kunjungan tidak ditemukan.</div>'); return; }
  const lab = where('pemeriksaan', (x) => x.kategori === 'Lab').sort(by('nama')), rad = where('pemeriksaan', (x) => x.kategori === 'Radiologi').sort(by('nama'));
  const obatOpt = '<option value="">— Pilih obat —</option>' + [...T('obat')].sort(by('nama')).map((o) => `<option value="${o.id}"${o.stok <= 0 ? ' disabled' : ''}>${e(o.nama)} — stok ${o.stok} ${e(o.satuan)}</option>`).join('');
  const rRow = `<div class="resep-row"><select name="obat_id[]" aria-label="Obat">${obatOpt}</select><input type="number" name="jumlah[]" min="1" placeholder="Jml" aria-label="Jumlah"><input type="text" name="aturan[]" placeholder="cth. 3x1 sesudah makan" aria-label="Aturan pakai"><button type="button" class="btn sm ghost" data-del-row title="Hapus baris">✕</button></div>`;
  const orders = where('order_penunjang', (o) => o.kunjungan_id === k.id).sort(by([(o) => o.id, -1])), reseps = where('resep', (r) => r.kunjungan_id === k.id).sort(by([(r) => r.id, -1])), tind = where('tindakan', (x) => x.kunjungan_id === k.id);
  const cek = (list) => `<div class="checks">${list.map((l) => `<label class="check"><input type="checkbox" name="pemeriksaan[]" value="${l.id}"> ${e(l.nama)} <span class="muted small">${rupiah(l.tarif)}</span></label>`).join('')}</div>`;
  page('CPOE / Order', 'cpoe', '', pasienCard(k) + `<div class="actions" style="margin-bottom:14px"><a class="btn ghost sm" ${L('cpoe')}>← Daftar pasien</a>${can('emr') ? `<a class="btn ghost sm" ${L('emr', { p: 'soap', k: k.id })}>Buka SOAP / EMR</a>` : ''}</div>
  <div class="grid g2"><div class="card"><h3>🧪 Order laboratorium</h3><p class="sub">Dikirim ke modul Laboratorium</p>${formAct('order', hidden('kid', k.id) + hidden('kat', 'Lab') + cek(lab) + `<div class="grid g2" style="margin-top:10px"><div class="fld"><label for="lp">Prioritas</label><select id="lp" name="prioritas"><option>Biasa</option><option>Cito</option></select></div><div class="fld"><label for="lc">Catatan klinis</label><input id="lc" type="text" name="catatan" placeholder="cth. suspek DHF"></div></div><button class="btn">Kirim order lab</button>`)}</div>
    <div class="card"><h3>🩻 Order radiologi</h3><p class="sub">Dikirim ke modul Radiologi</p>${formAct('order', hidden('kid', k.id) + hidden('kat', 'Radiologi') + cek(rad) + `<div class="grid g2" style="margin-top:10px"><div class="fld"><label for="rpp">Prioritas</label><select id="rpp" name="prioritas"><option>Biasa</option><option>Cito</option></select></div><div class="fld"><label for="rc">Indikasi klinis</label><input id="rc" type="text" name="catatan" placeholder="cth. curiga fraktur"></div></div><button class="btn">Kirim order radiologi</button>`)}</div>
    <div class="card span2"><h3>💊 E-resep</h3><p class="sub">Dikirim ke Farmasi untuk diverifikasi apoteker. Sistem mengecek stok dan alergi pasien.</p>${formAct('resep', hidden('kid', k.id) + `<div id="resepRows">${rRow}</div><template id="resepTpl">${rRow}</template><button type="button" class="btn sm ghost" id="addResep" style="margin-bottom:12px">${icon('plus')} Tambah obat</button>
      <div class="grid g2"><div class="fld"><label for="rcat">Catatan untuk apoteker</label><input id="rcat" type="text" name="catatan_resep"></div>${k.alergi ? `<label class="check" style="align-self:end"><input type="checkbox" name="abaikan_alergi" value="1"> Saya sudah mempertimbangkan alergi (${e(k.alergi)})</label>` : ''}</div><button class="btn green">Kirim e-resep</button>`)}</div>
    <div class="card span2"><h3>🩹 Tindakan medis</h3>${formAct('tindakan', hidden('kid', k.id) + `<select name="tindakan_id" style="flex:1" aria-label="Tindakan"><option value="">— Pilih tindakan —</option>${T('tindakan_master').map((m) => `<option value="${m.id}">${e(m.nama)} (${rupiah(m.tarif)})</option>`).join('')}</select><input type="number" name="jumlah" value="1" min="1" style="width:80px;min-width:80px" aria-label="Jumlah"><button class="btn">Catat tindakan</button>`, 'class="inline-form"')}</div></div>
  <h2 style="font-size:16px;margin:20px 0 12px">Riwayat order kunjungan ini</h2>
  <div class="card flush"><div class="tbl-wrap"><table class="t"><thead><tr><th>Waktu</th><th>Jenis</th><th>Pemeriksaan / Obat</th><th>Status</th><th>Hasil</th><th></th></tr></thead><tbody>
  ${orders.map((o) => `<tr><td class="small nowrap">${e(tgl(o.waktu_order, true))}</td><td>${badge(o.kategori)} ${o.prioritas === 'Cito' ? badge('Cito') : ''}</td><td>${e(pemeriksaanOf(o).nama)}<span class="sm-line">${e(o.catatan_klinis || '')}</span></td><td>${badge(o.status)}</td><td>${o.status === 'Selesai' ? hasilHtml(o) : '-'}</td><td>${o.status === 'Menunggu' ? formAct('cpoe_batal', hidden('kid', k.id) + hidden('jenis', 'order') + hidden('id', o.id) + '<button class="btn sm ghost">Batalkan</button>', confirmAttr('Batalkan order ' + pemeriksaanOf(o).nama + '?')) : ''}</td></tr>`).join('')}
  ${reseps.map((r) => `<tr><td class="small nowrap">${e(tgl(r.waktu, true))}</td><td><span class="badge b-green">Resep #${r.id}</span></td><td>${where('resep_item', (i) => i.resep_id === r.id).map((i) => { const o = find('obat', i.obat_id) || {}; return `<div class="small">${e(o.nama)} × ${i.jumlah} ${e(o.satuan)} — <span class="muted">${e(i.aturan_pakai)}</span></div>`; }).join('')}</td><td>${badge(r.status)}</td><td class="small">${e(r.catatan_apoteker || '')}</td><td>${r.status === 'Menunggu' ? formAct('cpoe_batal', hidden('kid', k.id) + hidden('jenis', 'resep') + hidden('id', r.id) + '<button class="btn sm ghost">Batalkan</button>', confirmAttr('Batalkan resep #' + r.id + '?')) : ''}</td></tr>`).join('')}
  ${tind.map((x) => { const m = find('tindakan_master', x.tindakan_id) || {}; return `<tr><td class="small nowrap">${e(tgl(x.waktu, true))}</td><td><span class="badge b-gray">Tindakan</span></td><td>${e(m.nama)} × ${x.jumlah}</td><td>${badge('Selesai')}</td><td class="small">${rupiah(m.tarif * x.jumlah)}</td><td>${formAct('cpoe_batal', hidden('kid', k.id) + hidden('jenis', 'tindakan') + hidden('id', x.id) + '<button class="btn sm ghost">Hapus</button>', confirmAttr('Hapus tindakan ini?'))}</td></tr>`; }).join('')}
  ${!orders.length && !reseps.length && !tind.length ? emptyRow(6, 'Belum ada order untuk kunjungan ini.') : ''}</tbody></table></div></div>`);
};
const sudahLunas = (kid) => !!one('tagihan', (t) => t.kunjungan_id == kid);
function cpoeGuard(d) { if (!tulis('dokter')) return null; const k = kunjungan(d.kid); if (!k || k.status === 'Batal') { flash('err', 'Kunjungan tidak valid.'); return null; } if (sudahLunas(k.id)) { flash('err', 'Tagihan kunjungan ini sudah lunas, order tidak bisa diubah lagi.'); return null; } return k; }
const dokterOrder = (k) => { const me = user(); return me.role === 'dokter' ? me.id : k.dokter_id || null; };
ACTIONS.order = (d) => {
  const k = cpoeGuard(d); if (!k) return;
  const kat = d.kat === 'Lab' ? 'Lab' : 'Radiologi'; let n = 0;
  for (const pid of d.pemeriksaan || []) { const pm = find('pemeriksaan', pid); if (!pm || pm.kategori !== kat) continue; insert('order_penunjang', { kunjungan_id: k.id, pemeriksaan_id: pm.id, kategori: kat, dokter_id: dokterOrder(k), prioritas: d.prioritas === 'Cito' ? 'Cito' : 'Biasa', catatan_klinis: nul(d.catatan), status: 'Menunggu', jadwal: null, nilai: null, flag: null, hasil: null, petugas_id: null, waktu_order: now(), waktu_hasil: null }); n++; }
  if (!n) return flash('err', 'Centang minimal satu pemeriksaan.');
  audit('Order ' + kat, `${k.nomor_rm} · ${n} pemeriksaan`); flash('ok', `${n} order ${kat} terkirim ke unit ${kat === 'Lab' ? 'Laboratorium' : 'Radiologi'}.`);
};
ACTIONS.resep = (d) => {
  const k = cpoeGuard(d); if (!k) return;
  const items = [], err = [];
  (d.obat_id || []).forEach((oid, i) => {
    const o = find('obat', oid); if (!o) return; const j = +((d.jumlah || [])[i]) || 0, a = ((d.aturan || [])[i] || '').trim();
    if (j < 1) return err.push(`jumlah ${o.nama} belum diisi`); if (!a) return err.push(`aturan pakai ${o.nama} belum diisi`);
    if (j > o.stok) err.push(`stok ${o.nama} hanya ${o.stok} ${o.satuan}`);
    for (const al of String(k.alergi || '').split(/[,;]+/).map((x) => x.trim()).filter(Boolean)) if (o.nama.toLowerCase().includes(al.toLowerCase()) && !d.abaikan_alergi) err.push(`PERINGATAN ALERGI: pasien alergi ${al}, resep berisi ${o.nama}`);
    items.push([o.id, j, a]);
  });
  if (!items.length) err.push('isi minimal satu obat');
  if (err.length) return flash('err', 'Resep belum dikirim: ' + err.join('; ') + '.');
  const r = insert('resep', { kunjungan_id: k.id, dokter_id: dokterOrder(k), status: 'Menunggu', catatan: nul(d.catatan_resep), apoteker_id: null, catatan_apoteker: null, waktu: now(), waktu_serah: null });
  items.forEach(([oid, j, a]) => insert('resep_item', { resep_id: r.id, obat_id: oid, jumlah: j, aturan_pakai: a }));
  audit('E-resep', `${k.nomor_rm} · resep #${r.id} · ${items.length} obat`); flash('ok', `E-resep #${r.id} terkirim ke Farmasi (${items.length} obat).`);
};
ACTIONS.tindakan = (d) => {
  const k = cpoeGuard(d); if (!k) return; const m = find('tindakan_master', d.tindakan_id); if (!m) return flash('err', 'Pilih tindakan.');
  insert('tindakan', { kunjungan_id: k.id, tindakan_id: m.id, jumlah: Math.max(1, +d.jumlah || 1), petugas_id: user().id, waktu: now() }); audit('Tindakan medis', `${k.nomor_rm} · ${m.nama}`); flash('ok', 'Tindakan dicatat dan masuk ke tagihan.');
};
ACTIONS.cpoe_batal = (d) => {
  const k = cpoeGuard(d); if (!k) return;
  if (d.jenis === 'order') { const o = find('order_penunjang', d.id); if (o && o.kunjungan_id === k.id && o.status === 'Menunggu') { update('order_penunjang', o.id, { status: 'Batal' }); flash('ok', 'Order dibatalkan.'); } else flash('err', 'Order yang sudah diproses tidak bisa dibatalkan.'); }
  if (d.jenis === 'resep') { const r = find('resep', d.id); if (r && r.kunjungan_id === k.id && r.status === 'Menunggu') { update('resep', r.id, { status: 'Ditolak', catatan_apoteker: 'Dibatalkan dokter' }); flash('ok', 'Resep dibatalkan.'); } else flash('err', 'Resep yang sudah diverifikasi farmasi tidak bisa dibatalkan.'); }
  if (d.jenis === 'tindakan') { removeWhere('tindakan', (x) => x.id == d.id && x.kunjungan_id === k.id); flash('ok', 'Tindakan dihapus.'); }
};

/* ===================== KEPERAWATAN ===================== */
const DX_KEP = ['Hipertermia', 'Nyeri akut', 'Risiko infeksi', 'Pola napas tidak efektif', 'Bersihan jalan napas tidak efektif', 'Risiko hipovolemia', 'Intoleransi aktivitas', 'Ansietas', 'Gangguan mobilitas fisik', 'Risiko jatuh', 'Defisit nutrisi', 'Gangguan integritas kulit'];
VIEWS.keperawatan = () => {
  const me = user(), kid = Q('k'), t = today();
  if (!kid) {
    const list = T('kunjungan').filter((k) => (ranapOf(k.id) || {}).status === 'Dirawat' || (k.tanggal === t && ['Menunggu', 'Dipanggil', 'Diperiksa'].includes(k.status))).map((k) => { const ri = ranapOf(k.id), ob = where('observasi', (o) => o.kunjungan_id === k.id).map((o) => o.waktu).sort().pop(); return { ...kunjungan(k.id), ranap: ri && ri.status === 'Dirawat' ? (find('kamar', ri.kamar_id) || {}).nama : null, obs: ob }; }).sort(by([(k) => (k.ranap ? 0 : 1), 1], 'id'));
    const lama = (k) => !k.obs || toDate(k.obs) < new Date(Date.now() - 6 * 3600000);
    page('Keperawatan', 'keperawatan', '', `<div class="page-head"><div><h1>Daftar Pasien Keperawatan</h1><p>Pasien rawat inap + pasien yang dilayani hari ini</p></div></div>
      <div class="stats">${stat('Pasien', list.length)}${stat('Perlu observasi (> 6 jam)', list.filter(lama).length, 'amber')}</div>
      <div class="card flush"><div class="tbl-wrap"><table class="t"><thead><tr><th>Pasien</th><th>Unit / Kamar</th><th>Status</th><th>Observasi terakhir</th><th></th></tr></thead><tbody>
      ${list.map((r) => `<tr><td><b>${e(r.nama_lengkap)}</b><span class="sm-line">${e(r.nomor_rm)}</span>${r.alergi ? `<span class="badge b-red">Alergi: ${e(r.alergi)}</span>` : ''}</td><td>${r.ranap ? badge('Rawat Inap') + ' ' + e(r.ranap) : badge(r.jenis) + ' ' + e(r.poli_nama || '')}</td><td>${badge(r.status)}</td><td>${r.obs ? e(tgl(r.obs, true)) : '<span class="muted">Belum ada</span>'}${lama(r) ? ' <span class="badge b-amber">perlu</span>' : ''}</td><td><a class="btn sm" ${L('keperawatan', { k: r.id })}>Catat asuhan</a></td></tr>`).join('') || emptyRow(5, 'Tidak ada pasien.')}</tbody></table></div></div>`);
    return;
  }
  const k = kunjungan(kid); if (!k) { page('Keperawatan', 'keperawatan', '', '<div class="alert err">Kunjungan tidak ditemukan.</div>'); return; }
  const obs = where('observasi', (o) => o.kunjungan_id === k.id).sort(by([(o) => o.waktu, -1], [(o) => o.id, -1]));
  const resep = where('resep', (r) => r.kunjungan_id === k.id && r.status !== 'Ditolak').flatMap((r) => where('resep_item', (i) => i.resep_id === r.id).map((i) => ({ ...i, st: r.status, o: find('obat', i.obat_id) || {} })));
  page('Keperawatan', 'keperawatan', '', pasienCard(k) + `<div class="actions" style="margin-bottom:14px"><a class="btn ghost sm" ${L('keperawatan')}>← Daftar pasien</a>${can('emr') ? `<a class="btn ghost sm" ${L('emr', { p: 'soap', k: k.id })}>Lihat SOAP dokter</a>` : ''}</div>
  <div class="row-gap"><div class="card" style="flex:2"><h3>Catatan observasi & asuhan keperawatan</h3><p class="sub">Format SDKI–SIKI–SLKI sederhana: diagnosa, intervensi, evaluasi.</p>
    ${formAct('observasi', hidden('kid', k.id) + `<div class="grid g6"><div class="fld"><label for="otd">TD (mmHg)</label><input id="otd" type="text" name="td" placeholder="120/80"></div><div class="fld"><label for="on">Nadi</label><input id="on" type="number" name="nadi"></div><div class="fld"><label for="os">Suhu (°C)</label><input id="os" type="number" step="0.1" name="suhu"></div><div class="fld"><label for="orr">RR</label><input id="orr" type="number" name="rr"></div><div class="fld"><label for="osp">SpO₂ (%)</label><input id="osp" type="number" name="spo2"></div></div>
      <div class="grid g2"><div class="fld"><label for="odx">Diagnosa keperawatan</label><select id="odx" name="diagnosa"><option value="">— Hanya observasi TTV —</option>${DX_KEP.map((x) => `<option>${e(x)}</option>`).join('')}<option value="lain">Lainnya…</option></select></div><div class="fld" data-show-when="diagnosa=lain"><label for="odl">Diagnosa lain</label><input id="odl" type="text" name="diagnosa_lain"></div></div>
      <div class="fld"><label for="oi">Intervensi</label><textarea id="oi" name="intervensi" rows="2" placeholder="cth. kompres hangat, pantau suhu tiap 4 jam, edukasi minum cukup"></textarea></div><div class="fld"><label for="oe">Evaluasi</label><textarea id="oe" name="evaluasi" rows="2" placeholder="cth. suhu turun 37,8°C, pasien tampak lebih nyaman"></textarea></div><button class="btn">Simpan catatan</button>`)}</div>
    <div class="card"><h3>Obat dari resep</h3><p class="sub">Untuk pemberian obat oleh perawat</p>${resep.map((r) => `<div class="li-row"><span><b>${e(r.o.nama)}</b> × ${r.jumlah}<span class="sm-line">${e(r.aturan_pakai)}</span></span>${badge(r.st)}</div>`).join('') || '<p class="muted small">Belum ada resep.</p>'}</div></div>
  <div class="card flush"><div class="card-h"><h3>Riwayat observasi</h3></div><div class="tbl-wrap"><table class="t"><thead><tr><th>Waktu</th><th>TTV</th><th>Diagnosa</th><th>Intervensi / Evaluasi</th><th>Perawat</th><th></th></tr></thead><tbody>
  ${obs.map((o) => `<tr><td class="small nowrap">${e(tgl(o.waktu, true))}</td><td class="small">TD ${e(o.td || '-')} · N ${e(o.nadi ?? '-')}<br>S ${e(o.suhu ?? '-')}°C · RR ${e(o.rr ?? '-')} · SpO₂ ${e(o.spo2 ?? '-')}</td><td>${e(o.diagnosa_keperawatan || '-')}</td><td class="small">${e(o.intervensi || '')}${o.evaluasi ? `<span class="sm-line">Evaluasi: ${e(o.evaluasi)}</span>` : ''}</td><td class="small">${e((find('pegawai', o.perawat_id) || {}).nama || '-')}</td>
    <td>${o.perawat_id === me.id ? formAct('observasi_hapus', hidden('id', o.id) + '<button class="btn sm ghost">Hapus</button>', confirmAttr('Hapus catatan ini?')) : ''}</td></tr>`).join('') || emptyRow(6, 'Belum ada catatan.')}</tbody></table></div></div>`);
};
ACTIONS.observasi = (d) => {
  if (!tulis('perawat')) return;
  const k = kunjungan(d.kid); if (!k) return;
  if (d.td && !/^\d{2,3}\/\d{2,3}$/.test(d.td)) return flash('err', 'Format tekanan darah: sistolik/diastolik, mis. 120/80.');
  const dx = d.diagnosa === 'lain' ? d.diagnosa_lain : d.diagnosa;
  insert('observasi', { kunjungan_id: k.id, perawat_id: user().id, waktu: now(), td: nul(d.td), nadi: num(d.nadi), suhu: num(d.suhu, true), rr: num(d.rr), spo2: num(d.spo2), diagnosa_keperawatan: nul(dx), intervensi: nul(d.intervensi), evaluasi: nul(d.evaluasi) });
  audit('Asuhan keperawatan', `${k.nomor_rm} · ${dx || 'observasi TTV'}`); flash('ok', 'Catatan keperawatan tersimpan.');
};
ACTIONS.observasi_hapus = (d) => { removeWhere('observasi', (o) => o.id == d.id && o.perawat_id === user().id); flash('ok', 'Catatan dihapus.'); };

/* ===================== LABORATORIUM & RADIOLOGI ===================== */
function penunjangRows(kat, status, hariIni) {
  const t0 = today() + ' 00:00:00';
  return where('order_penunjang', (o) => o.kategori === kat && o.status === status && (!hariIni || (o.waktu_hasil || '') >= t0))
    .map((o) => { const k = kunjungan(o.kunjungan_id) || {}; return { ...o, k, pm: pemeriksaanOf(o), dokter: (find('pegawai', o.dokter_id) || {}).nama, petugas: (find('pegawai', o.petugas_id) || {}).nama }; })
    .sort(by([(o) => (o.prioritas === 'Cito' ? 0 : 1), 1], [(o) => (status === 'Selesai' ? o.waktu_hasil : o.waktu_order), status === 'Selesai' ? -1 : 1]));
}
VIEWS.lab = () => {
  const p = ['Menunggu', 'Diproses', 'Selesai'].includes(Q('p')) ? Q('p') : 'Menunggu', t0 = today() + ' 00:00:00';
  const c = (s, h) => penunjangRows('Lab', s, h).length;
  const kritis = where('order_penunjang', (o) => o.kategori === 'Lab' && o.flag === 'Kritis' && (o.waktu_hasil || '') >= t0);
  const list = penunjangRows('Lab', p, p === 'Selesai');
  page('Laboratorium', 'lab', '', `<div class="stats">${stat('Order menunggu', c('Menunggu'), 'amber')}${stat('Sedang diproses', c('Diproses'), 'violet')}${stat('Selesai hari ini', c('Selesai', true), 'green')}${stat('Nilai kritis hari ini', kritis.length, 'red')}</div>
  ${kritis.map((o) => `<div class="alert err">⚠ Nilai kritis: <b>${e(kunjungan(o.kunjungan_id).nama_lengkap)}</b> — ${e(pemeriksaanOf(o).nama)} <b>${e(o.nilai)}</b> ${e(pemeriksaanOf(o).satuan || '')}</div>`).join('')}
  ${tabs({ Menunggu: `Order Masuk (${c('Menunggu')})`, Diproses: `Entri Hasil (${c('Diproses')})`, Selesai: 'Selesai Hari Ini' }, p)}
  <div class="card flush"><div class="tbl-wrap"><table class="t"><thead><tr><th>Waktu order</th><th>Pasien</th><th>Pemeriksaan</th><th>Dokter</th><th>${p === 'Menunggu' ? 'Aksi' : 'Hasil'}</th></tr></thead><tbody>
  ${list.map((o) => `<tr><td class="small nowrap">${e(tgl(o.waktu_order, true))}${o.prioritas === 'Cito' ? '<br>' + badge('Cito') : ''}</td><td><b>${e(o.k.nama_lengkap)}</b><span class="sm-line">${e(o.k.nomor_rm)} · ${jk(o.k.jenis_kelamin)} · ${umur(o.k.tanggal_lahir)}</span>${badge(o.k.jenis)}</td>
    <td><b>${e(o.pm.nama)}</b><span class="sm-line">Rujukan: ${e(o.pm.nilai_rujukan || '-')} ${e(o.pm.satuan || '')}</span>${o.catatan_klinis ? `<span class="sm-line">Klinis: ${e(o.catatan_klinis)}</span>` : ''}</td><td class="small">${e(o.dokter || '-')}</td>
    <td>${p === 'Menunggu' ? `<div class="actions">${formAct('lab', hidden('id', o.id) + hidden('aksi', 'terima') + '<button class="btn sm">Terima sampel</button>')}${formAct('lab', hidden('id', o.id) + hidden('aksi', 'tolak') + '<button class="btn sm ghost">Tolak</button>', confirmAttr('Tolak order ini (mis. sampel lisis)?'))}</div>`
      : p === 'Diproses' ? formAct('lab', hidden('id', o.id) + hidden('aksi', 'hasil') + `<input type="text" name="nilai" placeholder="Nilai ${e(o.pm.satuan || '')}" aria-label="Nilai" style="width:110px;min-width:110px"><input type="text" name="hasil" placeholder="Keterangan (opsional)" aria-label="Keterangan" style="min-width:150px"><select name="flag" aria-label="Flag" style="min-width:120px"><option value="">Flag otomatis</option>${['Normal', 'Rendah', 'Tinggi', 'Kritis', 'Abnormal'].map((f) => `<option>${f}</option>`).join('')}</select><button class="btn sm green">Validasi</button>`, 'class="inline-form"')
      : hasilHtml(o) + `<span class="sm-line">Validasi ${e(tgl(o.waktu_hasil, true))} · ${e(o.petugas || '-')}</span>`}</td></tr>`).join('') || emptyRow(5, 'Tidak ada order di daftar ini.')}</tbody></table></div></div>`);
};
ACTIONS.lab = (d) => {
  if (!tulis('laboran')) return;
  const o = find('order_penunjang', d.id); if (!o || o.kategori !== 'Lab') return flash('err', 'Order tidak ditemukan.'); const pm = pemeriksaanOf(o);
  if (d.aksi === 'terima' && o.status === 'Menunggu') { update('order_penunjang', o.id, { status: 'Diproses', petugas_id: user().id }); audit('Lab terima sampel', `${pm.nama} #${o.id}`); flash('ok', `Sampel ${pm.nama} diterima dan sedang diproses.`); }
  if (d.aksi === 'tolak' && o.status === 'Menunggu') { update('order_penunjang', o.id, { status: 'Batal', hasil: 'Ditolak lab: sampel tidak layak' }); flash('ok', 'Order ditolak.'); }
  if (d.aksi === 'hasil' && ['Diproses', 'Selesai'].includes(o.status)) {
    if (!d.nilai && !d.hasil) return flash('err', 'Isi nilai hasil atau keterangan.');
    const flag = d.flag || flagLab(d.nilai, pm.nilai_rujukan);
    update('order_penunjang', o.id, { status: 'Selesai', nilai: nul(d.nilai), flag, hasil: nul(d.hasil), petugas_id: user().id, waktu_hasil: now() });
    audit('Lab validasi hasil', `${pm.nama} = ${d.nilai} (${flag})`);
    flash(flag === 'Kritis' ? 'warn' : 'ok', flag === 'Kritis' ? `NILAI KRITIS: ${pm.nama} = ${d.nilai}. Segera laporkan ke dokter penanggung jawab.` : `Hasil ${pm.nama} tervalidasi dan langsung tampil di EMR dokter.`);
  }
};
VIEWS.radiologi = () => {
  const p = ['Menunggu', 'Diproses', 'Selesai'].includes(Q('p')) ? Q('p') : 'Menunggu';
  const c = (s) => penunjangRows('Radiologi', s).length; const list = penunjangRows('Radiologi', p).slice(0, 50);
  const nanti = new Date(Date.now() + 1800000); const dt = `${nanti.getFullYear()}-${pad(nanti.getMonth() + 1)}-${pad(nanti.getDate())}T${pad(nanti.getHours())}:${pad(nanti.getMinutes())}`;
  page('Radiologi', 'radiologi', '', `<div class="stats">${stat('Order baru', c('Menunggu'), 'amber')}${stat('Terjadwal / dikerjakan', c('Diproses'), 'violet')}${stat('Hasil terkirim', c('Selesai'), 'green')}</div>
  ${tabs({ Menunggu: 'Verifikasi & Jadwal', Diproses: 'Pelaksanaan & Expertise', Selesai: 'Hasil Terkirim' }, p)}
  <div class="card flush"><div class="tbl-wrap"><table class="t"><thead><tr><th>Order</th><th>Pasien</th><th>Pemeriksaan</th><th>Dokter</th><th>${p === 'Selesai' ? 'Hasil' : 'Aksi'}</th></tr></thead><tbody>
  ${list.map((o) => `<tr><td class="small nowrap">${e(tgl(o.waktu_order, true))}${o.prioritas === 'Cito' ? '<br>' + badge('Cito') : ''}</td><td><b>${e(o.k.nama_lengkap)}</b><span class="sm-line">${e(o.k.nomor_rm)} · ${jk(o.k.jenis_kelamin)} · ${umur(o.k.tanggal_lahir)}</span></td>
    <td><b>${e(o.pm.nama)}</b><span class="sm-line">Indikasi: ${e(o.catatan_klinis || '-')}</span>${o.jadwal ? `<span class="sm-line">Jadwal: ${e(tgl(o.jadwal, true))}</span>` : ''}</td><td class="small">${e(o.dokter || '-')}</td>
    <td>${p === 'Menunggu' ? `<div class="actions">${formAct('rad', hidden('id', o.id) + hidden('aksi', 'jadwal') + `<input type="datetime-local" name="jadwal" value="${dt}" aria-label="Jadwal" style="min-width:190px"><button class="btn sm">Verifikasi & jadwalkan</button>`, 'class="inline-form"')}${formAct('rad', hidden('id', o.id) + hidden('aksi', 'tolak') + '<button class="btn sm ghost">Tolak</button>', confirmAttr('Tolak order ini?'))}</div>`
      : p === 'Diproses' ? formAct('rad', hidden('id', o.id) + hidden('aksi', 'expertise') + `<textarea name="temuan" rows="2" aria-label="Temuan" placeholder="Temuan (cth. Cor tidak membesar, sinus kostofrenikus lancip)" style="margin-bottom:6px"></textarea><input type="text" name="kesan" aria-label="Kesan" placeholder="Kesan (cth. Foto thorax dalam batas normal)" style="margin-bottom:6px"><div class="inline-form"><label class="check"><input type="checkbox" name="normal" value="1"> Normal</label><button class="btn sm green">Kirim hasil</button></div>`)
      : hasilHtml(o) + `<span class="sm-line">${e(tgl(o.waktu_hasil, true))} · ${e(o.petugas || '-')}</span>`}</td></tr>`).join('') || emptyRow(5, 'Tidak ada order di daftar ini.')}</tbody></table></div></div>`);
};
ACTIONS.rad = (d) => {
  if (!tulis('radiografer')) return;
  const o = find('order_penunjang', d.id); if (!o || o.kategori !== 'Radiologi') return flash('err', 'Order tidak ditemukan.'); const pm = pemeriksaanOf(o);
  if (d.aksi === 'jadwal' && o.status === 'Menunggu') { const jd = d.jadwal ? d.jadwal.replace('T', ' ') + ':00' : now(); update('order_penunjang', o.id, { status: 'Diproses', jadwal: jd, petugas_id: user().id }); audit('Radiologi dijadwalkan', `${pm.nama} ${jd}`); flash('ok', `${pm.nama} dijadwalkan ${tgl(jd, true)}.`); }
  if (d.aksi === 'tolak' && o.status === 'Menunggu') { update('order_penunjang', o.id, { status: 'Batal', hasil: 'Ditolak radiologi: indikasi tidak sesuai' }); flash('ok', 'Order ditolak.'); }
  if (d.aksi === 'expertise' && ['Diproses', 'Selesai'].includes(o.status)) {
    if (!d.temuan || !d.kesan) return flash('err', 'Isi temuan dan kesan.');
    update('order_penunjang', o.id, { status: 'Selesai', hasil: `Temuan: ${d.temuan}\nKesan: ${d.kesan}`, flag: d.normal ? 'Normal' : 'Abnormal', petugas_id: user().id, waktu_hasil: now() });
    audit('Radiologi expertise', pm.nama); flash('ok', `Hasil ${pm.nama} terkirim ke EMR dokter.`);
  }
};

/* ===================== FARMASI ===================== */
VIEWS.farmasi = () => {
  const p = Q('p', 'Menunggu'), cnt = {}; T('resep').forEach((r) => (cnt[r.status] = (cnt[r.status] || 0) + 1));
  const low = where('obat', (o) => o.stok <= o.stok_min).length;
  let body = `<div class="stats">${stat('Resep baru', cnt.Menunggu || 0, 'amber')}${stat('Siap diserahkan', cnt.Diverifikasi || 0, 'blue')}${stat('Diserahkan (total)', cnt.Diserahkan || 0, 'green')}${stat('Obat stok menipis', low, 'red')}</div>` +
    tabs({ Menunggu: 'E-Resep Masuk', Diverifikasi: 'Dispensing / Serahkan', Diserahkan: 'Sudah Diserahkan', Ditolak: 'Ditolak', obat: 'Master Obat & Stok' }, p);
  if (p !== 'obat') {
    const list = where('resep', (r) => r.status === p).sort(by([(r) => r.waktu, ['Menunggu', 'Diverifikasi'].includes(p) ? 1 : -1])).slice(0, 50);
    body += list.map((r) => {
      const k = kunjungan(r.kunjungan_id) || {}; const items = where('resep_item', (i) => i.resep_id === r.id).map((i) => ({ ...i, o: find('obat', i.obat_id) || {} })); const total = sum(items, (i) => i.jumlah * i.o.harga);
      return `<div class="card"><div class="card-h"><div><h3>Resep #${r.id} — ${e(k.nama_lengkap)}</h3><p class="sub">${e(k.nomor_rm)} · ${umur(k.tanggal_lahir)} · ${badge(k.jenis)} ${badge(k.penjamin)} · ${e((find('pegawai', r.dokter_id) || {}).nama || '-')} · ${e(tgl(r.waktu, true))}</p></div>${badge(r.status)}</div>
        ${k.alergi ? `<div class="alert err" style="margin-bottom:10px">⚠ Alergi pasien: <b>${e(k.alergi)}</b> — periksa kembali sebelum menyiapkan obat.</div>` : ''}
        <div class="tbl-wrap"><table class="t"><thead><tr><th>Obat</th><th>Jumlah</th><th>Aturan pakai</th><th>Stok</th><th class="right">Subtotal</th></tr></thead><tbody>
        ${items.map((i) => { const kurang = i.jumlah > i.o.stok && r.status !== 'Diserahkan'; return `<tr${kurang ? ' class="low"' : ''}><td>${e(i.o.nama)}</td><td>${i.jumlah} ${e(i.o.satuan)}</td><td>${e(i.aturan_pakai)}</td><td>${i.o.stok}${kurang ? ' <span class="badge b-red">kurang</span>' : ''}</td><td class="right">${rupiah(i.jumlah * i.o.harga)}</td></tr>`; }).join('')}
        <tr class="total-row"><td colspan="4">Total obat</td><td class="right">${rupiah(total)}</td></tr></tbody></table></div>
        ${r.catatan ? `<p class="small" style="margin:10px 0 0"><b>Catatan dokter:</b> ${e(r.catatan)}</p>` : ''}${r.catatan_apoteker ? `<p class="small" style="margin:6px 0 0"><b>Catatan apoteker:</b> ${e(r.catatan_apoteker)}</p>` : ''}
        ${['Menunggu', 'Diverifikasi'].includes(r.status) ? formAct('resep_aksi', hidden('id', r.id) + `<input type="text" name="catatan" placeholder="Catatan apoteker / alasan tolak" style="flex:1" aria-label="Catatan apoteker">${r.status === 'Menunggu' ? '<button class="btn" name="aksi" value="verifikasi">✓ Verifikasi (skrining OK)</button>' : '<button class="btn green" name="aksi" value="serahkan">Serahkan obat ke pasien</button>'}<button class="btn ghost" name="aksi" value="tolak">Tolak</button>`, 'class="inline-form" style="margin-top:14px"') : ''}</div>`;
    }).join('') || '<div class="card"><p class="muted" style="margin:0">Tidak ada resep di daftar ini.</p></div>';
  } else {
    const edit = Q('edit') ? find('obat', Q('edit')) : null; const obat = [...T('obat')].sort(by([(o) => (o.stok <= o.stok_min ? 0 : 1), 1], 'nama'));
    body += `<div class="row-gap"><div class="card flush" style="flex:2"><div class="card-h"><div><h2>Master obat & formularium</h2><p class="sub">Penambahan stok dilakukan lewat modul Gudang (penerimaan barang).</p></div></div>
      <div class="tbl-wrap"><table class="t"><thead><tr><th>Kode</th><th>Nama obat</th><th>Harga</th><th>Stok</th><th></th></tr></thead><tbody>
      ${obat.map((o) => { const lo = o.stok <= o.stok_min; return `<tr${lo ? ' class="low"' : ''}><td class="mono">${e(o.kode)}</td><td>${e(o.nama)}<span class="sm-line">${e(o.satuan)}</span></td><td>${rupiah(o.harga)}</td><td><b>${o.stok}</b> <span class="muted small">min ${o.stok_min}</span>${lo ? ' <span class="badge b-red">menipis</span>' : ''}</td><td><div class="actions"><a class="btn sm ghost" ${L('farmasi', { p: 'obat', edit: o.id })}>Edit</a>${formAct('obat_hapus', hidden('id', o.id) + '<button class="btn sm red">Hapus</button>', confirmAttr('Hapus ' + o.nama + '?'))}</div></td></tr>`; }).join('')}</tbody></table></div></div>
      <div class="card"><h2>${edit ? 'Edit obat' : 'Tambah obat'}</h2>${formAct('obat_simpan', hidden('id', edit ? edit.id : 0) + `<div class="fld"><label for="ok">Kode</label><input id="ok" type="text" name="kode" value="${e(edit ? edit.kode : 'OB' + pad(Math.max(0, ...T('obat').map((o) => o.id)) + 1, 3))}"></div><div class="fld"><label for="onm">Nama & kekuatan</label><input id="onm" type="text" name="nama" value="${e(edit ? edit.nama : '')}" placeholder="cth. Paracetamol 500 mg"></div>
        <div class="grid g2"><div class="fld"><label for="osat">Satuan</label><input id="osat" type="text" name="satuan" value="${e(edit ? edit.satuan : 'tablet')}"></div><div class="fld"><label for="ohg">Harga / satuan</label><input id="ohg" type="number" name="harga" min="0" value="${edit ? edit.harga : 0}"></div></div>
        <div class="grid g2"><div class="fld"><label for="omin">Stok minimum</label><input id="omin" type="number" name="stok_min" min="0" value="${edit ? edit.stok_min : 10}"></div>${edit ? '' : '<div class="fld"><label for="ost">Stok awal</label><input id="ost" type="number" name="stok" min="0" value="0"></div>'}</div>
        <div class="actions"><button class="btn">Simpan</button>${edit ? `<a class="btn ghost" ${L('farmasi', { p: 'obat' })}>Batal</a>` : ''}</div>`)}</div></div>`;
  }
  page('Farmasi', 'farmasi', '', body);
};
ACTIONS.resep_aksi = (d) => {
  if (!tulis('apoteker')) return;
  const me = user(), r = find('resep', d.id); if (!r) return; const k = kunjungan(r.kunjungan_id) || {};
  if (d.aksi === 'verifikasi' && r.status === 'Menunggu') { update('resep', r.id, { status: 'Diverifikasi', apoteker_id: me.id, catatan_apoteker: nul(d.catatan) }); audit('Verifikasi resep', `#${r.id} ${k.nama_lengkap}`); flash('ok', `Resep #${r.id} terverifikasi. Siapkan obat lalu serahkan ke pasien.`); }
  if (d.aksi === 'tolak' && ['Menunggu', 'Diverifikasi'].includes(r.status)) { if (!d.catatan) return flash('err', 'Tulis alasan penolakan untuk dokter.'); update('resep', r.id, { status: 'Ditolak', apoteker_id: me.id, catatan_apoteker: d.catatan }); audit('Tolak resep', `#${r.id} — ${d.catatan}`); flash('ok', `Resep #${r.id} ditolak dan dikembalikan ke dokter.`); }
  if (d.aksi === 'serahkan' && r.status === 'Diverifikasi') {
    const items = where('resep_item', (i) => i.resep_id === r.id).map((i) => ({ ...i, o: find('obat', i.obat_id) }));
    const kurang = items.filter((i) => i.jumlah > i.o.stok);
    if (kurang.length) return flash('err', 'Stok tidak cukup: ' + kurang.map((i) => `${i.o.nama} (stok ${i.o.stok})`).join(', ') + '. Minta penerimaan barang ke gudang.');
    items.forEach((i) => { update('obat', i.o.id, { stok: i.o.stok - i.jumlah }); insert('mutasi_stok', { jenis_item: 'obat', item_id: i.o.id, tipe: 'Keluar', jumlah: i.jumlah, keterangan: `Resep #${r.id} — ${k.nama_lengkap}`, petugas_id: me.id, waktu: now() }); });
    update('resep', r.id, { status: 'Diserahkan', apoteker_id: me.id, waktu_serah: now() });
    audit('Serahkan obat', `#${r.id} ${k.nama_lengkap}`); flash('ok', `Obat resep #${r.id} diserahkan ke ${k.nama_lengkap}. Stok otomatis berkurang.`);
  }
};
ACTIONS.obat_simpan = (d) => {
  if (!tulis('apoteker')) return;
  const id = +d.id; const row = { kode: d.kode, nama: d.nama, satuan: d.satuan, harga: Math.max(0, +d.harga || 0), stok_min: Math.max(0, +d.stok_min || 0) };
  if (!row.kode || !row.nama || !row.satuan) return flash('err', 'Kode, nama, dan satuan wajib diisi.');
  if (one('obat', (o) => o.kode === row.kode && o.id !== id)) return flash('err', 'Kode obat sudah dipakai.');
  if (id) { update('obat', id, row); audit('Edit obat', row.nama); flash('ok', 'Obat diperbarui.'); }
  else { const stok = Math.max(0, +d.stok || 0); const o = insert('obat', { ...row, stok }); if (stok) insert('mutasi_stok', { jenis_item: 'obat', item_id: o.id, tipe: 'Masuk', jumlah: stok, keterangan: 'Stok awal', petugas_id: user().id, waktu: now() }); audit('Tambah obat', row.nama); flash('ok', 'Obat ditambahkan.'); }
  nav('farmasi', { p: 'obat' });
};
ACTIONS.obat_hapus = (d) => { if (!tulis('apoteker')) return; if (T('resep_item').some((i) => i.obat_id == d.id)) return flash('err', 'Obat sudah dipakai di resep, tidak bisa dihapus.'); removeWhere('obat', (o) => o.id == d.id); audit('Hapus obat', d.id); flash('ok', 'Obat dihapus.'); };

/* ===================== GUDANG ===================== */
VIEWS.gudang = () => {
  const p = Q('p', 'stok'), obat = [...T('obat')].sort(by('nama')), barang = [...T('barang')].sort(by('kategori', 'nama')), t0 = today() + ' 00:00:00';
  const tabel = (list, judul) => `<div class="card flush"><div class="card-h"><h2>${e(judul)}</h2></div><div class="tbl-wrap"><table class="t"><thead><tr><th>Kode</th><th>Nama</th><th>Stok</th><th>Minimum</th><th>Status</th></tr></thead><tbody>${list.map((x) => { const lo = x.stok <= x.stok_min; return `<tr${lo ? ' class="low"' : ''}><td class="mono">${e(x.kode)}</td><td>${e(x.nama)}${x.kategori ? `<span class="sm-line">${e(x.kategori)}</span>` : ''}</td><td><b>${x.stok}</b> ${e(x.satuan)}</td><td>${x.stok_min}</td><td>${lo ? '<span class="badge b-red">Menipis</span>' : '<span class="badge b-green">Aman</span>'}</td></tr>`; }).join('')}</tbody></table></div></div>`;
  let body = `<div class="stats">${stat('Jenis obat', obat.length)}${stat('Jenis barang', barang.length)}${stat('Stok menipis', [...obat, ...barang].filter((x) => x.stok <= x.stok_min).length, 'red', 'perlu pengadaan')}${stat('Mutasi hari ini', where('mutasi_stok', (m) => m.waktu >= t0).length, 'blue')}</div>` + tabs({ stok: 'Cek Stok', mutasi: 'Penerimaan / Pengeluaran', riwayat: 'Riwayat Mutasi', barang: 'Master Barang' }, p);
  if (p === 'stok') body += tabel(obat, 'Stok obat') + tabel(barang, 'Stok barang & alat kesehatan habis pakai');
  if (p === 'mutasi') body += `<div class="card" style="max-width:760px"><h2>Catat penerimaan / pengeluaran</h2><p class="sub">Penerimaan dari supplier/PBF menambah stok. Pengeluaran ke unit (IGD, rawat inap, dll) mengurangi stok. Obat untuk pasien keluar otomatis saat Farmasi menyerahkan resep.</p>
    ${formAct('mutasi', `<div class="grid g2"><div class="fld"><label for="mt">Jenis transaksi</label><select id="mt" name="tipe"><option value="Masuk">Penerimaan (stok masuk)</option><option value="Keluar">Pengeluaran (stok keluar)</option></select></div><div class="fld"><label for="mj">Jenis item</label><select id="mj" name="jenis_item"><option value="obat">Obat</option><option value="barang">Barang / BMHP</option></select></div>
      <div class="fld full" data-show-when="jenis_item=obat"><label for="mo">Obat</label><select id="mo" name="obat_id">${obat.map((o) => `<option value="${o.id}">${e(o.nama)} — stok ${o.stok} ${e(o.satuan)}</option>`).join('')}</select></div>
      <div class="fld full" data-show-when="jenis_item=barang"><label for="mb">Barang</label><select id="mb" name="barang_id">${barang.map((o) => `<option value="${o.id}">${e(o.nama)} — stok ${o.stok} ${e(o.satuan)}</option>`).join('')}</select></div>
      <div class="fld"><label for="mjm">Jumlah</label><input id="mjm" type="number" name="jumlah" min="1"></div><div class="fld"><label for="mk">Keterangan</label><input id="mk" type="text" name="keterangan" placeholder="cth. PBF Kimia Farma, faktur 123 / ke IGD"></div></div><button class="btn">Simpan transaksi</button>`)}</div>`;
  if (p === 'riwayat') body += `<div class="card flush"><div class="tbl-wrap"><table class="t"><thead><tr><th>Waktu</th><th>Item</th><th>Tipe</th><th>Jumlah</th><th>Keterangan</th><th>Petugas</th></tr></thead><tbody>${[...T('mutasi_stok')].sort(by([(m) => m.waktu, -1], [(m) => m.id, -1])).slice(0, 150).map((m) => { const it = find(m.jenis_item, m.item_id); return `<tr><td class="small nowrap">${e(tgl(m.waktu, true))}</td><td>${e(it ? it.nama : '(terhapus)')}<span class="sm-line">${m.jenis_item === 'obat' ? 'Obat' : 'Barang'}</span></td><td>${badge(m.tipe)}</td><td><b>${m.tipe === 'Masuk' ? '+' : '−'}${m.jumlah}</b> ${e(it ? it.satuan : '')}</td><td class="small">${e(m.keterangan || '-')}</td><td class="small">${e((find('pegawai', m.petugas_id) || {}).nama || '-')}</td></tr>`; }).join('') || emptyRow(6)}</tbody></table></div></div>`;
  if (p === 'barang') { const edit = Q('edit') ? find('barang', Q('edit')) : null;
    body += `<div class="row-gap"><div class="card flush" style="flex:2"><div class="card-h"><h2>Master barang</h2></div><div class="tbl-wrap"><table class="t"><thead><tr><th>Kode</th><th>Nama</th><th>Kategori</th><th>Stok</th><th></th></tr></thead><tbody>${barang.map((b) => `<tr><td class="mono">${e(b.kode)}</td><td>${e(b.nama)}</td><td>${e(b.kategori)}</td><td>${b.stok} ${e(b.satuan)}</td><td><div class="actions"><a class="btn sm ghost" ${L('gudang', { p: 'barang', edit: b.id })}>Edit</a>${formAct('barang_hapus', hidden('id', b.id) + '<button class="btn sm red">Hapus</button>', confirmAttr('Hapus ' + b.nama + '?'))}</div></td></tr>`).join('')}</tbody></table></div></div>
    <div class="card"><h2>${edit ? 'Edit barang' : 'Tambah barang'}</h2>${formAct('barang_simpan', hidden('id', edit ? edit.id : 0) + `<div class="fld"><label for="bk">Kode</label><input id="bk" type="text" name="kode" value="${e(edit ? edit.kode : 'BR' + pad(Math.max(0, ...T('barang').map((b) => b.id)) + 1, 3))}"></div><div class="fld"><label for="bn">Nama barang</label><input id="bn" type="text" name="nama" value="${e(edit ? edit.nama : '')}"></div>
      <div class="grid g2"><div class="fld"><label for="bkt">Kategori</label><input id="bkt" type="text" name="kategori" list="katList" value="${e(edit ? edit.kategori : 'Alkes Habis Pakai')}"></div><div class="fld"><label for="bs">Satuan</label><input id="bs" type="text" name="satuan" value="${e(edit ? edit.satuan : 'pcs')}"></div></div><datalist id="katList"><option>APD</option><option>Alkes Habis Pakai</option><option>ATK</option><option>Linen</option><option>Reagen</option></datalist>
      <div class="fld"><label for="bm">Stok minimum</label><input id="bm" type="number" name="stok_min" min="0" value="${edit ? edit.stok_min : 10}"></div><div class="actions"><button class="btn">Simpan</button>${edit ? `<a class="btn ghost" ${L('gudang', { p: 'barang' })}>Batal</a>` : ''}</div>`)}</div></div>`; }
  page('Inventory & Gudang', 'gudang', '', body);
};
ACTIONS.mutasi = (d) => {
  if (!tulis('gudang', 'apoteker')) return;
  const jenis = d.jenis_item === 'barang' ? 'barang' : 'obat', it = find(jenis, jenis === 'obat' ? d.obat_id : d.barang_id), tipe = d.tipe === 'Keluar' ? 'Keluar' : 'Masuk', j = +d.jumlah || 0;
  if (!it || j < 1) return flash('err', 'Pilih item dan isi jumlah minimal 1.');
  if (tipe === 'Keluar' && j > it.stok) return flash('err', `Stok ${it.nama} hanya ${it.stok} ${it.satuan}.`);
  update(jenis, it.id, { stok: it.stok + (tipe === 'Masuk' ? j : -j) });
  insert('mutasi_stok', { jenis_item: jenis, item_id: it.id, tipe, jumlah: j, keterangan: nul(d.keterangan), petugas_id: user().id, waktu: now() });
  audit('Stok ' + tipe, `${it.nama} ${j} ${it.satuan}`); flash('ok', `${tipe === 'Masuk' ? 'Penerimaan' : 'Pengeluaran'} ${it.nama} sebanyak ${j} ${it.satuan} tercatat.`);
};
ACTIONS.barang_simpan = (d) => {
  if (!tulis('gudang', 'apoteker')) return;
  const id = +d.id, row = { kode: d.kode, nama: d.nama, kategori: d.kategori, satuan: d.satuan, stok_min: Math.max(0, +d.stok_min || 0) };
  if (!row.kode || !row.nama || !row.kategori || !row.satuan) return flash('err', 'Kode, nama, kategori, dan satuan wajib diisi.');
  if (one('barang', (b) => b.kode === row.kode && b.id !== id)) return flash('err', 'Kode barang sudah dipakai.');
  if (id) update('barang', id, row); else insert('barang', { ...row, stok: 0 });
  audit(id ? 'Edit barang' : 'Tambah barang', row.nama); flash('ok', id ? 'Barang diperbarui.' : 'Barang ditambahkan. Catat penerimaan untuk mengisi stok.'); nav('gudang', { p: 'barang' });
};
ACTIONS.barang_hapus = (d) => { if (!tulis('gudang', 'apoteker')) return; removeWhere('barang', (b) => b.id == d.id); audit('Hapus barang', d.id); flash('ok', 'Barang dihapus.'); };

/* ===================== BILLING & KASIR ===================== */
function rincian(kid) {
  const k = find('kunjungan', kid), po = k && find('poli', k.poli_id), it = [];
  if (po) it.push(['Pendaftaran & konsultasi', k.jenis === 'IGD' ? 'Pelayanan IGD' : 'Konsultasi ' + po.nama, 1, +po.tarif]);
  where('tindakan', (x) => x.kunjungan_id == kid).forEach((x) => { const m = find('tindakan_master', x.tindakan_id) || {}; it.push(['Tindakan', m.nama, x.jumlah, +m.tarif]); });
  where('order_penunjang', (o) => o.kunjungan_id == kid && o.status !== 'Batal').forEach((o) => { const pm = pemeriksaanOf(o); it.push([o.kategori === 'Lab' ? 'Laboratorium' : 'Radiologi', pm.nama, 1, +pm.tarif]); });
  where('resep', (r) => r.kunjungan_id == kid && r.status === 'Diserahkan').forEach((r) => where('resep_item', (i) => i.resep_id === r.id).forEach((i) => { const o = find('obat', i.obat_id) || {}; it.push(['Obat', `${o.nama} (${o.satuan})`, i.jumlah, +o.harga]); }));
  const ri = ranapOf(kid); if (ri) { const km = find('kamar', ri.kamar_id) || {}; it.push(['Kamar rawat inap', `${km.nama} · ${km.kelas}`, lamaRawat(ri.tanggal_masuk, ri.tanggal_keluar), +km.tarif]); }
  return it;
}
const totalOf = (kid) => sum(rincian(kid), (i) => i[2] * i[3]);
VIEWS.billing = () => {
  const kid = Q('k'), t = today();
  if (kid) {
    const k = kunjungan(kid); if (!k) { page('Billing & Kasir', 'billing', '', '<div class="alert err">Kunjungan tidak ditemukan.</div>'); return; }
    const it = rincian(k.id), total = sum(it, (i) => i[2] * i[3]), tg = one('tagihan', (x) => x.kunjungan_id === k.id);
    const dirawat = (ranapOf(k.id) || {}).status === 'Dirawat', resepBelum = where('resep', (r) => r.kunjungan_id === k.id && ['Menunggu', 'Diverifikasi'].includes(r.status)).length;
    const tot = tg ? tg.total : total, tang = tg ? tg.ditanggung : ['BPJS', 'Asuransi'].includes(k.penjamin) ? total : 0, harus = total - (['BPJS', 'Asuransi'].includes(k.penjamin) ? total : 0);
    page('Billing & Kasir', 'billing', '', `<div class="actions" style="margin-bottom:14px"><a class="btn ghost sm" ${L('billing')}>← Daftar tagihan</a>${tg && !IN_VIEWER ? '<button class="btn sm" type="button" onclick="window.print()">Cetak kuitansi</button>' : ''}</div>
    <div class="row-gap"><div class="card receipt" style="flex:2"><div class="card-h"><div><h2>${tg ? 'Kuitansi pembayaran' : 'Rincian tagihan'}</h2><p class="sub">${RS_NAME} · No. ${tg ? 'INV-' + pad(tg.id, 6) : 'draf'}</p></div>${badge(tg ? 'Lunas' : 'Belum Lunas')}</div>
      <dl class="kv" style="margin-bottom:14px"><dt>Pasien</dt><dd>${e(k.nama_lengkap)} (${e(k.nomor_rm)})</dd><dt>Kunjungan</dt><dd>${e(k.jenis)} · ${e(k.poli_nama || '-')} · ${e(tgl(k.tanggal))}</dd><dt>Dokter</dt><dd>${e(k.dokter_nama || '-')}</dd><dt>Penjamin</dt><dd>${badge(k.penjamin)} ${e(k.no_penjamin || '')}</dd></dl>
      <div class="tbl-wrap"><table class="t"><thead><tr><th>Kategori</th><th>Uraian</th><th>Qty</th><th class="right">Tarif</th><th class="right">Subtotal</th></tr></thead><tbody>
      ${it.map(([kat, ur, q, h]) => `<tr><td class="small">${e(kat)}</td><td>${e(ur)}</td><td>${q}</td><td class="right">${rupiah(h)}</td><td class="right">${rupiah(q * h)}</td></tr>`).join('') || emptyRow(5, 'Belum ada biaya.')}
      <tr class="total-row"><td colspan="4">Total biaya</td><td class="right">${rupiah(tot)}</td></tr>${tang > 0 ? `<tr><td colspan="4">Ditanggung ${e(k.penjamin)}</td><td class="right">− ${rupiah(tang)}</td></tr>` : ''}<tr class="total-row"><td colspan="4">Dibayar pasien</td><td class="right">${rupiah(tot - tang)}</td></tr></tbody></table></div>
      ${tg ? `<p class="small muted" style="margin-top:12px">Dibayar ${e(tgl(tg.waktu_bayar, true))} · metode ${e(tg.metode)}${tg.metode === 'Tunai' ? ` · diterima ${rupiah(tg.dibayar)} · kembali ${rupiah(tg.dibayar - (tg.total - tg.ditanggung))}` : ''} · kasir ${e((find('pegawai', tg.kasir_id) || {}).nama || '-')}</p>` : ''}</div>
    ${tg ? '' : `<div class="card"><h2>Pembayaran</h2>${dirawat ? '<div class="alert warn">Pasien masih dirawat inap. Biaya kamar terus bertambah per hari; pembayaran dilakukan setelah pasien pulang.</div>' : (resepBelum ? `<div class="alert warn">${resepBelum} resep belum diserahkan farmasi, jadi obatnya belum masuk tagihan.</div>` : '') + formAct('bayar', hidden('kid', k.id) + (harus > 0 ? `<div class="fld"><label for="bm">Metode pembayaran</label><select id="bm" name="metode"><option>Tunai</option><option>Debit</option><option>QRIS</option><option>Transfer</option></select></div><div class="fld" data-show-when="metode=Tunai"><label for="bd">Uang diterima</label><input id="bd" type="number" name="dibayar" min="${harus}" value="${harus}"></div><button class="btn green block">Terima pembayaran ${rupiah(harus)}</button>` : `<div class="alert info">Seluruh biaya ditanggung <b>${e(k.penjamin)}</b>. Pasien tidak membayar; tagihan dicatat untuk klaim.</div><button class="btn block">Selesaikan & catat klaim ${e(k.penjamin)}</button>`), confirmAttr('Proses pembayaran ' + rupiah(harus) + '?'))}</div>`}</div>`);
    return;
  }
  const p = Q('p', 'siap'), tg = Q('tgl', t);
  let list;
  if (p === 'lunas') list = where('tagihan', (x) => x.waktu_bayar.slice(0, 10) === tg).sort(by([(x) => x.waktu_bayar, -1])).map((x) => ({ ...kunjungan(x.kunjungan_id), tg: x }));
  else list = T('kunjungan').filter((k) => k.status !== 'Batal' && !sudahLunas(k.id) && (p === 'siap' ? k.status === 'Selesai' && (ranapOf(k.id) || {}).status !== 'Dirawat' : ['Menunggu', 'Dipanggil', 'Diperiksa'].includes(k.status) || (ranapOf(k.id) || {}).status === 'Dirawat')).sort(by([(k) => k.tanggal, -1], [(k) => k.id, -1])).slice(0, 100).map((k) => kunjungan(k.id));
  const hariIni = where('tagihan', (x) => x.waktu_bayar.slice(0, 10) === tg);
  page('Billing & Kasir', 'billing', '', `<div class="stats">${stat('Pendapatan ' + (tg === t ? 'hari ini' : tgl(tg)), rupiah(sum(hariIni, (x) => x.total - x.ditanggung)), 'green" style="font-size:22px')}${stat('Klaim BPJS / asuransi', rupiah(sum(hariIni, (x) => x.ditanggung)), 'blue" style="font-size:22px')}${stat('Transaksi', hariIni.length)}</div>
  ${tabs({ siap: 'Siap Dibayar', berjalan: 'Masih Dilayani', lunas: 'Lunas' }, p)}
  <div class="card flush">${p === 'lunas' ? `<div class="card-h">${formAct('cari', hidden('_m', 'billing') + hidden('p', 'lunas') + `<input type="date" name="tgl" value="${e(tg)}" aria-label="Tanggal"><button class="btn sm ghost">Tampilkan</button>`, 'class="inline-form"')}</div>` : ''}
  <div class="tbl-wrap"><table class="t"><thead><tr><th>Pasien</th><th>Kunjungan</th><th>Penjamin</th><th class="right">Total</th><th>Status</th><th></th></tr></thead><tbody>
  ${list.map((r) => `<tr><td><b>${e(r.nama_lengkap)}</b><span class="sm-line">${e(r.nomor_rm)}</span></td><td>${badge(r.jenis)} ${e(r.no_antrian)}<span class="sm-line">${e(r.poli_nama || '')} ${e(tgl(r.tanggal))}</span></td><td>${badge(r.penjamin)}</td><td class="right"><b>${rupiah(r.tg ? r.tg.total : totalOf(r.id))}</b></td>
    <td>${r.tg ? badge('Lunas') + `<span class="sm-line">${e(r.tg.metode)}</span>` : badge(p === 'siap' ? 'Belum Lunas' : 'Diperiksa')}</td><td><a class="btn sm${p === 'siap' ? '' : ' ghost'}" ${L('billing', { k: r.id })}>${p === 'siap' ? 'Bayar' : p === 'lunas' ? 'Kuitansi' : 'Lihat rincian'}</a></td></tr>`).join('') || emptyRow(6, 'Tidak ada tagihan di daftar ini.')}</tbody></table></div></div>`);
};
ACTIONS.bayar = (d) => {
  if (!tulis('kasir')) return;
  const k = kunjungan(d.kid); if (!k) return;
  if (sudahLunas(k.id)) return flash('err', 'Tagihan ini sudah lunas.');
  if ((ranapOf(k.id) || {}).status === 'Dirawat') return flash('err', 'Pasien masih dirawat. Pembayaran dilakukan setelah pasien dipulangkan.');
  const total = totalOf(k.id), ditanggung = ['BPJS', 'Asuransi'].includes(k.penjamin) ? total : 0, harus = total - ditanggung;
  let metode = harus > 0 ? d.metode : k.penjamin, dibayar = harus > 0 ? +d.dibayar || 0 : 0;
  if (harus > 0 && !['Tunai', 'Debit', 'QRIS', 'Transfer'].includes(metode)) return flash('err', 'Pilih metode pembayaran.');
  if (harus > 0 && metode === 'Tunai' && dibayar < harus) return flash('err', 'Uang yang diterima kurang dari total tagihan.');
  if (harus > 0 && metode !== 'Tunai') dibayar = harus;
  insert('tagihan', { kunjungan_id: k.id, total, ditanggung, dibayar, metode, kasir_id: user().id, waktu_bayar: now() });
  if (k.status !== 'Selesai') update('kunjungan', k.id, { status: 'Selesai' });
  audit('Pembayaran', `${k.nomor_rm} · ${rupiah(total)} · ${metode}`);
  flash('ok', 'Pembayaran diterima.' + (metode === 'Tunai' && dibayar > harus ? ' Kembalian ' + rupiah(dibayar - harus) + '.' : ''));
};

/* ===================== LAPORAN ===================== */
function bars(data, kosong = 'Belum ada data pada periode ini.') {
  if (!data.length) return `<p class="muted small">${e(kosong)}</p>`;
  const max = Math.max(...data.map((r) => r.n)) || 1;
  return data.map((r) => `<div class="bar-row"><span title="${e(r.label)}" class="ellip">${e(r.label)}</span><div class="bar"><i style="width:${Math.round((r.n / max) * 100)}%"></i></div><b class="right">${r.n}</b></div>`).join('');
}
const hitung = (arr, f) => { const m = {}; arr.forEach((x) => { const k = f(x); if (k != null) m[k] = (m[k] || 0) + 1; }); return Object.entries(m).map(([label, n]) => ({ label, n })).sort((a, b) => b.n - a.n); };
VIEWS.laporan = () => {
  let dari = Q('dari', today().slice(0, 8) + '01'), sampai = Q('sampai', today()); if (dari > sampai) [dari, sampai] = [sampai, dari];
  const inR = (s) => s && s.slice(0, 10) >= dari && s.slice(0, 10) <= sampai;
  const kun = where('kunjungan', (k) => inR(k.tanggal) && k.status !== 'Batal'), tag = where('tagihan', (x) => inR(x.waktu_bayar));
  const kap = sum(T('kamar'), (k) => k.kapasitas), isi = where('rawat_inap', (r) => r.status === 'Dirawat').length;
  const diag = hitung(kun, (k) => { const r = one('rekam_medis', (x) => x.kunjungan_id === k.id); return r && r.icd10_kode ? r.icd10_kode + ' · ' + ((one('icd10', (i) => i.kode === r.icd10_kode) || {}).nama || '') : null; }).slice(0, 10);
  const obatTop = (() => { const m = {}; where('mutasi_stok', (x) => x.jenis_item === 'obat' && x.tipe === 'Keluar' && inR(x.waktu)).forEach((x) => { const o = find('obat', x.item_id); if (o) m[o.nama] = (m[o.nama] || 0) + x.jumlah; }); return Object.entries(m).map(([label, n]) => ({ label, n })).sort((a, b) => b.n - a.n).slice(0, 8); })();
  page('Laporan & Dashboard', 'laporan', '', `<div class="page-head"><div><h1>Dashboard Manajemen</h1><p>Periode ${e(tgl(dari))} – ${e(tgl(sampai))}</p></div>
    ${formAct('cari', hidden('_m', 'laporan') + `<input type="date" name="dari" value="${e(dari)}" aria-label="Dari" style="min-width:150px"><input type="date" name="sampai" value="${e(sampai)}" aria-label="Sampai" style="min-width:150px"><button class="btn sm">Tampilkan</button><button type="button" class="btn sm ghost" data-export="${e(dari + '|' + sampai)}">Export CSV</button>`, 'class="inline-form"')}</div>
  <div class="stats">${stat('Kunjungan', kun.length, 'blue')}${stat('Pasien baru', where('pasien', (x) => inR(x.created_at)).length)}${stat('Admisi rawat inap', where('rawat_inap', (r) => inR(r.tanggal_masuk)).length, 'violet')}${stat('BOR saat ini', (kap ? Math.round((isi / kap) * 100) : 0) + '%', 'amber', `${isi} / ${kap} bed`)}
    ${stat('Pendapatan diterima', rupiah(sum(tag, (x) => x.total - x.ditanggung)), 'green" style="font-size:21px')}${stat('Klaim BPJS/asuransi', rupiah(sum(tag, (x) => x.ditanggung)), 'blue" style="font-size:21px')}</div>
  <div class="grid g2"><div class="card"><h3>Kunjungan per poli / unit</h3><p class="sub">Laporan pelayanan</p>${bars(hitung(kun, (k) => (find('poli', k.poli_id) || {}).nama || k.jenis))}</div>
    <div class="card"><h3>10 besar diagnosis (ICD-10)</h3><p class="sub">Dari rekam medis elektronik</p>${bars(diag)}</div>
    <div class="card"><h3>Kunjungan per hari</h3>${bars(hitung(kun, (k) => k.tanggal).sort((a, b) => (a.label < b.label ? -1 : 1)).map((r) => ({ ...r, label: tgl(r.label) })))}</div>
    <div class="card"><h3>Jenis kunjungan & penjamin</h3>${bars(hitung(kun, (k) => k.jenis))}<div style="height:10px"></div>${bars(hitung(kun, (k) => k.penjamin))}</div>
    <div class="card"><h3>Penunjang & farmasi</h3><dl class="kv"><dt>Order laboratorium</dt><dd>${where('order_penunjang', (o) => o.kategori === 'Lab' && o.status !== 'Batal' && inR(o.waktu_order)).length}</dd><dt>Order radiologi</dt><dd>${where('order_penunjang', (o) => o.kategori === 'Radiologi' && o.status !== 'Batal' && inR(o.waktu_order)).length}</dd><dt>Resep diserahkan</dt><dd>${where('resep', (r) => r.status === 'Diserahkan' && inR(r.waktu)).length}</dd></dl><h4 style="font-size:13.5px;margin:16px 0 8px">Obat paling banyak keluar</h4>${bars(obatTop)}</div>
    <div class="card"><h3>Laporan inventori — stok menipis</h3><p class="sub">Perlu pengadaan</p>${where('obat', (o) => o.stok <= o.stok_min).sort(by('stok')).map((s) => `<div class="li-row"><span>${e(s.nama)}</span><span><b style="color:var(--red)">${s.stok}</b> / min ${s.stok_min} ${e(s.satuan)}</span></div>`).join('') || '<p class="muted small">Semua stok aman.</p>'}</div></div>`);
};

boot();
</script>
</body>
</html>
