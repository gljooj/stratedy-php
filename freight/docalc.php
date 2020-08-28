<?php

$order = new Order(20);
$freigh = new SedexContext();
$calc = new CalculumFreightStrategy($freigh);
