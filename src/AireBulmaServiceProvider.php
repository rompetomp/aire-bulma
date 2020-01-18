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
                'button' => 'button',
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
                'input_file_icon' => 'fas fa-upload',
                'radio_wrapper' => 'control',
                'radio_label' => 'radio'
            ],
            'validation_classes' => [
                'valid' => [
                    'input' => 'is-success'
                ],
                'invalid' => [
                    'input' => 'is-danger'
                ]
            ],
            'variant_classes' => [
                'button' => [
                    'light' => [
                        'light' => 'is-light'
                    ],
                    'outlined' => [
                        'outlined' => 'is-outlined'
                    ],
                    'inverted' => [
                        'inverted' => 'is-inverted'
                    ],
                    'rounded' => [
                        'rounded' => 'is-rounded'
                    ],
                    'white' => [
                        'color' => 'is-white'
                    ],
                    'dark' => [
                        'color' => 'is-dark'
                    ],
                    'black' => [
                        'color' => 'is-black'
                    ],
                    'text' => [
                        'color' => 'is-text'
                    ],
                    'primary' => [
                        'color' => 'is-primary'
                    ],
                    'link' => [
                        'color' => 'is-link'
                    ],
                    'info' => [
                        'color' => 'is-info'
                    ],
                    'success' => [
                        'color' => 'is-success'
                    ],
                    'warning' => [
                        'color' => 'is-warning'
                    ],
                    'danger' => [
                        'color' => 'is-danger'
                    ],
                    'small' => [
                        'size' => 'is-small'
                    ],
                    'normal' => [
                        'size' => 'is-normal'
                    ],
                    'medium' => [
                        'size' => 'is-medium'
                    ],
                    'large' => [
                        'size' => 'is-large'
                    ],
                    'fullwidth' => [
                        'fullwidth' => 'is-fullwidth'
                    ],
                    'hovered' => [
                        'state' => 'is-hovered'
                    ],
                    'focus' => [
                        'state' => 'is-focus'
                    ],
                    'active' => [
                        'state' => 'is-active'
                    ],
                    'loading' => [
                        'loading' => 'is-loading'
                    ],
                    'static' => [
                        'static' => 'is-static'
                    ]
                ],
                'input' => [
                    'rounded' => [
                        'rounded' => 'is-rounded'
                    ],
                    'primary' => [
                        'color' => 'is-primary'
                    ],
                    'info' => [
                        'color' => 'is-info'
                    ],
                    'success' => [
                        'color' => 'is-success'
                    ],
                    'warning' => [
                        'color' => 'is-warning'
                    ],
                    'danger' => [
                        'color' => 'is-danger'
                    ],
                    'small' => [
                        'size' => 'is-small'
                    ],
                    'normal' => [
                        'size' => 'is-normal'
                    ],
                    'medium' => [
                        'size' => 'is-medium'
                    ],
                    'large' => [
                        'size' => 'is-large'
                    ],
                    'hovered' => [
                        'state' => 'is-hovered'
                    ],
                    'focus' => [
                        'state' => 'is-focus'
                    ],
                    'loading' => [
                        'loading' => 'is-loading'
                    ],
                    'static' => [
                        'static' => 'is-static'
                    ]
                ]
            ]
        ]);
    }
}
