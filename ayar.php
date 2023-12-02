```
<?php
$host = 'localhost'; // Veritabanı sunucusunun adresi
$dbname = 'örnek1_veritabanı'; // Veritabanı adı
$username = 'örnek1_admin'; // Veritabanı kullanıcı adı
$password = 'güçlü1parola_A'; // Veritabanı parolası

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Veritabanına bağlanırken bir hata oluştu: ' . $e->getMessage();
    die();
}
?>
```
