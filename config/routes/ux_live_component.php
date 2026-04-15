<?php

declare(strict_types = 1);

namespace Symfony\Component\Routing\Loader\Configurator;

return Routes::config([
    'live_component' => [
        'resource' => '@LiveComponentBundle/config/routes.php',
        'prefix' => '/_components',
    ],
]);
