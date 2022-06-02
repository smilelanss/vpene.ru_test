<?php

namespace App\Http\Controllers;

class DeliveryController
{

    public function calculateDelivery()
    {
        /*Какие-то входные данные по весу заказа*/
        $weight = 11;

        /*Список вариантов доставки (как пример реализации без БД)*/
        $deliveryList = [
            'RussianPostDelivery',
            'DHLDelivery'
        ];

        /*Производим расчёт по каждому типу доставки, если нет нужного класса выбрасываем исключение*/
        foreach ($deliveryList as $delivery)
        {
                $className = 'App\Http\Services\Deliveries\\'.$delivery.'Service';
                if (class_exists($className)){
                    echo $delivery .': ' . (new $className)->getDeliverySum($weight). '</br>';
                }else{
                    throw new \Exception('Calculate Delivery "'.$delivery.'" Not found');
                }
        }
    }

}
