<?php

namespace App;

class Phone
{
    private $os;
    private $ram;
    private $processor;
    private $screenSize;
    private $battery;

    /**
     * @param $os
     * @param $ram
     * @param $processor
     * @param $screenSize
     * @param $battery
     */
    public function __construct($os, $ram, $processor, $screenSize, $battery)
    {
        $this->os = $os;
        $this->ram = $ram;
        $this->processor = $processor;
        $this->screenSize = $screenSize;
        $this->battery = $battery;
    }

    public function __toString()
    {
        return "OS:{$this->os}, RAM: {$this->ram} PROCESSOR:{$this->processor} SCREENSIZE:{$this->screenSize} BATTERY:{$this->battery}.\n";
    }
}