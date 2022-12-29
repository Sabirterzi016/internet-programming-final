<?php
 
 include "baglan.php";
  
 if(isset($_POST['guncelle'])){
  
     $sql = "UPDATE `rapor_icerik` 
         SET `icerik` = ?  WHERE `rapor_icerik`.`icerikId` = ?";
     $dizi=[
         $_POST['icerik'],
         $_POST['icerikId']
            ];
     $sorgu = $baglan->prepare($sql);
     $sorgu->execute($dizi);
  
     header("Location:icerikd.php");
 }
  
 $sql ="SELECT * FROM rapor_icerik WHERE icerikId = ?";
 $sorgu = $baglan->prepare($sql);
 $sorgu->execute([
     $_GET['icerikId']
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
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
                         <a href="icerikd.php" class="btn btn-outline-primary">Tüm Mesajlar</a>
                     </div>
                 </div>
             </div>
         </div>
     
     </header>
     <main>
     <div class="container">
         <form action="" method="post" class="row mt-4 g-3">
             <input type="hidden" name="uyeId" value="<?=$satir['icerikId']?>">
             <div class="col-6">
                 <label for="nameA" class="form-label">İçerik: </label>
                 <input type="text" class="form-control" name="icerik" value="<?=$satir['icerik']?>">
             </div>
             <button type="submit" name="guncelle" class="btn btn-primary">Güncelle</button>
         </form>
     </div>
     </main>
     <footer></footer>
 </body>
 </html>