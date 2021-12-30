<?php


namespace App;


class VeggySub extends Sub
{

    protected function addPrimaryToppings()
    {
        var_dump("Adding Veggy ");
        return $this;
    }
}