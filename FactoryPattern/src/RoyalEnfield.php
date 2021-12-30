<?php

namespace App;
class RoyalEnfield implements BikeShowRoomInterface
{

    public function brand()
    {
        return 'Royal Enfield';
    }

    public function manager()
    {
        return 'Royal Enfield';
    }

    public function availableModels()
    {
        return ['RE interceptor 650', 'RE Classic 350', 'RE Bullet 350', 'RE Thunderbird 350'];
    }
}