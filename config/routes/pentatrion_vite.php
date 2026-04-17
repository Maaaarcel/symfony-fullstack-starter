<?php

declare(strict_types = 1);

namespace Symfony\Component\Routing\Loader\Configurator;

return Routes::config([
    'when@dev' => [
        '_pentatrion_vite' => [
            'resource' => '@PentatrionViteBundle/Resources/config/routing.yaml',
            'prefix' => '/build',
        ],
        '_profiler_vite' => [
            'defaults' => [
                '_controller' => 'Pentatrion\ViteBundle\Controller\ProfilerController::info',
            ],
            'path' => '/_profiler/vite',
        ],
    ],
]);
