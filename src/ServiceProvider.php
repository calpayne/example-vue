<?php

namespace Aerocargo\ExampleVue;

use Aero\Common\Providers\ModuleServiceProvider;
use Aero\Components\Facades\Component;

class ServiceProvider extends ModuleServiceProvider
{
    public function setup()
    {
        Component::import('/modules/aerocargo/example-vue/components.js');
    }

    public function assetLinks()
    {
        return [
            'aerocargo/example-vue' => base_path('modules/aerocargo/example-vue/public'),
        ];
    }
}
