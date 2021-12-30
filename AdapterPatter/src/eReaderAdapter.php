<?php


namespace App;


class eReaderAdapter implements BookInterface
{
    /**
     * @var Kindle
     */
    protected $reader;

    public function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;
    }
    public function open()
    {
        return $this->reader->turnOn();
    }

    public function turnPage()
    {
        return $this->reader->pressNext();
    }
}