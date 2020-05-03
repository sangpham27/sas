<?php

require_once './Config/autoload.php';

use BUS\AdminBus;

$adminBUS = new AdminBus();
$lstAdmin = $adminBUS->getByID(1);
var_dump($lstAdmin);