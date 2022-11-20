<?php
    $menu=["home", "kontak", "sejarah", "jurusan"];
    $judul=["apel", "jeruk", "mangga", "duren"];
    $deskripsi=[
        "apel adalah.",
        "jeruk juga buah",
        "mangga gtw",
        "duren gk tau"
    ];
    for ($i=0; $i < 4; $i++) { 
        echo "<li> $menu[$i] </li>";
    }
    $link=[
        "home" => "<a href='#'>home </a>",
        "kontak" => "<a href='#'>kontak </a>",
        "sejarah" => "<a href='#'>sejarah </a>",
        "jurusan" => "<a href='#'>jurusan </a>"
    ];
    echo $link["home"];
    echo "<br>";

    foreach ($link as $key => $value) {
        echo "<li>";
        echo $key ."  ". $value;
        echo "</li>";
    }
    echo "<br>";
    $nilai=100;
    if ($nilai >= 0 && $nilai <= 100) {
        if ($nilai >=71) {
            if ($nilai == 71) {
                echo "kkm";
            }
            if ($nilai > 71 && $nilai < 80) {
                echo "c";
            }
            if ($nilai >=80 && $nilai < 90) {
                echo "b";
            }
            if ($nilai >=90 && $nilai <= 100) {
                echo "a";
            }
        }else {
            echo "tidak lulus";
        }
    }else {
        echo "nilai salah";
    }
    echo "<br>";
    $tanggal=20;
    $bulan=12;
    if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 12) {
        if ($bulan == 1 ) {
            if ($tanggal >= 1 && $tanggal <= 20) {
                echo "zodiak anda ngapricorn";
            }else {
                echo "zodiak anda aquarius";
            }
        }
        if ($bulan == 2) {
            if ($tanggal >= 1 && $tanggal <= 20) {
                echo "zodiak anda aquarius";
            }else {
                echo "zodiak anda taurus";
            }
        }
        if ($bulan== 3) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiak kamu taurus";
            }else {
                echo "zodiak kamu gemini";
            }
        }
        if ($bulan== 4) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiak kamu gemini";
            }else {
                echo "zodiak kamu cancer";
            }
        }
        if ($bulan== 5) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiak kamu cancer";
            }else {
                echo "zodiak kamu leo";
            }
        }
        if ($bulan== 6) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiak kamu leo";
            }else {
                echo "zodiak kamu virgo";
            }
        }
        if ($bulan== 7) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiak kamu virgo";
            }else {
                echo "zodiak kamu libra";
            }
        }
        if ($bulan== 8) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiak kamu libra";
            }else {
                echo "zodiak kamu scorpio";
            }
        }
        if ($bulan== 9) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiak kamu scorpio";
            }else {
                echo "zodiak kamu sagitarius";
            }
        }
        if ($bulan== 10) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiak kamu sagitarius";
            }else {
                echo "zodiak kamu capricorn";
            }
        }
        if ($bulan== 11) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiak kamu capricorn";
            }else {
                echo "zodiak kamu aquarius";
            }
        }
        if ($bulan== 12) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiak kamu aquarius";
            }else {
                echo "zodiak kamu   pisces";
            }
        }
        if ($bulan== 13) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiak kamu pisces";
            }
        }
    }else {
        echo "tanggal bulan salah";
    }


?>
