<?php

namespace Patchlevel\EventSourcingBundle\Tests\Fixtures;

use Patchlevel\EventSourcing\Aggregate\AggregateChanged;
use Patchlevel\EventSourcing\Aggregate\AggregateRoot;
use Patchlevel\EventSourcingBundle\Attributes\Aggregate;

#[Aggregate(name: 'profileWithAttribute')]
class ProfileWithAttribute extends AggregateRoot
{
    public function aggregateRootId(): string
    {
        return '1';
    }

    protected function apply(AggregateChanged $event): void
    {
        // do nothing
    }
}