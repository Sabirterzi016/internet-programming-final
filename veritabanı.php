<?php
try {
    $conn = new PDO("mysql:hoat=127.0.0.1;dbname=dpu;charse=utf8", 'root','root');
}catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
/* Insert */ 
$conn  
    ->prepare(("INSERT INTO uyeler(isim) VALUES (?)"))
    ->execute(['İlayda']);



print_r ($uyeler->fetchAll()[0]);


?>