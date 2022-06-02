<?php

namespace App\Http\Interfaces;

interface CalculateDeliveryInterface
{

    public function getDeliverySum(float $weight): float;

}
