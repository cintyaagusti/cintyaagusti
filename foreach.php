<?php
	$a= array(0, 'satu', 1, 'dua', 'tiga',3);

	$b= array('key'=>0, 'angka'=>'ganjil', 1=>'satu', 2=>458968); 
	print_r($b);
	echo "<br/>";

	$b[4]= 'value2';
	print_r($b);

	foreach ($b as $key => $value){
		echo "$key - $value <br/>";
	}

	foreach ($b as $key => $value){ //misal cuma butuh value saja
		echo "$value <br/>";
	}

?>