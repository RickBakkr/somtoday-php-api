<?php
require_once __DIR__ . '/vendor/autoload.php';

$somtodayPhpApi = new \TeamDeployment\SOMtodayPHPApi\SOMtodayPHPApi();
$somtodayPhpApi->login('school name', 'username', 'password', 'full name');