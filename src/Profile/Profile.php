<?php

declare(strict_types=1);

namespace Mmm\Cv\Profile;

class Profile
{
    public function __construct(
        public About $about,
        /** @var Experience[] */
        public array $experiences,
        /** @var Education[] */
        public array $educations,
    ) {
    }
}
