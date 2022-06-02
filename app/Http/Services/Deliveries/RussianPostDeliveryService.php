<?php

namespace App\Http\Services\Deliveries;

use App\Http\Interfaces\CalculateDeliveryInterface;

class RussianPostDeliveryService implements CalculateDeliveryInterface
{

    public function getDeliverySum($weight): float
    {
        if ($weight < 10){
            return $weight * 100;
        }else{
            return $weight * 1000;
        }
    }

}
