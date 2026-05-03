<?php
session_start();

// Already logged in — go straight to dashboard
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: index.php');
    exit;
}

require_once '../config/db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username && $password) {
        $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = ? LIMIT 1");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username']  = $user['username'];
            header('Location: index.php');
            exit;
        } else {
            $error = 'Invalid username or password.';
        }
    } else {
        $error = 'Please enter both username and password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login — Xpert IT Solution</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --green:       #5BAD6F;
      --green-light: #EAF5EC;
      --green-mid:   #3D8C50;
      --ink:         #111111;
      --ink-60:      #6B6B6B;
      --ink-30:      #B8B8B8;
      --surface:     #FFFFFF;
      --surface-2:   #F7F8F6;
      --border:      #E8E8E4;
      --serif:       'DM Serif Display', serif;
      --sans:        'DM Sans', sans-serif;
      --spring:      cubic-bezier(0.34, 1.56, 0.64, 1);
    }
    body {
      font-family: var(--sans);
      background: var(--surface-2);
      min-height: 100svh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px;
      -webkit-font-smoothing: antialiased;
    }
    .login-wrap {
      width: 100%;
      max-width: 420px;
    }
    .login-brand {
      text-align: center;
      margin-bottom: 32px;
    }
    .login-brand-name {
      font-family: var(--serif);
      font-size: 1.5rem;
      color: var(--ink);
    }
    .login-brand-name em { font-style: italic; color: var(--green); }
    .login-brand-sub {
      font-size: 0.8rem;
      color: var(--ink-30);
      margin-top: 6px;
      letter-spacing: 0.06em;
      text-transform: uppercase;
    }
    .login-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 4px 32px rgba(0,0,0,.06);
    }
    .login-title {
      font-family: var(--serif);
      font-size: 1.5rem;
      color: var(--ink);
      margin-bottom: 6px;
    }
    .login-sub {
      font-size: 0.875rem;
      color: var(--ink-60);
      margin-bottom: 28px;
    }
    .login-error {
      background: #fff0f0;
      border: 1px solid rgba(192,57,43,.2);
      color: #c0392b;
      border-radius: 10px;
      padding: 12px 16px;
      font-size: 0.875rem;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .login-field {
      display: flex;
      flex-direction: column;
      gap: 6px;
      margin-bottom: 16px;
    }
    .login-label {
      font-size: 0.8rem;
      font-weight: 500;
      color: var(--ink-60);
    }
    .login-input {
      width: 100%;
      padding: 13px 16px;
      border: 1.5px solid var(--border);
      border-radius: 10px;
      font-family: var(--sans);
      font-size: 0.9375rem;
      color: var(--ink);
      outline: none;
      transition: border-color 0.2s, box-shadow 0.2s;
      background: var(--surface);
    }
    .login-input:focus {
      border-color: var(--green);
      box-shadow: 0 0 0 3px rgba(91,173,111,.1);
    }
    .login-btn {
      width: 100%;
      margin-top: 8px;
      padding: 14px;
      background: var(--ink);
      color: #fff;
      border: none;
      border-radius: 100px;
      font-family: var(--sans);
      font-size: 0.9rem;
      font-weight: 500;
      cursor: pointer;
      transition: background 0.2s, transform 0.2s var(--spring);
    }
    .login-btn:hover {
      background: var(--green);
      transform: translateY(-1px);
    }
    .login-footer {
      text-align: center;
      margin-top: 20px;
      font-size: 0.78rem;
      color: var(--ink-30);
    }
    .login-footer a {
      color: var(--green);
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="login-wrap">
    <div class="login-brand">
      <p class="login-brand-name">Xpert <em>IT Solution</em></p>
      <p class="login-brand-sub">Admin Panel</p>
    </div>

    <div class="login-card">
      <h1 class="login-title">Welcome back</h1>
      <p class="login-sub">Sign in to access the admin dashboard.</p>

      <?php if ($error): ?>
        <div class="login-error">&#x26A0; <?php echo htmlspecialchars($error); ?></div>
      <?php endif; ?>

      <form method="POST" action="login.php">
        <div class="login-field">
          <label class="login-label" for="username">Username</label>
          <input
            class="login-input"
            type="text"
            id="username"
            name="username"
            placeholder="admin"
            value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>"
            required
            autofocus
          />
        </div>
        <div class="login-field">
          <label class="login-label" for="password">Password</label>
          <input
            class="login-input"
            type="password"
            id="password"
            name="password"
            placeholder="••••••••"
            required
          />
        </div>
        <button class="login-btn" type="submit">Sign In &rarr;</button>
      </form>
    </div>

    <p class="login-footer">
      <a href="../index.php">&larr; Back to website</a>
    </p>
  </div>

</body>
</html>