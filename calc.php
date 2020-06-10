<?php
$num = $_POST['number'];

function funSilnia($num){
	if ($num == 0 || $num == 1)
		return 1;
	if ($num  >= 2) {
		$silnia = 1;
		for ($i = 1; $i <= $num; $i++) {
			$silnia *= $i;
		}
	}
	return $silnia;
}

$wynik = funSilnia($num);
echo $wynik;
?>