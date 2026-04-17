<?php

declare(strict_types = 1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'services' => [
        '_defaults' => [
            'autowire' => true,
            'autoconfigure' => true,
        ],
        'App\\' => [
            'resource' => '../src/',
            'exclude' => '../src/Entity',
        ],
        'App\\Components\\' => [
            'resource' => '../templates/components/',
        ],
    ],
]);
