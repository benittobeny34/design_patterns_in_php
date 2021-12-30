<?php

namespace App;
class Yamaha implements BikeShowRoomInterface
{

    public function brand()
    {
        return "Yamaha";
    }

    public function manager()
    {
        return 'Yamaha Manger';
    }

    public function availableModels()
    {
        return ['Rx 100', 'R15 V3', 'R15 V4'];
    }
}