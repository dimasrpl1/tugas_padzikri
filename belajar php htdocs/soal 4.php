<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo " $i. Aku sangat senang koding <br>";
    } else {
        echo " $i. Hoby aku adalah koding <br>";
    }
}
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 2 != 0) {
        echo $i . " - I love coding<br>";
    }
}

?>
