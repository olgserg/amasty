<?php
interface IChessmen
{
	public function move($x, $y);
	public function getPosition();
}
abstract class AbstractChessmen implements IChessmen
{
	protected $x;
	protected $y;

	public function getPosition()
	{
		echo "x = $this->x; y = $this->y";
	}
}
class King extends AbstractChessmen
{
	public function __construct($x, $y)
	{
		$this->x=$x;
		$this->y=$y;
	}

	public function move($x, $y)
	{
		if (($x < 3 || $x > 5) || ($y < 3 || $y > 5)) throw new Exception('No no no King!');
		$this->x=$x;
		$this->y=$y;
	}
}
class Queen extends AbstractChessmen
{
	public function __construct($x, $y)
	{
		$this->x=$x;
		$this->y=$y;
	}

	public function move($x, $y)
	{
		if (!($x <= 8 && $x == $y) || !($x = 4 && $y <= 8) || !($y = 4 && $x <= 8) || !($x <= 7 && $y = $x - 6)) throw new Exception('No no no Queen!');
		$this->x=$x;
		$this->y=$y;
	}
}

try {
	$queen = new Queen(1, 1);
	$queen->move(7, 3);
} catch (Exception $e) {
	echo $e->getMessage();
}
try {
	$king = new King(4, 3);
	$king->move(2, 2);
} catch (Exception $e) {
	echo $e->getMessage();
}

$queen->getPosition();
$king->getPosition();
