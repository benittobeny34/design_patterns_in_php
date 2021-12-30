<?php

abstract class HomeChecker
{
    protected HomeChecker $successor;

    public abstract function check(HomeStatus $home);

    public function setSuccessor(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if (isset($this->successor)) {
            $this->successor->check($home);
        }
    }
}

class Locks extends HomeChecker
{
    public function check(HomeStatus $status)
    {
        if (!$status->locked) {
            throw new Exception('doors are not locked');
        }

        return $this->next($status);
    }
}

class Lights extends HomeChecker
{
    public function check(HomeStatus $status)
    {
        if (!$status->lightsOff) {
            throw new Exception('The lights  are still on ');
        }

        return $this->next($status);
    }

}

class Alaram extends HomeChecker
{

    public function check(HomeStatus $status)
    {
        if (!$status->alarm) {
            throw new Exception('the  alaram is not set');
        }

        return $this->next($status);
    }
}

class HomeStatus
{
    public bool $alarm = true;
    public bool $lightsOff = true;
    public bool $locked = true;
}

$status = new HomeStatus();

$locks = new Locks();
$lights = new Lights();
$alarm = new Alaram();

$locks->setSuccessor($lights);
$lights->setSuccessor($alarm);

$locks->check($status);

for($i = 0 ; $i< 5; $i++)
{
    echo "josva megalan \n";
}
