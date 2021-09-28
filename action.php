<?php

$ratingList= [5, 20, 100];

if (isset($_POST["sum"])) {
	$sum = $_POST["sum"];
	$bills = [];
	foreach (array_reverse($ratingList) as $item){
		if(floor($sum/$item) !== 0) {
			$bills[$item] = floor($sum/$item);
			$sum = $sum % $item;
		} else {
			$bills[$item] = 0;
		}
	}

	if(!is_numeric($_POST["sum"])){
		echo false;
	}
	elseif($_POST["sum"]%5 == 0){
		echo "<table class='table'><tr><td>Номинал</td><td>Количество</td></tr>
		<tr><td>5</td><td>$bills[5]</td></tr>
		<tr><td>20</td><td>$bills[20]</td></tr>
		<tr><td>100</td><td>$bills[100]</td></tr>
		</table>";
	} else {
		$a = $_POST["sum"] - $_POST["sum"]%5;
		$b = $_POST["sum"] + 5 - $_POST["sum"]%5;
		echo "Выберите сумму " . $a . " или " . $b;
	}
}
