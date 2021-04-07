<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set("America/New_York");
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
echo "The time is " . date("h:i:sa") . "<br>";
$d=mktime(11, 14, 54, 8, 12, 2014); //from timestamp
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("10:30pm April 15 2014"); //from string
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July. <br>";
?>

© 2010-<?php echo date("Y");?>
<?php include "footer.php";/*bisa memakai require*/ ?> 

<?php 
$file = fopen("webdic.txt","r") or die ("unable to open files");
//membuka file apa ada nya 
echo fread($file,filesize("webdic.txt"));
//membuka file per baris dilakukan dengan cara looping
while(!feof($file)) {
    echo fgets($file) . "<br>";
}
//menutup file untuk meringankan beban server 
fclose($file);
?>

<?php
//membuat file dengan fngsi fopen jika file yang dituliskan belum ada
$file1 = fopen("testfile.txt","w") or die("Unable to open files");
$txt = "John Doe\n";
fwrite($file1, $txt);
$txt = "Jane Doe\n";
fwrite($file1, $txt);
fclose($file1);
?>

</body>
</html>