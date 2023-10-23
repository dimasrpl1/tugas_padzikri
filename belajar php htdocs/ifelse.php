<?php
//yuga dan pasha
// kelas xi rpl 2















$nilai = "100";

    if($nilai <= 100 && $nilai >= 90){
        echo("A+<br>");
        //jika kondisi terpenuhi
    }else if($nilai <= 89 && $nilai >= 80){
        echo("A<br>");
    }else if($nilai <= 79 && $nilai >= 70){
        echo("B+<br>");
    }else if($nilai <= 69 && $nilai >= 60){
        echo("B<br>");
    }else if($nilai <= 59 && $nilai >= 50){
        echo("C<br>");
    }else if($nilai < 49 && $nilai >= 0){
        echo("E<br>");
        //jika kondisi tidak terpenuhi
    }else{
        echo("Maaf nilai anda melampaui batas<br>");
    }


$umur = "18";
$uang = "50.000";
$film  = "avenger";

if($umur >= 18 && $uang == 100.000 && $film == "avenger"){
    echo("Anda Bisa nonton avenger dengan tiket VIP");
}

else if($umur >= 18 && $uang == 50.000 && $film == "avenger"){
    echo("Anda bisa nonton avenger dengan tiket biasa");
}

else if($umur >= 18 && $uang == 50.000 && $film == "avenger"){
    echo("film eweh balik deui bang");
}

else if($umur < 18){
    echo("maaf anda masi bocil");
}

else{
    echo("film euweuh");
}




?>