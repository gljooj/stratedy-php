<?php

class Unibanco implements CalcToBudgetInterface
{
    public function doBuget($order)
    {
        return 20 + $order;
    }
}