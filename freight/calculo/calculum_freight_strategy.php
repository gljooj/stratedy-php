<?php

class CalculumFreightStrategy
{

    private $typeCalculm;

    public function __construct(DefineCalculumFreightStrategyInterface $typeCalculm){
        $this->typeCalculm = $typeCalculm;
    }

    public function calculumPrice(Order $order){
        return $this->typeCalculm->FreightCalc($order);
    }
}
