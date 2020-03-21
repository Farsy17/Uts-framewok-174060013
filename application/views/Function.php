<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fungsi Konversi Terbilang Angka</title>
</head>
<body>
    <h1>Fungsi Terbilang dengan Code Igniter</h1>

    <?php

    function penyebut($angka) {
        $angka = abs($angka);
        $huruf = array("", "satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan","sepuluh","sebelas");
        $temp = "";
        if ($angka <12){
            $temp = " ". $huruf[$angka];
        } elseif ($angka < 20) {
            $temp = penyebut($angka - 10). " belas";
        } elseif ($angka < 100) {
            $temp = penyebut($angka/10). " puluh". penyebut($angka % 10);
        } elseif ($angka < 200) {
            $temp = " seratus" . penyebut($angka - 100);
        } elseif ($angka < 1000){
            $temp = penyebut($angka/100). " ratus" . penyebut($angka % 100);
        } elseif ($angka < 2000){
            $temp = " seribu" . penyebut($angka - 1000);
        } elseif ($angka < 1000000){
            $temp = penyebut ($angka/1000). " ribu" . penyebut($angka % 1000);
        } elseif ($angka < 1000000000){
            $temp = penyebut ($angka/1000000). " juta" . penyebut($angka % 1000000);
        } elseif ($angka < 1000000000000){
            $temp = penyebut ($angka/1000000000). " milyar" . penyebut(fmod($angka,1000000000));
        } elseif ($angka < 1000000000000000){
            $temp = penyebut ($angka/1000000000000). " Trilyun" . penyebut(fmod($angka,1000000000000));
        }
        return $temp;
    }

    function terbilang($angka) {
        if($angka<0) {
            $hasil = "minus ". trim(penyebut($angka));
        } else {
            $hasil = trim(penyebut($angka));
        }
        return $hasil;
    }

    $nilai = 124516 ;
    echo terbilang($nilai);
    ?>
</body>
</html>