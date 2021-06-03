<?php
require 'class/session/Session.php';

$session = new Session();

$session-> weight = '10lbs';

$session-> cars = 'mazda';

var_dump($session->setAttribute());


var_dump($session->weight);

var_dump($session->cars);

var_dump(isset($session->cars));

unset($session->cars);



