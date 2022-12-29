<?php
    $jsonVeri=file_get_contents("https://finans.truncgil.com/today.json");

    $veri=json_decode($jsonVeri,1);

    echo $veri["ABD DOLARI"]["Alış"];
    echo $veri["ABD DOLARI"]["Satış"];

    echo $veri["EURO"]["Alış"];
    echo $veri["EURO"]["Satış"];
?>



    <table>
        <tr>
            <td>Döviz</td>
            <td>Alış</td>
            <td>Satış</td>
        </tr>
        <tr>
            <td>Dolar</td>
            <td><?=$veri["ABD DOLARI"]["Alış"]?></td>
            <td>Satış</td>
        </tr>
        <tr>
            <td>Euro</td>
            <td>Alış</td>
            <td>Satış</td>
        </tr>
    </table>