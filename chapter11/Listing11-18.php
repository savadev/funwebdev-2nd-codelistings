<?php

function changeParameter($arg) {
	 $arg += 285;
	 echo "<br/>arg=" . $arg;
}

$initial = 15;
echo "<br/>initial=" . $initial; // output: initial=15
changeParameter($initial); 	 // output: arg=300
echo "<br/>initial=" . $initial; // output: initial=15

?>