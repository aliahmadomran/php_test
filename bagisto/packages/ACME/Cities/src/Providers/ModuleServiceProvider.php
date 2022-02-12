<?php

namespace ACME\Cities\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \ACME\Cities\Models\City::class
    ];
}