<?php

if (5 > 3) {
    echo "Have a good day and good idea! xx";
}

echo "<br>";
echo "#############################################";
echo "<br>";

if (3 > 5){
    echo "Have a good day and good idea! yy";
}

echo "<br>";
echo "#############################################";
echo "<br>";

$t = 14;

if ($t != 20){
    echo "Have a good day and good idea!";

}

echo "<br>";
echo "#############################################";
echo "<br>";


if ($t == 20){
    echo "Have a good day and good idea!";

}

echo "<br>";
echo "#############################################";
echo "<br>";

$y = 14;

if ($y == 20){
    echo "Have a good day and good idea!";
}else {
    echo "Not have a good day and good idea!";
}

echo "<br>";
echo "#############################################";
echo "<br>";

$z = date ("H") - 3;

echo "$z";
echo "<br>";
if ($z < "19"){
    echo "Have a Good Day!";
} else {
    echo "Have a Good Night!";
}

echo "<br>";
echo "#############################################";
echo "<br>";

$z = date ("H") - 3;

echo "$z";
echo "<br>";
if ($z < "13"){
    echo "Have a Good Day!";
} else {
    echo "Have a Good Night!";
}

echo "<br>";
echo "#############################################";
echo "<br>";

$n = date ("H") - 3;

 if ($n <"8") {
    echo "Have a Good Morning!";
 } elseif ($n > "12"){
    echo "Have a Good Day!";
 } else{
    echo "Have a Good Night!";
 }
?>