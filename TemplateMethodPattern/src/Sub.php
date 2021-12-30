<?php


namespace App;


abstract class Sub
{

    protected abstract function addPrimaryToppings();

    protected function layBread()
    {
        var_dump("laying Bread");
        return $this;
    }

    protected function layChaos()
    {
        var_dump("Adding Chaos");
        return $this;
    }

    public function make()
    {
        return $this->laybread()
            ->laychaos()
            ->addprimarytoppings();
    }
}
