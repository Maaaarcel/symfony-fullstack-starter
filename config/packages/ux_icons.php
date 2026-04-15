<?php

declare(strict_types = 1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'ux_icons' => [
        'default_icon_attributes' => [
            'fill' => 'currentColor',
            'height' => '1em',
            'width' => '1em',
        ],
        'ignore_not_found' => false,
    ],
    'when@prod' => [
        'ux_icons' => [
            'ignore_not_found' => true,
        ],
    ],
]);
