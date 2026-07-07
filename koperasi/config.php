<?php
$host     = getenv('PGHOST')     ?: "localhost";
$port     = getenv('PGPORT')     ?: "5432";
$dbname   = getenv('PGDATABASE') ?: "koperasi_db";
$user     = getenv('PGUSER')     ?: "postgres";
$password = getenv('PGPASSWORD') ?: "salsabila"; // <-- Isi password laptop Anda di sini

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";

try {
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    die("Koneksi Gagal: " . $e->getMessage());
}
?>