 <?php 


$var1 = 1;
$var2 = 2;
$var3 = $var1 + $var2;

if ($var3 == 1) {
	echo $var1 . " +" . $var2 . " = " . $var3 . " --benar"; 
} else if ($var3 == 2) {
	echo $var1 . " +" . $var2 . " = " . $var3 . " --benar benar"; 
} else if ($var3 == 3){
	echo $var1 . " +" . $var2 . " = " . $var3 . " --benar Sekali";
} else {
	echo " salah semua";
}

 ?>