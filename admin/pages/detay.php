<?php
 
include "baglan.php";
 
$sql ="SELECT * FROM uyeler WHERE uyeId = ?";
$sorgu = $baglan->prepare($sql);
$sorgu->execute([
    $_GET['uyeId']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dip Yatırım</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center">Dip Yatırım</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="ayarlar.php" class="btn btn-outline-primary">Tüm Üyeler</a>
                        <a href="ekle.php" class="btn btn-outline-primary">Üye Ekle</a>
                    </div>
                </div>
            </div>
        </div>
    
    </header>
    <main>    
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Üye Adı:
                    <?=$satir["uyeAdi"]?> <?=$satir["uyeSoyadi"]?>  
                    </h5><br>
                    <h6 class="card-subtitle mb-4">Kulanıcıadı: <?=$satir["kullaniciAdi"]?></h6>
                    <p class="card-text">Şifre: <?=$satir["kullaniciSifre"]?></p>
 
                </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer></footer>
</body>
</html>