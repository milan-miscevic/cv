<?php

declare(strict_types=1);

namespace Mmm\Cv\Profile;

use DateTimeInterface;

class Position
{
    public function __construct(
        public string $role,
        public string $company,
        public DateTimeInterface $startDate,
        public ?DateTimeInterface $endDate,
        public string $description,
        /** @var Technological[] */
        public array $technologies,
        /** @var Project[] */
        public array $projects,
    ) {
    }
}
