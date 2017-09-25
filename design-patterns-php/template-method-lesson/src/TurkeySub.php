<?php

namespace App;

class TurkeySub {
	public function make()
	{
	return $this
		->layBread()
		->addLettuce()
		->addTurkey()
		->addSauces();
	}

	public function layBread() {
		var_dump('laying down the bread');
		return $this;
	}

	public function addLettuce() {
		var_dump('add some lettuce');
		return $this;
	}

	public function addTurkey() {
		var_dump('add some turkey');
		return $this;
	}

	public function addSauces() {
		var_dump('add oil and vinegar');
		return $this;
	}
}