<?php

include("conn.php");

$nameA_err="";
$surnameA_err="";
$usernameA_err="";
$emailA_err="";
$userpasswordA_err="";
$userpasswordrepatA_err="";

if (isset($_POST["kaydet"]))
{

      /*Uye adı boş geçilemez uyarısı!*/
    if (empty($_POST["nameA"]))
    {
      $nameA_err="Üye adı boş geçilemez!";
    }
    else
    {
        $nameA=$_POST["nameA"];
    }

      /*Uye soyadı boş geçilemez uyarısı!*/
    if (empty($_POST["surnameA"]))
    {
      $surnameA_err="Üye soyadı boş geçilemez!";
    }
    else
    {
        $surnameA=$_POST["surnameA"];
    }

      /*Uye kulanıcıadı boş geçilemez uyarısı!*/
    if (empty($_POST["usernameA"]))
    {
      $usernameA_err="Kulanıcıadı boş geçilemez!";
    }
    else if(strlen($_POST["usernameA"])<6)
    {
        $usernameA_err="Kulanıcıadı en az 7 karakter olmalıdır!";
    }
    else
    {
      $usernameA=$_POST["usernameA"];
    }
    
      /*Uye e-posta boş geçilemez uyarısı!*/
    if (empty($_POST["emailA"]))
    {
       $emailA_err="E-posta boş geçilemez!";
    }
    else if (!filter_var($_POST["emailA"], FILTER_VALIDATE_EMAIL)) {
        $emailA_err = "Geçersiz E-posta";
    }
    else
    {
        $emailA=$_POST["emailA"];
    }

    /*Parola doğrulama işlemi*/
    if(empty($_POST["userpasswordA"]))
    {
        $userpasswordA_err="Parola boş geçilemez!";
    }
    else 
    {
      $userpasswordA=password_hash($_POST["userpasswordA"], PASSWORD_DEFAULT);
    }

    if (isset($nameA) && isset($surnameA) && isset($usernameA) && isset($emailA) && isset($userpasswordA))
    {

    $ekle ="INSERT INTO uyeler (uyeAdi, uyeSoyadi, kullaniciAdi, email, kullaniciSifre) VALUES ('$nameA','$surnameA','$usernameA', '$emailA', '$userpasswordA') ";
    $calistirekle = mysqli_query($conn,$ekle);


    if ($calistirekle){
      echo '<div class="alert alert-success">
      <strong>Tebrikler!</strong> Kayıt başarı ile gerçekleşmiştir.
    </div>';
    }
    else {
      echo '<div class="alert alert-danger">
      <strong>Malesef!</strong> Kayıt başarısız oldu lütfen tekrar deneyin.
    </div>';
    }


    mysqli_close($conn);

    }
}



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
                         <a href="ayarlar.php" class="btn btn-outline-primary">Tüm Üyeler</a>
                     </div>
                 </div>
             </div>
         </div>
     
     </header>
     <main>
     <div class="container">
         <form action="" method="post" class="row mt-4 g-3">
             <div class="col-6">
                 <label for="ad" class="form-label">Üye Adı:</label>
                 <input name="nameA" type="text" placeholder="Ad" class="form-control 
                <?php
                if(!empty($nameA_err))
                {
                  echo "is-invalid";
                }

                ?>
                ">
                 <?php
                  echo $nameA_err;
                  ?>
             </div>
             <div class="col-6">
                 <label for="sad" class="form-label">Üye Soyadı:</label>
                 <input name="surnameA"  type="text" placeholder="Soyad" class="form-control 
                <?php
                if(!empty($surnameA_err))
                {
                  echo "is-invalid";
                }

                ?>
                ">
                 <?php
                  echo $surnameA_err;
                  ?>
             </div>
             <div class="col-6">
                 <label for="kuladi" class="form-label">Üye Kullanıcıadı:</label>
                 <input name="usernameA" type="text" placeholder="KullaniciAdı" class="form-control 
                
                <?php
                if(!empty($usernameA_err))
                {
                  echo "is-invalid";
                }

                ?>

                ">
                 <?php
                  echo $usernameA_err;
                  ?>
             </div>
             <div class="col-6">
                 <label for="email" class="form-label">Üye E-posta:</label>
                 <input name="emailA" type="text" placeholder="E-mail" class="form-control 
                <?php
                if(!empty($emailA_err))
                {
                  echo "is-invalid";
                }

                ?>
                ">
                 <?php
                  echo $emailA_err;
                  ?>
             </div>
             <div class="col-6">
                 <label for="sifre" class="form-label">Üye Şifre:</label>
                 <input name="userpasswordA" type="Password" placeholder="Şifre" class="form-control 
                <?php
                if(!empty($userpasswordA_err))
                {
                  echo "is-invalid";
                }

                ?>
                ">
                 <div id="validationServer03Feedback" class="invalid-feedback">
                  <?php
                  echo $userpasswordA_err;
                  ?>
             </div><br>
             <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>
         </form>
     </div>
     </main>
     <footer></footer>
 </body>
 </html>