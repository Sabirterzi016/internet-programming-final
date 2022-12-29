<?php

include "baglan.php";

$sql ="SELECT * FROM rapor_icerik";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();

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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Dip - Yatırım | Hisse Senedi, Döviz ve Yatırım Danışmanlığı</title>
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
              <ul id="giris" class="nav navbar-nav navbar-right">
                <li><a href="uyeGirisi.php"><span class="glyphicon glyphicon-user"></span> Üye Girişi</a></li>
                <li><a href="musteriKayit.php"><span class="glyphicon glyphicon-log-in"></span> Müşteri Girişi</a></li>
              </ul>
            </div>
          </nav>
    </div>
    <div class="article">
        <div class="article-head">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="image/1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/3.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            <div id="btn" class="btn -">
                <div id="firstbtn" class="first-btn">
                    <div id="frst11">
                        <a id="firsta" href="">Nasıl Hesap Açabilirim?</a>
                    </div>
                    <div>
                        <a id="firstb" href="">bilgi@isyatirim.com.tr</a>
                    </div>
                    <div>
                        <a id="firstc" href="">+ 90 (212) 350 24 24</a>
                    </div>
                </div>
                <div id="secondbtn" class="second-btn">
                    <p id="secondbb"><a id="secondb" href=""><br> Piyasa yorumlarını izlemek için <br> Youtube kanalımıza abone olun!</a></p>
                </div>
            </div>
        <div class="article-body">
            <p id="p1">
                <!-- Güncel araştırma raporlarımıza Dip Yatırım Araştırma sitesinden ulaşabilirsiniz.  -->
                <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                    <?=$satir['icerik']?></td>
                <?php } ?>                            
                <br><br>
                <a id="a1" href="arastirmaRaporlari.php">Raporları Gör</a>
            </p>
            <img id="banner" src="image/banner-img.png" alt="">
        </div>
        <div class="article-footer">
            <div class="table">
                <div class="table1">
                    <p id="p2">Duyurular</p>
                    <ul>
                        <li id="li1" class="active">
                            <a id="a2" href="">Resmi Duyurular</a> 
                        </li>
                        <li id="li2">
                            <a id="a2" href="" class="active">Sermaye Piyasası İşlem Duyuruları</a> 
                        </li>
                        <hr id="hr0" style="border-style: solid">
                    </ul>
                </div>
                <div class="form2">
                    <ul>
                        <li id="formid1">
                            <a href="text/Genel Mektup - 1834.pdf.url">
                                <p><img id="form-pdf" src="image/pdf.jpg" alt=""></p>
                                VİOP Risk Parametreleri Güncellemesi 09.12.2022/1834
                            </a>
                        </li>
                        <hr id="hr1" style="border-style: solid;">
                        <li id="formid">
                            <a href="text/VİOP Risk Parametreleri Güncellemesi 25.11.2022-183025.11.2022.url">
                                <p><img id="form-pdf" src="image/pdf.jpg" alt=""></p>
                                VİOP Risk Parametreleri Güncellemesi 09.12.2022/1834
                            </a>
                        </li>
                        <hr id="hr1" style="border-style: solid;">
                        <li id="formid">
                            <a href="text/Conflict of Interest Policy17.11.2022.url">
                                <p><img id="form-pdf" src="image/pdf.jpg" alt=""></p>
                                Conflict of Interest Policy 09.12.2022/1834
                            </a>
                        </li>
                        <hr id="hr1" style="border-style: solid;">
                        <li id="formid">
                            <a href="text/6.Türkiye Sermaye Piyasaları Kongresi “Finansın Ötes...14.11.2022.url">
                                <p><img id="form-pdf" src="image/pdf.jpg" alt=""></p>
                                6.Türkiye Sermaye Piyasaları Kongresi “Finansın Ötes...
                            </a>
                        </li>
                        <hr id="hr1" style="border-style: solid;">
                        <li id="formid">
                            <a href="text/ViiİOP Risk Parametreleri Güncellemesi 28.10.2022-182631.10.2022.url">
                                <p><img id="form-pdf" src="image/pdf.jpg" alt=""></p>
                                VİOP Risk Parametreleri Güncellemesi 09.12.2022/1834
                            </a>
                        </li>
                        <hr id="hr1" style="border-style: solid;">
                        <li id="formid">
                            <a href="text/Vİ222OP Risk Parametreleri Güncellemesi 07.10.2022-182307.10.2022.url">
                                <p><img id="form-pdf" src="image/pdf.jpg" alt=""></p>
                                VİOP Risk Parametreleri Güncellemesi 09.12.2022/1834
                            </a>
                        </li><br>
                    </ul>
                </div>
            </div>
            <div class="acanda">
                <img id="banner2" src="image/banner2.png" alt="">
                <div class="acandaicerik">
                    <p><h2 id="acnn">Ajanda</h2></p>
                    <div class="acnd">
                        <ul class="acnd-bslk">
                            <li id="liyç"><a href="">Yurt İçi</a></li>
                            <li id="liyd"><a href="">Yurt Dışı</a></li>
                        </ul>
                    </div>
                    <hr id="hr-acan">
                    <div class="acnd-icerik">
                        <ul>
                            <li id="acic">
                                <p><img id="trh" src="image/19ARA.jpg" alt=""></p>
                                <h4 id="aicrkbslk">Uluslararası Yatırım Pozisyonu($) 10:00</h4>                                    
                                <p id="aicrk">Ülke: Türkiye; Beklenti: -; Gerçekleşen: -249,8mlr;</p>
                            </li>
                            <li id="acic">
                                <p><img id="trh" src="image/19ARA.jpg" alt=""></p>
                                <h4 id="aicrkbslk">Varlıklar($) 10:00</h4>                                    
                                <p id="aicrk">Ülke: Türkiye; Beklenti: -; Gerçekleşen: 296,1mlr;</p>
                            </li>
                            <li id="acic">
                                <p><img id="trh" src="image/19ARA.jpg" alt=""></p>
                                <h4 id="aicrkbslk">Yükümlülükler($) 10:00</h4>                                    
                                <p id="aicrk">Ülke: Türkiye; Beklenti: -; Gerçekleşen: 545,9mlr;</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="iletisim">
            <div class="irtbt">
                <ul>
                    <li><a href="tel:05055555555">+90 (212) 442 40 20</a></li>
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