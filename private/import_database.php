<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../config/db.php';

$conn = nearby_db_connect();

// 1️⃣ Delete all tables in the database
$result = $conn->query("SHOW TABLES");
if ($result) {
    while ($row = $result->fetch_array()) {
        $table = $row[0];
        $drop = $conn->query("DROP TABLE IF EXISTS `$table`");
        if ($drop) {
            echo "🗑️ Dropped table: $table\n";
        } else {
            echo "❌ Failed to drop table $table: " . $conn->error . "\n";
        }
    }
} else {
    die("❌ Failed to fetch tables: " . $conn->error);
}

// 2️⃣ Path to your SQL file
$sqlFile = dirname(__DIR__) . '/database/schema.sql';
if (!file_exists($sqlFile)) {
    die("❌ File $sqlFile not found.\n");
}

// 3️⃣ Execute schema.sql
$sql = file_get_contents($sqlFile);

// Hosting environments often block CREATE DATABASE/USE statements; strip them to avoid permission errors.
$sql = preg_replace('/CREATE\s+DATABASE[^;]*;\s*/i', '', $sql);
$sql = preg_replace('/USE\s+[`\"\[]?[\w-]+[`\"\]]?;\s*/i', '', $sql);

if ($conn->multi_query($sql)) {
    do {
        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->next_result());
    echo "✅ schema.sql executed successfully.\n";
} else {
    echo "❌ Error executing schema.sql: " . $conn->error . "\n";
}

$conn->close();
