<?php
echo "MUHAMMAD DIMAS SUSANTO XI RPL 1<br><br>";
echo "SOAL 1 <br>";
for ($i = 5; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i;
        if ($i < 99) {
            echo " ";
        }
    }
}
echo "<br>";
echo "<br>";
echo "SOAL 2<br>";
for ($i = 0; $i <= 100; $i += 8) {
    echo $i;
    if ($i < 100) {
        echo " ";
    }
}
echo "<br>";
echo "<br>";
echo "SOAL 3<br>";
echo "LOOPING SATU<br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - aku jago koding<br>";
}

echo "LOOPING DUA<br>";
for ($i = 19; $i >= 1; $i -= 2) {
    echo $i . " - aku seorang web developer<br>";
}
echo "<br>";
echo "<br>";
echo "SOAL 4<br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo " $i. Aku sangat senang koding <br>";
    } else {
        echo " $i. Hoby aku adalah koding <br>";
    }
}
echo "<br>";
echo "<br>";
echo "SOAL OPSIONAL<br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 2 != 0) {
        echo $i . " - I love coding<br>";
    }
}
?>
