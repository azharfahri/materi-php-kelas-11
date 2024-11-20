<?php
for ($i=1; $i <= 5 ; $i++) { 
    for ($y=1; $y <= $i ; $y++) { 
        echo "*";
    }
    echo "<br>";
}

for ($i=5; $i >= 1 ; $i--) { 
    for ($y=1; $y <= $i ; $y++) { 
        echo "$y";
    }
    echo "<br>";
}
?>