<?php
include_once'../../inc/global.php';

$model = Products::Get();
$view = 'list.php';

include '../shared/Layout.php';
