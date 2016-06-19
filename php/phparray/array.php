<?php 
// 1 dimesi 
// cara penulisan 1 
$cars =  array("toyota", "BMW", "Suzuki", "Yamaha");
// cara penulisan 2
$_cars = array( 1=> "mazda", "toyota", "bmw", "nissan");
// cara penulisa 3
$__cars["mpv1"] = "avansa";
$__cars["mpv2"] = "Xenia";
$__cars["mpv3"] = "kijang";
$__cars["suv1"] = "fortuner";
$__cars["suv2"] = "pajero sport";

// echo "i like " . $__cars["mpv1"] ; 

// array dua dimensi

$kendaraan = array (
		"mobil" => array("toyota", "BMW", "Suzuki", "Yamaha"),
		"motor" =>array("kawasaki", "Viar", "Yt15", "vespa")
	);
// echo $kendaraan ["motor"][1];

// Array 3 dimensiob

$hardware = array(
		"pc" => array(
			"merek" => array("Hp", "acer", "lenovo", "toshiba"),
			"typros" => array("i3", "i5", "i7", "amd")
			),
		"laptop" => array(
			"merek" => array("Hp", "acer", "lenovo", "toshiba"),
			"typros" => array("i3", "i5", "i7", "amd")
			)

	);

echo $hardware ["pc"]["typros"][1];

 ?>