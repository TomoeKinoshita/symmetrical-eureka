<?php

include '../classes/Sales.php';
session_start();

$sales = new Sales;

$sales->deleteProduct($id);