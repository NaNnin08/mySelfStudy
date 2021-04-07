<?php
//my first php
echo "Hello World";
echo "<br>My First PHP";
#my first variabel in php
$warna = "Biru"/* warna kesukaan */;
echo "<br>Warna Kesukaan saya adalah warna " . $warna . ".";
echo "<br> warna $warna adalah kesukaan saya!";

function myFunction() {
    static $x = 0;
    echo $x;
    $x++;
}
echo "<br>";
myFunction();
echo "<br>";
myFunction();
echo "<br>";
myFunction();

$x = 890;
echo "<br>Type variabel x ($x): ";
var_dump($x);
$y = 8.90;
echo "<br>Type variabel y ($y): ";
var_dump($y);
$car = array ("Mazda", "Daihatsu", "KudaJukrik");
echo "<br>Type data car: ";
var_dump($car);
echo $car[0];
$car_len = count($car);
for ($x = 0; $x < $car_len; $x++) {
    echo "<br>";
    echo $car[$x];
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($age as $nm => $mur) {
    echo "<br>";
    echo "Sdr/Sdri.  " . $nm . " berumur " . $mur . ".";
}
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

  for ($ro = 0; $ro < 4; $ro++) {
    echo "<p><b>Row Number: $ro</b></p>";
    echo "<ul>";
    for ($lo = 0; $lo < 3; $lo++) {
      echo "<li>".$cars[$ro][$lo]."</li>";
    }
    echo "</ul>";
  }

echo "<br>Lenght of Strings: ". strlen("Hello World") . ".";
echo "<br>Count numbers of words: ". str_word_count("Hello World!") . ".";
echo "<br>Reverse a string: ". strrev("Hello World") . ".";
echo "<br> Search for a text within a string: ". strpos("Hello the World","World") . ".";
echo "<br> Replace text within a string: ". str_replace("World", "Judi", "Hello World");
define("JuG", "Hello World", true);
echo ("<br>Membuat Constants dengan insensitive: "). jug . ".";

$dt = date("H");
echo "<br> Membuat if function dengan bertujuan mengucap salam, sekarang jam ".$dt." maka ucapannya adalah ";
if ($dt < "10") {
    echo "Have a Good Morning";
} elseif ($dt < "20") {
    echo "Have a Good Day";
} else {
    echo "Have a Good Night";
}

$favcolor = "red";
echo "<br> Membuat switch function dengan warna " .$favcolor. " adalah favorit dalam bahasa inggris: ";
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>