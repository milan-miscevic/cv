<?php

declare(strict_types=1);

namespace Mmm\Cv\Profile;

class Education
{
    public function __construct(
        public string $degree,
        public string $school,
        public string $location,
        public string $graduationDate,
    ) {
    }
}
