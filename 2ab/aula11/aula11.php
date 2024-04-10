<?php

 echo "<br>";
 echo "#######################################";
 echo "<br>";

$colors = array ("red ", "green ", "blue ", "yellow ", "1 ", " 2", " 3");

foreach ($colors as $x) {
    echo "$x <br>";
}

echo "<br>";
echo "#######################################";
echo "<br>";

$membros = array("Allanys" => "16", "Milena" => "16", "Pedro" => "17");

foreach ($membros as $x => $y) {
    echo "$x : $y <br>";
}


echo "<br>";
echo "#######################################";
echo "<br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    if ($x == "green") break;
    echo "$x <br>";
}


echo "<br>";
echo "#######################################";
echo "<br>";

$colors = array("red", "green", "blue", "yello");

foreach ($colors as $x) {
    if ($x == "green") continue;
    echo "$x <br>";
}
?>