<?php

/*
 * This file is part of the calmstar/weather.
 *
 * (c) calmstar<i@calmstar.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Calmstar\Weather;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    //它不会在框架启动就注册，而是当你调用到它的时候才会注册。
    protected $defer = true;

    /**
     * 服务提供者是 服务 和 容器 的连接桥梁。
     * 本文件就是服务提供者；服务是 Weather.php（通过singleton方法进行了绑定）；容器是 laravel 本身
     * 为了不让安装该包后的用户手动注册该包提供的服务，我们已在本包的 composer.json 文件配置了自动发现.
     */
    public function register()
    {
        $this->app->singleton(Weather::class, function () {
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}
