<?php

abstract class Animal{

	public function falar(){

		return "Som";

	}

	public function mover(){

		return "Anda";

		}
}

class Cachorro extends Animal{

	public function falar(){

		return "Late";

	}
}

class Gato extends Animal{

	public function falar(){

		return "Mia";

	}
}

class Passaro extends Animal{

	public function falar(){

		return "Canta";

	}

	public function mover(){

		return "Voa e ". parent::mover();

	}
}

$cao = new Cachorro();
$cat = new Gato();
$ave = new Passaro();

echo $cao->falar() . "<br/>";
echo $cao->mover() . "<br/>";

echo "----------------------<br/>";


echo $cat->falar() . "<br/>";
echo $cat->mover() . "<br/>";

echo "----------------------<br/>";


echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";

?>