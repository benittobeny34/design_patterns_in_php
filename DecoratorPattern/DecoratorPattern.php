<?php
interface CarService {
    public function getCost();
    public function description();
}

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 25;
    }

    public function description()
    {
        return 'Basic Inspection'; // TODO: Implement description() method.
    }
}

class OilChange implements CarService
{
    protected $carService;
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 25 + $this->carService->getCost();
    }

    public function description()
    {
        return $this->carService->description() . ' and Oil Change'; // TODO: Implement description() method.
    }
}

class TireRotation implements CarService
{
    protected $carService;

    public function __construct(CarService  $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 20 + $this->carService->getCost();
    }

    public function description()
    {
        return $this->carService->description() . ' and tire Rotation'; // TODO: Implement description() method.
    }
}
var_dump((new TireRotation(new OilChange(new BasicInspection())))->description());