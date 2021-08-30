<?php
$file = "n.txt";
$x = fopen($file, "r") or die("Unable to open file!");
echo fgets($x);
fclose($x);
$txt = ".txt";
$code = $x + $txt;
$coder = fopen($code, "r") or die("Unable to open file!");
echo fgets($coder);
fclose($coder);
$filer = fopen($file,"w");
$x = $x + 1;
echo fwrite($file,$x);
fclose($file);
sleep(3);
echo $coder;
}    
?>