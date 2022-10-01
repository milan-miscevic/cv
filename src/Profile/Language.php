<?php

declare(strict_types=1);

namespace Mmm\Cv\Profile;

class Language
{
    public function __construct(
        public LanguageName $name,
        public LanguageLevel $level,
    ) {
    }
}
