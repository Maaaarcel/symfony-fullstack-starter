<?php

declare(strict_types = 1);

namespace Symfony\Component\Routing\Loader\Configurator;

return Routes::config([
    'when@dev' => [
        'ux_inspector' => [
            'resource' => '@UXInspectorBundle/config/routes.php',
        ],
    ],
]);
