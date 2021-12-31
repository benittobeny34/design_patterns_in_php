<?php

namespace App;

class PhoneBuilder
{
    private $os = 'android';
    private $ram = 3;
    private $processor = 'snapdragon';
    private $screenSize = 5.8;
    private $battery = 4000;

    /**
     * @param mixed $os
     */
    public function setOs($os)
    {
        $this->os = $os;
        return $this;
    }

    /**
     * @param mixed $ram
     */
    public function setRam($ram)
    {
        $this->ram = $ram;
        return $this;
    }

    /**
     * @param mixed $processor
     */
    public function setProcessor($processor)
    {
        $this->processor = $processor;
        return $this;
    }

    /**
     * @param mixed $screenSize
     */
    public function setScreenSize($screenSize)
    {
        $this->screenSize = $screenSize;
        return $this;
    }

    /**
     * @param mixed $battery
     */
    public function setBattery($battery)
    {
        $this->battery = $battery;
        return $this;
    }

    public function getPhone(): Phone
    {
        return new Phone($this->os, $this->ram, $this->processor, $this->screenSize, $this->battery);
    }
}