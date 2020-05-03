<?php
namespace GUI;
use Helpers\Helpers;

$header = Helpers::requireToVar("./GUI/include/header.php");
$sidebar = Helpers::requireToVar("./GUI/include/sidebar.php");
$content = Helpers::requireToVar("./GUI/pages/router.php");
$footer = Helpers::requireToVar("./GUI/include/footer.php");

require "./GUI/template/dashboard.php";