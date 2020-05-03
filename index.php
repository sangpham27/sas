<?php

require_once './Config/autoload.php';

use BUS\AdminBus;

$adminBUS = new AdminBus();
$lstAdmin = $adminBUS->getAll();
var_dump($lstAdmin);