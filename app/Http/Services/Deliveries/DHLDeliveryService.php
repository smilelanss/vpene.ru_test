<?php

namespace App\Http\Services\Deliveries;

use App\Http\Interfaces\CalculateDeliveryInterface;

class DHLDeliveryService implements CalculateDeliveryInterface
{
    public function getDeliverySum($weight): float
    {
        return $weight * 100;
    }

}
