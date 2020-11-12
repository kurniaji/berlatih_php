<?php
function tukar_besar_kecil($string){
	$abjad ="abcdefghijklmnopqrstuvwxyz";
	$output = "";
	for ($a = 0; $a   < strlen($string); $a++) { 
		$kecil = strpos($abjad , $string[$a]);
		if ($kecil == null) {
			$output .= strtolower($string[$a]);
		} else {
			$output .= strtoupper($string[$a]);
		}
	}
	return"$output <br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>



