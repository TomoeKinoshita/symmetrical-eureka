<?php

include '../classes/Sales.php';
$sales = new Sales;

$sales->login($_POST);