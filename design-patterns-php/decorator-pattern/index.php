<?php

interface CarService {

	public function getCost();

	public function addCost($cost);

	public function getDescription();

	public function addDescription($description);
}

class BasicInspection implements CarService {

	private $cost = 0;
	private $description = '';

	public function getCost()
	{
		return 0;
	}

	public function getDescription()
	{
		return '';
	}

	public function addCost($cost)
	{
		$this->cost += $cost;
	}

	public function addDescription($description)
	{
		$this->description += $description;
	}
}

interface Service {

	public function perform();
}

class OilChange implements Service {

	protected $carService;

	function __construct(CarService $carService)
	{
		$this->carService = $carService;
	}

	public function getCost()
	{
		return 29 + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ', and oil change';
	}

	public function perform()
	{
		$this->carService->addCost(29);
		$this->carService->addDescription(', and oil change');
	}
}

class TireRotation implements Service {

	protected $carService;

	function __construct(CarService $carService)
	{
		$this->carService = $carService;
	}

	public function getCost()
	{
		return 15 + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ', and and tire rotation';
	}

	public function perform()
	{
		$this->carService->addCost(15);
		$this->carService->addDescription(', and and tire rotation');
	}
}

// echo (new BasicInspection())->getCost();

//echo (new OilChange (new TireRotation (new BasicInspection())))->getCost();

//$service = new TireRotation (new OilChange(new BasicInspection));
//echo $service->getDescription();

$service = new BasicInspection();
foreach ([
			 TireRotation::class,
			 OilChange::class,
		 ] as $carService)
{
	$service = new $carService($service);
}
echo $service->getDescription();


$service = new BasicInspection();
foreach ([
			 TireRotation::class,
			 OilChange::class,
		 ] as $carService)
{
	$service = new $carService($service);
	$service->perform();
}
echo $service->getDescription();