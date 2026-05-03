<?php
// ── Database Configuration ──────────────────────────────────────
define('DB_HOST', 'localhost');
define('DB_NAME', 'xpert_it_db');
define('DB_USER', 'root');         // change to your cPanel DB username
define('DB_PASS', '');             // change to your cPanel DB password
define('DB_CHAR', 'utf8mb4');

// ── PDO Connection ──────────────────────────────────────────────
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHAR,
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
} catch (PDOException $e) {
    // Show a clean error — never expose DB details in production
    die(json_encode(['error' => 'Database connection failed. Please try again later.']));
}