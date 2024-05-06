<?php
    if
    ($_SERVER["REQUEST_METHOD"]== "POST") {
	 $godine =
	$_POST["godine"];
	$datoteka =
	fopen("godine.txt", "a") or die
	("ne mogu da otvorim datoteku!");
    fwrite($datoteka, $godine . "\n");
    fclose($datoteka);
	header("Location: moj-sajt.html");
	exit();
	}
?>