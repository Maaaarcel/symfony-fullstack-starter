<?php

declare(strict_types = 1);

namespace App\Components\HelloWorld;

use Psr\Log\LoggerInterface;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent(
    name: 'HelloWorld',
    template: 'components/HelloWorld/HelloWorld.html.twig',
)]
final class HelloWorld {
    use DefaultActionTrait;

    public function __construct(private readonly LoggerInterface $logger) {}

    #[LiveProp]
    public int $count = 0;

    #[LiveAction]
    public function increment(): void {
        ++$this->count;
        $this->logger->info('Incrementing count', ['count' => $this->count]);
    }

    #[LiveAction]
    public function decrement(): void {
        --$this->count;
        $this->logger->info('Decrementing count', ['count' => $this->count]);
    }
}
