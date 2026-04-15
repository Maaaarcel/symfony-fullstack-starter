<?php

declare(strict_types = 1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'when@prod' => [
        'pentatrion_vite' => [
            'cache' => true,
            'preload' => 'link-header',
        ],
    ],
]);
