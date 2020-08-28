<?php

class SedexContext implements DefineCalculumFreightStrategyInterface{

    public function FreightCalc(Order $order)
    {
       return $order+100;
    }
}