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

    /*parola tekrar doğrulama*/
    if (empty($_POST["userpasswordrepatA"]))
    {
      $userpasswordrepatA_err="Parola tekrar kısmı boş geçilemez!";
    }
    else if ($_POST["userpasswordA"]!=$_POST["userpasswordrepatA"])
    {
      $userpasswordrepatA_err="Prolarlar eşleşmiyor!";
    }
    else 
    {
      $userpasswordrepatA=$_POST["userpasswordrepatA"];
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
        <meta name="description" content="Piyasalara çok sayida ürün sunan Iş Yatirim, geniş yerli-yabanci 
        kurumsal ve bireysel yatirimci tabaniyla arz ve talebin kesişme noktasinda yer aliyor.">
        <meta name="keywords" content="Açik, Piyasa, Akreditif, Arbitraj, Bono, Broker, Cari, Denge, Dalgali, kur, Deflasyon, Devalüasyon, Enflasyon,
         Eurobond, Faiz, Konsolidasyon, Likidite, Makas, Spread, Nominal, Değer, Opsiyon, Para-Piyasa, Sterilizasyon, Swap, Yatirim, Döviz"> 
        <link rel="stylesheet" href="css/musteriKayit.css">
        <link rel="stylesheet" href="css/reset.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Giriş - Dip Yatırım</title>
    </head>
<body>
<div class="header">
        <div class="top-bar">
            <p class="top1">Yatırımın en doğru adresine hoş geldiniz..</p>
        </div>
        <nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-light">
            <a id="dip" class="navbar-brand" href="index.php">DİP YATIRIM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div id="nav-home" class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="profile.php">Anasayfa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="biziTaniyin.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Bizi Tanıyın
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="hakkimizda.php">Hakkımızda</a>
                      <a class="dropdown-item" href="insanKaynaklari.php">İnsan Kaynakları</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="yatirimciIlişkileri.php">Yatırımcı İlişkileri</a>
                    </div>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="hizmetler.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hizmetler
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="kurumsalFinansman.php">Kurumsal Finansman</a>
                    <a class="dropdown-item" href="yatirimDanismanliği.php">Yatırım Danışmanlığı</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="portföyYönetimi.php">Portföy Yönetimi</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="analiz.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Analiz
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="dovizKurlari.php">Döviz Kurları</a>
                      <a class="dropdown-item" href="uluslararasiPiyasalar.php">Uluslararası Piyasalar</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="haberler.php">Haberler</a>
                    </div>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="iletisim.php">İletişim <span class="sr-only">(current)</span></a>
                  </li>
              </ul>
            </div>
          </nav>
    </div>
    <div id="bck" class="musterikayt">
    <div class="wrapper">
        <div class="title">Müşteri Kayıt Formu
        </div>
        <form action="musteriKayit.php" method="POST">
        <div class="form">
            <div class="input_field">
                <input name="nameA" type="text" placeholder="Ad" class="input 
                <?php
                if(!empty($nameA_err))
                {
                  echo "is-invalid";
                }

                ?>
                ">
                <i class="fas fa-user"></i>
                <div id="validationServer03Feedback" class="invalid-feedback">
                  <?php
                  echo $nameA_err;
                  ?>
                </div>
            </div>
            <div class="input_field">
                <input name="surnameA"  type="text" placeholder="Soyad" class="input 
                <?php
                if(!empty($surnameA_err))
                {
                  echo "is-invalid";
                }

                ?>
                ">
                <i class="fas fa-user"></i>
                <div id="validationServer03Feedback" class="invalid-feedback">
                <?php
                  echo $surnameA_err;
                  ?>
                </div>
            </div>
            <div class="input_field">
                <input name="usernameA" type="text" placeholder="KullaniciAdı" class="input 
                
                <?php
                if(!empty($usernameA_err))
                {
                  echo "is-invalid";
                }

                ?>

                ">
                <i class="far fa-envelope"></i>
                <div id="validationServer03Feedback" class="invalid-feedback">
                <?php
                  echo $usernameA_err;
                  ?>
                </div>
            </div>
            <div class="input_field">
                <input name="emailA" type="text" placeholder="E-mail" class="input 
                <?php
                if(!empty($emailA_err))
                {
                  echo "is-invalid";
                }

                ?>
                ">
                <i class="far fa-envelope"></i>
                <div id="validationServer03Feedback" class="invalid-feedback">
                <?php
                  echo $emailA_err;
                  ?>
                </div>
            </div>
            <div class="input_field">
                <input name="userpasswordA" type="Password" placeholder="Şifre" class="input 
                <?php
                if(!empty($userpasswordA_err))
                {
                  echo "is-invalid";
                }

                ?>
                ">
                <i class="fas fa-lock"></i>
                <div id="validationServer03Feedback" class="invalid-feedback">
                  <?php
                  echo $userpasswordA_err;
                  ?>
            </div>
            <div class="input_field">
                <input name="userpasswordrepatA" type="Password" placeholder="Şifre tekrar" class="input 
                <?php
                if(!empty($userpasswordrepatA_err))
                {
                  echo "is-invalid";
                }

                ?>
                ">
                <i class="fas fa-lock"></i>
                <div id="validationServer03Feedback" class="invalid-feedback">
                <?php
                  echo $userpasswordrepatA_err;
                  ?>
            </div>
              </div>
                <div name="kaydet" class="input_field">
                    <input class="btn" type="submit" name="kaydet" value="Kayıt ol">
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    <div class="footer">
        <div class="iletisim">
            <div class="irtbt">
                <ul>
                    <li><a href="tel:05055555555">+90 (212) 380 40 20</a></li>
                    <li id="iltsm"><a href="mailto:bilgi@dipyatirim.com.tr">bilgi@dipyatirim.com.tr</a></li>
                </ul>
            </div>
            <div class="social">
                <ul class="icons">
                    <li id="iltsm" class="icon"><a href="https://tr-tr.facebook.com/"><img src="image/icons/face.png" alt=""></a></li>
                    <li id="iltsm" class="icon"><a href="https://www.instagram.com/"><img src="image/icons/instagram.png" alt=""></a></li>
                    <li id="iltsm" class="icon"><a href="https://www.whatsapp.com/?lang=tr"><img src="image/icons/whatsap.png" alt=""></a></li>
                    <li id="iltsm" class="icon"><a href="https://www.whatsapp.com/?lang=tr"><img src="image/icons/tiwitter.png" alt=""></a></li>
                    <li id="iltsm" class="icon"><a href="https://web.telegram.org/"><img src="image/icons/telegram.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="iletisim2">
            <ul class="iletisim-alt">
                <li><a href="sikcasorlanlar.php">SIKÇA SORULANLAR</a></li>
                <li><a href="duyurular.php">DUYURULAR</a></li>
                <li><a href="siteHaritasi.php">SİTE HARİTASI</a></li>
                <li><a href="uyariNotu.php">UYARI NOTU</a></li>
                <li><a href="bilgiToplumuHizmetleri.php">BİLGİ TOPLUMU HİZMETLERİ</a></li>
                <li><a href="zamanAsimi.php">ZAMANAŞIMI</a></li>
                <li><a href="hesapNumaralari.php">HESAP NUMARALARI</a></li>
                <li id="iltsm"><a href="iletisim.php">İLETİŞİM</a></li>                
            </ul>
        </div>
        <div class="footer-alt">
            <h4 class="duyuru-baslik">Hakkımızda</h4>
            <p class="duyuru">
                Bu sitede yer alan bilgiler “Dip Yatırım Menkul Değerler A.Ş.” 
                tarafından genel bilgilendirme amacı ile hazırlanmıştır. 
                Yatırım bilgi, yorum ve tavsiyeleri yatırım danışmanlığı kapsamında 
                değildir ve sermaye piyasasındaki alım satım kararlarınızı destekleyecek 
                yeterli bilgiyi içermeyebilir. Uyarı notu için lütfen <a href="">tıklayınız</a>
                </p>

            <p class="duyuru">
                TradeMaster, TradeMaster International, TradeMaster Mobile, TradeMaster Dip Yatırım,
                 TradeMaster FX, TradeMaster FX Plus, Invest Art, Geniş Açı ve Camiş Online, Dip Yatırım
                  Menkul Değerler'in tescilli markalarıdır.
            </p>

            <p class="duyuru">
                Güncel gelişmelerden ve fırsatlardan haberdar olmak için lütfen Dip Yatırım'a üye olmayı unutmayınız! 
            </p>

            <p class="duyuru">
                Bu içeriğe ilişkin tüm telif hakları Dip Yatırım Menkul Değerler A.Ş.’ye aittir. 
                Bu içerik, açık iznimiz olmaksızın başkaları tarafından herhangi bir amaçla, 
                kısmen veya tamamen çoğaltılamaz, dağıtılamaz, yayımlanamaz veya değiştirilemez.
            </p>
            <div class="footer-alt2">
                <p class="alt2p">
                    © 2022 Dip Yatırım Menkul Değerler A.Ş
                </p>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
</body>
</html>