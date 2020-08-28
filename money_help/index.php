<?php
require_once 'strategy/order.php';
$order = new Order(20);
$bank = new Unibanco(20);
$budGet = new MakeBudget($bank);

