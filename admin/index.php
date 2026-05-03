<?php
session_start();

// ── Auth guard ──────────────────────────────────────────────────
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

require_once '../config/db.php';

// ── Delete single enquiry ───────────────────────────────────────
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM enquiries WHERE id = ?");
    $stmt->execute([(int)$_GET['delete']]);
    header('Location: index.php?deleted=1');
    exit;
}

// ── Filters ─────────────────────────────────────────────────────
$filterProgram = $_GET['program'] ?? '';
$filterType    = $_GET['type']    ?? '';
$filterSearch  = trim($_GET['search'] ?? '');
$page          = max(1, (int)($_GET['page'] ?? 1));
$perPage       = 10;
$offset        = ($page - 1) * $perPage;

$where  = [];
$params = [];

if ($filterProgram) { $where[] = 'program = ?';              $params[] = $filterProgram; }
if ($filterType)    { $where[] = 'type = ?';                 $params[] = $filterType;    }
if ($filterSearch)  { $where[] = '(name LIKE ? OR email LIKE ? OR subject LIKE ?)';
                      $s = "%$filterSearch%";
                      $params[] = $s; $params[] = $s; $params[] = $s; }

$whereSQL = $where ? 'WHERE ' . implode(' AND ', $where) : '';

// Total count
$countStmt = $pdo->prepare("SELECT COUNT(*) FROM enquiries $whereSQL");
$countStmt->execute($params);
$totalRows  = (int)$countStmt->fetchColumn();
$totalPages = max(1, ceil($totalRows / $perPage));

// Fetch page
$dataParams = array_merge($params, [$perPage, $offset]);
$stmt = $pdo->prepare("SELECT * FROM enquiries $whereSQL ORDER BY submitted_at DESC LIMIT ? OFFSET ?");
// PDO needs explicit int binding for LIMIT/OFFSET
foreach ($dataParams as $i => $val) {
    $stmt->bindValue($i + 1, $val, (is_int($val) ? PDO::PARAM_INT : PDO::PARAM_STR));
}
$stmt->execute();
$enquiries = $stmt->fetchAll();

// Stats
$stats = $pdo->query("
    SELECT
        COUNT(*)                                          AS total,
        SUM(DATE(submitted_at) = CURDATE())              AS today,
        SUM(submitted_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)) AS week,
        COUNT(DISTINCT program)                          AS programs
    FROM enquiries
