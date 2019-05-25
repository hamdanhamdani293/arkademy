<?php
	function deskripsi(){
	$myjs = array (
	"name"    => "Hamdan Hamdani",
	"address" => "Kp Babakan Kab Bandung",
	"hobbies" => array ("Sepakbola","Bulutangkis"),
	"is_married"=>false,
	"school" => array ("highschool" => "SMK Teknologi Industri Pembangunan "),
    "skills" => array ("name" => array ("HTML","CSS","JAVASCRIPT","PHP"),
                        "score" => array ("100","100","100","100")
                )
	);
	$json = json_encode($myjs);
	
	return $json;
	}
	print_r( deskripsi());
	
	
?>