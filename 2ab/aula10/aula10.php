<?php


for ($x = 0; $x <= 10; ++$x) {
    echo "The number is: $x <br>";
}



echo "<br>";
echo "#######################################";
echo "<br>";


for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo "<br>";
echo "#######################################";
echo "<br>";

for ($x = 0; $x <= 1000; $x++) {
    if ($x == 3)
     break;
    echo "The number is: $x <br>";
}

echo "<br>";
echo "#######################################";
echo "<br>";

for ($x = 0; $x <= 1000; $x++) {
    if ($x == 5) continue;
    echo "The number is: $x <br>";
}

echo "<br>";
echo "#######################################";
echo "<br>";

for ($x = 0; $x <= 10; $x++) {
    if ($x mod 2 = 0)
    echo "O número $x é par <br>"; continue
}
?>