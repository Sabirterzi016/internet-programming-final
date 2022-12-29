<?php   

    require 'inc/config.php';


    if ($_POST)
    {
        $adi_soyadi = $_POST['adi_soyadi'];
        $email = $_POST['email'];
        $konu = $_POST['konu'];
        $mesaj = $_POST['mesaj'];

        DB :: insert ("INSERT INTO iletisim(adi_soyadi, email, konu, mesaj) VALUES (?,?,?,?)", array(

            $adi_soyadi,
            $email,
            $konu,
            $mesaj
        ));
        header("Location:iletisim.php?success=1");
    }



?>