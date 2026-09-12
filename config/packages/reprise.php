<?php

declare(strict_types = 1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'framework' => [
        'assets' => [
            'json_manifest_path' => '%kernel.project_dir%/public/build/manifest.json',
        ],
    ],
    'when@prod' => [
        'reprise' => [
            'strict_mode' => true,
            'cache' => true,
        ],
    ],
]);
