<?php

require_once 'Calculate.php';

$data = $_POST;
$size = explode('|', $data['size'])[0];
$pizzaId = $data['pizza'];
$cream = $data['cream'];

$calculatePrice = new Calculate($size,$pizzaId,$cream);
$dataCheck = [
    'price' => $calculatePrice->calculatePrice(),
    'cream' => $calculatePrice->getCream(),
    'pizza' => $calculatePrice->getPizza(),
    'size' => $size
];
echo json_encode($dataCheck);
