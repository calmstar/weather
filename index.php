<?php

/*
 * This file is part of the calmstar/weather.
 *
 * (c) calmstar<i@calmstar.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

require 'vendor/autoload.php';
require './src/Weather.php';

use Calmstar\Weather\Weather;

$w = new Weather('dc5b62f2cec8af2a33b170fdff4229ca');
$res = $w->getWeather('440300');
var_dump($res);
