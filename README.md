# Symfony Fullstack Starter

This is an opinionated boilerplate for fullstack Symfony applications.

## Features

- Symfony 8
- PHPStan
- PHP-CS-Fixer
- Twig-CS-Fixer
- Statically analyzed config files
- Vite integration
- TypeScript
- TailwindCSS
- Twig Components with improved directory layout (inspired
  by https://hugo.alliau.me/blog/posts/a-better-architecture-for-your-symfony-ux-twig-components)
- Dev and Prod docker images with FrankenPHP (inspired by https://github.com/dunglas/symfony-docker)
- OpenTelemetry auto instrumentation

## Setup

You only need to delete the original `.gitignore` and replace it with `.gitignore.project`, then you are ready to go! 

## Component directory layout

```
templates
└── components
    └── HelloWorld
        ├── HelloWorld.controller.ts -> stimulus controller for the component
        ├── HelloWorld.html.twig -> twig template of the component
        └── HelloWorld.php -> PHP class for the component. Required to set the parameters in the AsTwigComponent attribute
```

## Disclaimer

This is not supposed to be "the right way" to structure a Symfony application. This is how _I_ like to structure my
applications, if you also like it, feel free to copy this repository.

## License

[MIT](./LICENSE)
