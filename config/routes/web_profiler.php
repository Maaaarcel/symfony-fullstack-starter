<?php

declare(strict_types = 1);

namespace Symfony\Component\Routing\Loader\Configurator;

return Routes::config([
    'when@dev' => [
        'web_profiler_wdt' => [
            'resource' => '@WebProfilerBundle/Resources/config/routing/wdt.php',
            'prefix' => '/_wdt',
        ],
        'web_profiler_profiler' => [
            'resource' => '@WebProfilerBundle/Resources/config/routing/profiler.php',
            'prefix' => '/_profiler',
        ],
    ],
]);
