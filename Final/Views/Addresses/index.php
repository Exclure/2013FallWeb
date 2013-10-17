<?php
include_once'../../inc/global.php';

$model = Addresses::Get();
$view = 'list.php';

include '../shared/Layout.php';
