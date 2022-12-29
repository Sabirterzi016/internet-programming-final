<?php
 
include "baglan.php";
 
$sql ="SELECT * FROM iletisim WHERE iletisimId = ?";
$sorgu = $baglan->prepare($sql);
$sorgu->execute([
    $_GET['iletisimId']
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
<style>
   h5, h6{
        color:black;
    }
    span{
        color: maroon;
        font-weight:bold;
    }
    #s1{
        font-weight: none;
    }
</style>
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
                        <a href="mesajlar.php" class="btn btn-outline-primary">Tüm Mesajlar</a>
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
                    <h5 class="card-title"><span id="s1">Adı-Soyadı: </span><?=$satir["adi_soyadi"]?></h5>
                    <br><h6 class="card-subtitle mb-4"><span id="s1">E-posatası: </span><?=$satir["email"]?></h6>
                    
                    <h6 class="card-subtitle mb-4"><span id="s1">Mesaj-Konusu: </span><?=$satir["konu"]?></h6>
                    <h6 class="card-text"><span id="s1">Mesaj: </span><?=$satir["mesaj"]?></h6>
 
                </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer></footer>
</body>
</html>