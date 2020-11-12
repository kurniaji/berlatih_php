<?php
function tentukan_nilai($number)
{
    $output ="";
    if ($number >= 85 && $number <= 100){
    	$output .= "Sangat Baik";
    }else if ($number >= 70 && $number <= 85){
    	$output .= "Baik";
    }else if ($number >= 60 && $number <= 70){
    	$output .= "Cukup";
    }else {
    	$output .="Kurang";
    }
    return " $output <br>";
}


//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>