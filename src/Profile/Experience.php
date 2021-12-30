<?php

declare(strict_types=1);

namespace Mmm\Cv\Profile;

class Experience
{
    public function __construct(
        public string $role,
        public string $company,
        public string $startDate,
        public string $endDate,
        public string $description,
        /** @var string[] */
        public array $technologies,
        /** @var Project[] */
        public array $projects,
    ) {
    }
}
