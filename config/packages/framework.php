<?php

declare(strict_types = 1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Pentatrion\ViteBundle\Asset\ViteAssetVersionStrategy;

return App::config([
    'framework' => [
        'secret' => env('APP_SECRET'),
        'session' => true,
        'assets' => [
            'version_strategy' => ViteAssetVersionStrategy::class,
        ],
    ],
    'when@test' => [
        'framework' => [
            'test' => true,
            'session' => [
                'storage_factory_id' => 'session.storage.factory.mock_file',
            ],
        ],
    ],
]);
