<?php

$colorsList =
	['red'=>'КРАСНЫЙ', 'blue'=>'ГОЛУБОЙ', 'green'=>'ЗЕЛЕНЫЙ', 'yellow'=>'ЖЕЛТЫЙ',
	'lime'=>'САЛАТОВЫЙ', 'magenta'=>'ФИОЛЕТОВЫЙ', 'black'=>'ЧЕРНЫЙ',
	'gold'=>'ЗОЛОТОЙ', 'gray'=>'СЕРЫЙ', 'tomato'=>'ТОМАТНЫЙ'];

function getColor($color)
{
	global $colorsList;
	$randColor = array_rand($colorsList);
	if($randColor!=$color){
		return $randColor;
	} else getColor($color);
}

for($i=0; $i<5; $i++)
{
	foreach (array_slice($colorsList, $i, 5) as $key=>$item) {
		echo "<span style='color:" . getColor($key) ."'>$item</span> ";
	}
	echo "<br>";
}
