<?php
include_once'../../inc/global.php';

$model = Orders::Get();
$view = 'list.php';

include '../shared/Layout.php';
