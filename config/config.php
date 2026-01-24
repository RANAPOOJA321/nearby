<?php
// Load .env manually (simple way)
$envPath = __DIR__ . '/.env';
if (file_exists($envPath)) {
	foreach (file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
		if (str_starts_with(trim($line), '#')) continue;
		[$key, $value] = explode('=', $line, 2);
		putenv(trim($key) . '=' . trim($value));
	}
}

$serverName = $_SERVER['SERVER_NAME'] ?? 'localhost';
$isLocal = in_array($serverName, ['localhost', '127.0.0.1'], true);

if ($isLocal) {
	define('DB_HOST', getenv('LOCAL_DB_HOST'));
	define('DB_PORT', getenv('LOCAL_DB_PORT'));
	define('DB_NAME', getenv('LOCAL_DB_NAME'));
	define('DB_USER', getenv('LOCAL_DB_USER'));
	define('DB_PASS', getenv('LOCAL_DB_PASS'));
	define('BASE_URL', getenv('LOCAL_BASE_URL'));
} else {
	define('DB_HOST', getenv('LIVE_DB_HOST'));
	define('DB_PORT', getenv('LIVE_DB_PORT'));
	define('DB_NAME', getenv('LIVE_DB_NAME'));
	define('DB_USER', getenv('LIVE_DB_USER'));
	define('DB_PASS', getenv('LIVE_DB_PASS'));
	define('BASE_URL', getenv('LIVE_BASE_URL'));
}

define('DB_CHARSET', 'utf8mb4');

define('GEMINI_API_KEY', getenv('GEMINI_API_KEY'));
define('GEMINI_MODEL', getenv('GEMINI_MODEL'));
