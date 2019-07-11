<?php
require 'vendor/autoload.php';
require './src/Weather.php';

use Calmstar\Weather\Weather;

$w = new Weather('dc5b62f2cec8af2a33b170fdff4229ca');
$res = $w->getWeather('440300');
var_dump($res);