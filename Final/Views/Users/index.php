<?php
include_once'../../inc/global.php';

$model = Users::Get();
$view = 'list.php';

include '../shared/Layout.php';