")->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard — Xpert IT Admin</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --green:       #5BAD6F;
      --green-light: #EAF5EC;
      --green-mid:   #3D8C50;
      --blue:        #00AEEF;
      --blue-light:  #E5F7FD;
      --ink:         #111111;
      --ink-60:      #6B6B6B;
      --ink-30:      #B8B8B8;
      --surface:     #FFFFFF;
      --surface-2:   #F7F8F6;
      --border:      #E8E8E4;
      --red:         #e74c3c;
      --red-light:   #fdf0ef;
      --serif:       'DM Serif Display', serif;
      --sans:        'DM Sans', sans-serif;
      --nav-h:       64px;
      --sidebar-w:   240px;
    }
    html, body { height: 100%; }
    body {
      font-family: var(--sans);
      background: var(--surface-2);
      color: var(--ink);
      -webkit-font-smoothing: antialiased;
      display: flex;
    }

    /* ── SIDEBAR ── */
    .adm-sidebar {
      width: var(--sidebar-w);
      min-height: 100svh;
      background: var(--ink);
      display: flex;
      flex-direction: column;
      flex-shrink: 0;
      position: fixed;
      top: 0; left: 0; bottom: 0;
    }
    .adm-sidebar-brand {
      padding: 24px 20px;
      border-bottom: 1px solid rgba(255,255,255,.07);
    }
    .adm-sidebar-brand-name {
      font-family: var(--serif);
      font-size: 1.1rem;
      color: #fff;
    }
    .adm-sidebar-brand-name em { font-style: italic; color: var(--green); }
    .adm-sidebar-brand-sub {
      font-size: 0.7rem;
      color: rgba(255,255,255,.3);
      margin-top: 3px;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }
    .adm-nav {
      padding: 16px 12px;
      flex: 1;
    }
    .adm-nav-label {
      font-size: 0.65rem;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: rgba(255,255,255,.2);
      padding: 8px 8px 6px;
    }
    .adm-nav-link {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 9px 12px;
      border-radius: 8px;
      font-size: 0.875rem;
      color: rgba(255,255,255,.55);
      text-decoration: none;
      transition: background 0.2s, color 0.2s;
      margin-bottom: 2px;
    }
    .adm-nav-link:hover { background: rgba(255,255,255,.06); color: #fff; }
    .adm-nav-link.active { background: rgba(91,173,111,.15); color: var(--green); }
    .adm-nav-icon { font-size: 1rem; width: 20px; text-align: center; }
    .adm-sidebar-footer {
      padding: 16px 12px;
      border-top: 1px solid rgba(255,255,255,.07);
    }
    .adm-logout {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 9px 12px;
      border-radius: 8px;
      font-size: 0.875rem;
      color: rgba(255,255,255,.4);
      text-decoration: none;
      transition: background 0.2s, color 0.2s;
    }
    .adm-logout:hover { background: rgba(231,76,60,.1); color: var(--red); }
    .adm-user {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 12px;
      margin-bottom: 8px;
    }
    .adm-user-avatar {
      width: 32px; height: 32px;
      border-radius: 50%;
      background: var(--green);
      display: flex; align-items: center; justify-content: center;
      font-size: 0.8rem; font-weight: 600; color: #fff;
      flex-shrink: 0;
    }
    .adm-user-name { font-size: 0.85rem; color: rgba(255,255,255,.7); font-weight: 500; }
    .adm-user-role { font-size: 0.7rem; color: rgba(255,255,255,.3); }

    /* ── MAIN ── */
    .adm-main {
      margin-left: var(--sidebar-w);
      flex: 1;
      display: flex;
      flex-direction: column;
      min-height: 100svh;
    }

    /* ── TOPBAR ── */
    .adm-topbar {
      height: var(--nav-h);
      background: var(--surface);
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 32px;
      gap: 16px;
      position: sticky; top: 0; z-index: 100;
    }
    .adm-topbar-title {
      font-family: var(--serif);
      font-size: 1.125rem;
      color: var(--ink);
    }
    .adm-topbar-title em { font-style: italic; color: var(--green); }
    .adm-topbar-right {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .adm-search {
      display: flex;
      align-items: center;
      gap: 8px;
      background: var(--surface-2);
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 8px 14px;
    }
    .adm-search input {
      border: none;
      background: none;
      font-family: var(--sans);
      font-size: 0.875rem;
      color: var(--ink);
      outline: none;
      width: 200px;
    }
    .adm-search input::placeholder { color: var(--ink-30); }

    /* ── CONTENT ── */
    .adm-content { padding: 32px; flex: 1; }

    /* ── ALERTS ── */
    .adm-alert {
      padding: 12px 16px;
      border-radius: 10px;
      font-size: 0.875rem;
      margin-bottom: 24px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .adm-alert--success { background: var(--green-light); color: var(--green-mid); border: 1px solid rgba(91,173,111,.2); }

    /* ── STAT CARDS ── */
    .adm-stats {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-bottom: 32px;
    }
    .adm-stat-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 20px;
      transition: box-shadow 0.25s;
    }
    .adm-stat-card:hover { box-shadow: 0 4px 20px rgba(0,0,0,.06); }
    .adm-stat-label {
      font-size: 0.72rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--ink-30);
      margin-bottom: 8px;
    }
    .adm-stat-num {
      font-family: var(--serif);
      font-size: 2rem;
      line-height: 1;
      color: var(--ink);
    }
    .adm-stat-num.green { color: var(--green); }
    .adm-stat-sub {
      font-size: 0.75rem;
      color: var(--ink-30);
      margin-top: 4px;
    }

    /* ── FILTERS ── */
    .adm-filters {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }
    .adm-filter-select {
      padding: 8px 12px;
      border: 1px solid var(--border);
      border-radius: 8px;
      font-family: var(--sans);
      font-size: 0.85rem;
      color: var(--ink-60);
      background: var(--surface);
      outline: none;
      cursor: pointer;
      transition: border-color 0.2s;
    }
    .adm-filter-select:focus { border-color: var(--green); }
    .adm-filter-btn {
      padding: 8px 18px;
      border-radius: 8px;
      border: 1px solid var(--green);
      background: var(--green-light);
      color: var(--green-mid);
      font-family: var(--sans);
      font-size: 0.85rem;
      font-weight: 500;
      cursor: pointer;
      text-decoration: none;
      transition: background 0.2s;
    }
    .adm-filter-btn:hover { background: var(--green); color: #fff; }
    .adm-filter-reset {
      padding: 8px 14px;
      border-radius: 8px;
      border: 1px solid var(--border);
      background: none;
      color: var(--ink-60);
      font-family: var(--sans);
      font-size: 0.85rem;
      cursor: pointer;
      text-decoration: none;
      transition: border-color 0.2s, color 0.2s;
    }
    .adm-filter-reset:hover { border-color: var(--ink); color: var(--ink); }

    /* ── TABLE ── */
    .adm-table-wrap {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 14px;
      overflow: hidden;
    }
    .adm-table-header {
      padding: 16px 20px;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .adm-table-header-title {
      font-size: 0.875rem;
      font-weight: 500;
      color: var(--ink);
    }
    .adm-table-count {
      font-size: 0.78rem;
      color: var(--ink-30);
    }
    table { width: 100%; border-collapse: collapse; }
    thead th {
      padding: 12px 16px;
      text-align: left;
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--ink-30);
      background: var(--surface-2);
      border-bottom: 1px solid var(--border);
      white-space: nowrap;
    }
    tbody tr {
      border-bottom: 1px solid var(--border);
      transition: background 0.15s;
    }
    tbody tr:last-child { border-bottom: none; }
    tbody tr:hover { background: var(--surface-2); }
    td {
      padding: 14px 16px;
      font-size: 0.875rem;
      color: var(--ink-60);
      vertical-align: middle;
    }
    .adm-td-name { font-weight: 500; color: var(--ink); }
    .adm-td-email a { color: var(--green); text-decoration: none; }
    .adm-td-email a:hover { text-decoration: underline; }
    .adm-badge {
      display: inline-block;
      padding: 3px 9px;
      border-radius: 100px;
      font-size: 0.68rem;
      font-weight: 600;
      letter-spacing: 0.05em;
    }
    .adm-badge--enrolment   { background: var(--green-light);  color: var(--green-mid); }
    .adm-badge--information { background: var(--blue-light);   color: var(--blue); }
    .adm-badge--visit       { background: #fff8e5;             color: #b07d00; }
    .adm-badge--corporate   { background: #f0f0ff;             color: #5b2be8; }
    .adm-badge--other       { background: var(--surface-2);    color: var(--ink-60); }
    .adm-td-date { white-space: nowrap; font-size: 0.8rem; }
    .adm-td-actions { white-space: nowrap; }
    .adm-btn-view {
      display: inline-flex; align-items: center; gap: 4px;
      padding: 5px 12px; border-radius: 6px;
      font-size: 0.78rem; font-weight: 500;
      background: var(--surface-2); color: var(--ink-60);
      border: 1px solid var(--border);
      cursor: pointer; text-decoration: none;
      transition: border-color 0.2s, color 0.2s;
    }
    .adm-btn-view:hover { border-color: var(--green); color: var(--green); }
    .adm-btn-delete {
      display: inline-flex; align-items: center; gap: 4px;
      padding: 5px 12px; border-radius: 6px;
      font-size: 0.78rem; font-weight: 500;
      background: var(--red-light); color: var(--red);
      border: 1px solid rgba(231,76,60,.2);
      cursor: pointer; text-decoration: none;
      margin-left: 6px;
      transition: background 0.2s, color 0.2s;
    }
    .adm-btn-delete:hover { background: var(--red); color: #fff; }
    .adm-empty {
      text-align: center;
      padding: 48px 24px;
      color: var(--ink-30);
      font-size: 0.9rem;
    }
    .adm-empty-icon { font-size: 2.5rem; margin-bottom: 12px; }

    /* ── MODAL ── */
    .adm-modal-bg {
      display: none;
      position: fixed; inset: 0;
      background: rgba(0,0,0,.4);
      backdrop-filter: blur(4px);
      z-index: 1000;
      align-items: center;
      justify-content: center;
      padding: 24px;
    }
    .adm-modal-bg.open { display: flex; }
    .adm-modal {
      background: var(--surface);
      border-radius: 20px;
      max-width: 560px;
      width: 100%;
      max-height: 90svh;
      overflow-y: auto;
      box-shadow: 0 20px 60px rgba(0,0,0,.15);
    }
    .adm-modal-header {
      padding: 20px 24px;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .adm-modal-title { font-family: var(--serif); font-size: 1.1rem; }
    .adm-modal-close {
      width: 32px; height: 32px;
      border-radius: 50%;
      border: 1px solid var(--border);
      background: none;
      cursor: pointer;
      font-size: 1rem;
      display: flex; align-items: center; justify-content: center;
      color: var(--ink-60);
      transition: background 0.2s;
    }
    .adm-modal-close:hover { background: var(--surface-2); }
    .adm-modal-body { padding: 24px; }
    .adm-modal-row {
      display: grid;
      grid-template-columns: 130px 1fr;
      gap: 8px;
      padding: 10px 0;
      border-bottom: 1px solid var(--border);
      font-size: 0.875rem;
    }
    .adm-modal-row:last-child { border-bottom: none; }
    .adm-modal-key { font-weight: 500; color: var(--ink-60); }
    .adm-modal-val { color: var(--ink); line-height: 1.6; }

    /* ── PAGINATION ── */
    .adm-pagination {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      padding: 20px;
      border-top: 1px solid var(--border);
    }
    .adm-page-btn {
      width: 36px; height: 36px;
      border-radius: 8px;
      border: 1px solid var(--border);
      background: var(--surface);
      display: flex; align-items: center; justify-content: center;
      font-size: 0.875rem;
      color: var(--ink-60);
      text-decoration: none;
      transition: border-color 0.2s, color 0.2s, background 0.2s;
    }
    .adm-page-btn:hover { border-color: var(--green); color: var(--green); }
    .adm-page-btn.active { background: var(--green); border-color: var(--green); color: #fff; }
    .adm-page-btn.disabled { opacity: 0.35; pointer-events: none; }
  </style>
</head>
<body>

  <!-- ── SIDEBAR ── -->
  <aside class="adm-sidebar">
    <div class="adm-sidebar-brand">
      <p class="adm-sidebar-brand-name">Xpert <em>IT</em></p>
      <p class="adm-sidebar-brand-sub">Admin Panel</p>
    </div>
    <nav class="adm-nav">
      <p class="adm-nav-label">Menu</p>
      <a href="index.php" class="adm-nav-link active">
        <span class="adm-nav-icon">&#x1F4CB;</span> Enquiries
      </a>
      <a href="../index.php" class="adm-nav-link" target="_blank">
        <span class="adm-nav-icon">&#x1F30D;</span> View Website
      </a>
    </nav>
    <div class="adm-sidebar-footer">
      <div class="adm-user">
        <div class="adm-user-avatar"><?php echo strtoupper(substr($_SESSION['admin_username'], 0, 1)); ?></div>
        <div>
          <div class="adm-user-name"><?php echo htmlspecialchars($_SESSION['admin_username']); ?></div>
          <div class="adm-user-role">Administrator</div>
        </div>
      </div>
      <a href="logout.php" class="adm-logout">
        <span class="adm-nav-icon">&#x1F6AA;</span> Sign Out
      </a>
    </div>
  </aside>

  <!-- ── MAIN ── -->
  <main class="adm-main">

    <!-- Topbar -->
    <div class="adm-topbar">
      <h1 class="adm-topbar-title">Enquiries <em>Dashboard</em></h1>
      <div class="adm-topbar-right">
        <form class="adm-search" method="GET" action="index.php">
          <span>&#x1F50D;</span>
          <input
            type="text"
            name="search"
            placeholder="Search name, email, subject…"
            value="<?php echo htmlspecialchars($filterSearch); ?>"
          />
          <?php if ($filterProgram): ?><input type="hidden" name="program" value="<?php echo htmlspecialchars($filterProgram); ?>"><?php endif; ?>
          <?php if ($filterType):    ?><input type="hidden" name="type"    value="<?php echo htmlspecialchars($filterType);    ?>"><?php endif; ?>
        </form>
      </div>
    </div>

    <!-- Content -->
    <div class="adm-content">

      <?php if (isset($_GET['deleted'])): ?>
        <div class="adm-alert adm-alert--success">&#10003; Enquiry deleted successfully.</div>
      <?php endif; ?>

      <!-- Stats -->
      <div class="adm-stats">
        <div class="adm-stat-card">
          <div class="adm-stat-label">Total Enquiries</div>
          <div class="adm-stat-num green"><?php echo (int)$stats['total']; ?></div>
          <div class="adm-stat-sub">All time</div>
        </div>
        <div class="adm-stat-card">
          <div class="adm-stat-label">Today</div>
          <div class="adm-stat-num"><?php echo (int)$stats['today']; ?></div>
          <div class="adm-stat-sub"><?php echo date('d M Y'); ?></div>
        </div>
        <div class="adm-stat-card">
          <div class="adm-stat-label">This Week</div>
          <div class="adm-stat-num"><?php echo (int)$stats['week']; ?></div>
          <div class="adm-stat-sub">Last 7 days</div>
        </div>
        <div class="adm-stat-card">
          <div class="adm-stat-label">Programs Enquired</div>
          <div class="adm-stat-num"><?php echo (int)$stats['programs']; ?></div>
          <div class="adm-stat-sub">Unique programs</div>
        </div>
      </div>

      <!-- Filters -->
      <form class="adm-filters" method="GET" action="index.php">
        <?php if ($filterSearch): ?><input type="hidden" name="search" value="<?php echo htmlspecialchars($filterSearch); ?>"><?php endif; ?>
        <select class="adm-filter-select" name="program" onchange="this.form.submit()">
          <option value="">All Programs</option>
          <option value="web-dev"   <?php echo $filterProgram === 'web-dev'   ? 'selected' : ''; ?>>Web &amp; App Dev</option>
          <option value="cyber"     <?php echo $filterProgram === 'cyber'     ? 'selected' : ''; ?>>Cyber Security</option>
          <option value="data-ai"   <?php echo $filterProgram === 'data-ai'   ? 'selected' : ''; ?>>Data Science &amp; AI</option>
          <option value="ui-ux"     <?php echo $filterProgram === 'ui-ux'     ? 'selected' : ''; ?>>UI / UX Design</option>
          <option value="mobile"    <?php echo $filterProgram === 'mobile'    ? 'selected' : ''; ?>>Mobile Dev</option>
          <option value="cloud"     <?php echo $filterProgram === 'cloud'     ? 'selected' : ''; ?>>Cloud &amp; Networking</option>
          <option value="graphic"   <?php echo $filterProgram === 'graphic'   ? 'selected' : ''; ?>>Graphic Design</option>
          <option value="bi"        <?php echo $filterProgram === 'bi'        ? 'selected' : ''; ?>>Business Intelligence</option>
          <option value="forensics" <?php echo $filterProgram === 'forensics' ? 'selected' : ''; ?>>Digital Forensics</option>
          <option value="other"     <?php echo $filterProgram === 'other'     ? 'selected' : ''; ?>>Other</option>
        </select>
        <select class="adm-filter-select" name="type" onchange="this.form.submit()">
          <option value="">All Types</option>
          <option value="enrolment"   <?php echo $filterType === 'enrolment'   ? 'selected' : ''; ?>>Enrolment</option>
          <option value="information" <?php echo $filterType === 'information' ? 'selected' : ''; ?>>General Info</option>
          <option value="visit"       <?php echo $filterType === 'visit'       ? 'selected' : ''; ?>>Campus Visit</option>
          <option value="corporate"   <?php echo $filterType === 'corporate'   ? 'selected' : ''; ?>>Corporate</option>
        </select>
        <?php if ($filterProgram || $filterType || $filterSearch): ?>
          <a href="index.php" class="adm-filter-reset">&#x2715; Clear</a>
        <?php endif; ?>
      </form>

      <!-- Table -->
      <div class="adm-table-wrap">
        <div class="adm-table-header">
          <span class="adm-table-header-title">All Enquiries</span>
          <span class="adm-table-count"><?php echo $totalRows; ?> result<?php echo $totalRows !== 1 ? 's' : ''; ?></span>
        </div>

        <?php if (empty($enquiries)): ?>
          <div class="adm-empty">
            <div class="adm-empty-icon">&#x1F4ED;</div>
            <p>No enquiries found matching your filters.</p>
          </div>
        <?php else: ?>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Program</th>
                <th>Type</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($enquiries as $row): ?>
                <tr>
                  <td><?php echo (int)$row['id']; ?></td>
                  <td class="adm-td-name"><?php echo htmlspecialchars($row['name']); ?></td>
                  <td class="adm-td-email">
                    <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>">
                      <?php echo htmlspecialchars($row['email']); ?>
                    </a>
                  </td>
                  <td><?php echo htmlspecialchars($row['phone'] ?: '—'); ?></td>
                  <td><?php echo htmlspecialchars($row['program'] ?: '—'); ?></td>
                  <td>
                    <span class="adm-badge adm-badge--<?php echo htmlspecialchars($row['type'] ?: 'other'); ?>">
                      <?php echo htmlspecialchars(ucfirst($row['type'] ?: 'other')); ?>
                    </span>
                  </td>
                  <td class="adm-td-date">
                    <?php echo date('d M Y', strtotime($row['submitted_at'])); ?>
                    <br/><small><?php echo date('h:i A', strtotime($row['submitted_at'])); ?></small>
                  </td>
                  <td class="adm-td-actions">
                    <button
                      class="adm-btn-view"
                      onclick='openModal(<?php echo json_encode($row); ?>)'
                    >&#x1F441; View</button>
                    <a
                      href="index.php?delete=<?php echo (int)$row['id']; ?><?php echo $filterProgram ? '&program='.urlencode($filterProgram) : ''; ?><?php echo $filterType ? '&type='.urlencode($filterType) : ''; ?>"
                      class="adm-btn-delete"
                      onclick="return confirm('Delete this enquiry from <?php echo htmlspecialchars(addslashes($row['name'])); ?>? This cannot be undone.')"
                    >&#x1F5D1; Delete</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <!-- Pagination -->
          <?php if ($totalPages > 1): ?>
            <div class="adm-pagination">
              <a href="?page=<?php echo $page - 1; ?>&program=<?php echo urlencode($filterProgram); ?>&type=<?php echo urlencode($filterType); ?>&search=<?php echo urlencode($filterSearch); ?>"
                 class="adm-page-btn <?php echo $page <= 1 ? 'disabled' : ''; ?>">&#8592;</a>
              <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?php echo $i; ?>&program=<?php echo urlencode($filterProgram); ?>&type=<?php echo urlencode($filterType); ?>&search=<?php echo urlencode($filterSearch); ?>"
                   class="adm-page-btn <?php echo $i === $page ? 'active' : ''; ?>"><?php echo $i; ?></a>
              <?php endfor; ?>
              <a href="?page=<?php echo $page + 1; ?>&program=<?php echo urlencode($filterProgram); ?>&type=<?php echo urlencode($filterType); ?>&search=<?php echo urlencode($filterSearch); ?>"
                 class="adm-page-btn <?php echo $page >= $totalPages ? 'disabled' : ''; ?>">&#8594;</a>
            </div>
          <?php endif; ?>

        <?php endif; ?>
      </div>

    </div><!-- /adm-content -->
  </main>

  <!-- ── DETAIL MODAL ── -->
  <div class="adm-modal-bg" id="admModal">
    <div class="adm-modal">
      <div class="adm-modal-header">
        <h2 class="adm-modal-title" id="modalTitle">Enquiry Detail</h2>
        <button class="adm-modal-close" onclick="closeModal()">&#x2715;</button>
      </div>
      <div class="adm-modal-body" id="modalBody"></div>
    </div>
  </div>

  <script>
    function openModal(row) {
      const fields = {
        'Name':       row.name,
        'Email':      row.email,
        'Phone':      row.phone      || '—',
        'Program':    row.program    || '—',
        'Subject':    row.subject    || '—',
        'Type':       row.type       || '—',
        'Message':    row.message,
        'Submitted':  row.submitted_at
      };
      document.getElementById('modalTitle').textContent = 'Enquiry from ' + row.name;
      let html = '';
      for (const [key, val] of Object.entries(fields)) {
        html += `<div class="adm-modal-row">
          <span class="adm-modal-key">${key}</span>
          <span class="adm-modal-val">${val.replace(/\n/g,'<br/>')}</span>
        </div>`;
      }
      document.getElementById('modalBody').innerHTML = html;
      document.getElementById('admModal').classList.add('open');
      document.body.style.overflow = 'hidden';
    }
    function closeModal() {
      document.getElementById('admModal').classList.remove('open');
      document.body.style.overflow = '';
    }
    document.getElementById('admModal').addEventListener('click', function(e) {
      if (e.target === this) closeModal();
    });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
  </script>

</body>
</html>