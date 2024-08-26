<?php

define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "gokhan");
define("DB_NAME", "sozluk");
// Veritabanına bağlantı kur
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Bağlantı başarısız olursa hata mesajı ver
if (!$conn) {
    die('MySQL bağlantısı başarısız: ' . mysqli_connect_error());
}

// Karakter setini UTF-8 olarak ayarla
if (!mysqli_set_charset($conn, "utf8")) {
    die("UTF-8 karakter seti ayarlanamadı: " . mysqli_error($conn));
}