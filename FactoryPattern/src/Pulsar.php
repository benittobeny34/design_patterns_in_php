<?php

namespace App;
class Pulsar implements BikeShowRoomInterface
{

    public function brand()
    {
        return 'Pulsar';
    }

    public function manager()
    {
        return 'Pulsar Manager';
    }

    public function availableModels()
    {
        return ['Pulsar 150', 'Pulsar 180', 'Pulsar 220f', 'Pulsar NS 200'];
    }
}