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
                'label' => 'label',
                'checkbox_label' => 'checkbox',
                'checkbox' => 'checkbox',
                'checkbox_group_label' => 'checkbox',
                'checkbox_group' => 'checkbox',
                'select_wrapper' => 'select',
                'textarea' => 'textarea',
                'input_file_wrapper' => 'file',
                'input_file_label' => 'file-label',
                'input_file_input' => 'file-input',
                'input_file_icon' => 'fas fa-upload'
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
