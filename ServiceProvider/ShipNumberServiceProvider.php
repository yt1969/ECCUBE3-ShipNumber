<?php
/*
* This file is part of EC-CUBE
*
* Copyright(c) 2015 Takashi Otaki All Rights Reserved.
* 
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\ShipNumber\ServiceProvider;

use Eccube\Application;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class ShipNumberServiceProvider implements ServiceProviderInterface
{
    public function register(BaseApplication $app)
    {

        // Formの定義
        $app['form.type.extensions'] = $app->share($app->extend('form.type.extensions', function ($extensions) use ($app) {
            $extensions[] = new \Plugin\ShipNumber\Form\Extension\Admin\ShipNumberCollectionExtension();

            return $extensions;
        }));

        //Repository
        $app['eccube.plugin.repository.ship_number'] = $app->share(function () use ($app) {
            return $app['orm.em']->getRepository('\Plugin\ShipNumber\Entity\ShipNumber');
        });

    }

    public function boot(BaseApplication $app)
    {
    }
}
