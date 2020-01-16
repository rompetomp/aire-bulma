<?php

namespace Rompetomp\AireBulma;

use Galahad\Aire\Support\Facades\Aire;
use Illuminate\Support\ServiceProvider;

class AireBulmaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/views', 'aire-bulma');
        Aire::setTheme('aire-bulma', null, [
            'default_classes' => [
                'group' => 'field',
                'group_help_text' => 'help',
                'group_errors' => 'help is-danger',
                'input' => 'input',
                'label' => 'label'
            ],
            'validation_classes' => [
                'valid' => [
                    'input' => 'is-success'
                ],
                'invalid' => [
                    'input' => 'is-danger'
                ]
            ]
        ]);
    }
}
