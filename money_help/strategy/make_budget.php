<?php


class MakeBudget
{
    private $calcTotal;
    public function __construct(CalcToBudgetInterface $calcTotal){
        $this->calcTotal = $calcTotal;
    }

    public function calcBudgetTotal(Order $order)
    {
        return $this->calcTotal->doBuget($order);
    }
}