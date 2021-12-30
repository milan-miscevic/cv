<?php

declare(strict_types=1);

namespace Mmm\Cv\Profile;

class About
{
    public function __construct(
        public string $name,
        public string $summary,
        /** @var string[] */
        public array $specialties,
    ) {
    }
}
