<?php

declare(strict_types=1);

namespace Mmm\Cv\Generator;

use Mmm\Cv\Profile\Profile;
use Throwable;

class Generator
{
    private const TRANSLATIONS = [
        'en' => [
            'at' => 'at',
            'details' => 'Details',
            'education' => 'Education',
            'languages' => 'Languages',
            'links' => 'Links',
            'present' => 'Present',
            'profile' => 'Profile',
            'project' => 'Project',
            'projects' => 'Projects',
            'recent-work-experience' => 'Recent work experience',
            'specialties' => 'Specialties',
            'technologies' => 'Technologies',
        ],
    ];

    public function __construct(private string $rootFolder)
    {
    }

    public function generate(string $name, string $format, string $language): void
    {
        try {
            /** @var Profile */
            $profile = require $this->rootFolder . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $name . '.php';

            $template = $this->rootFolder . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . $format . '.php';
            $translations = self::TRANSLATIONS[$language];
            $out = $this->rootFolder . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'cv.htm';

            ob_start();
            require $template;
            $content = (string) ob_get_contents();
            ob_end_clean();

            file_put_contents($out, $content);
        } catch (Throwable $ex) {
            echo $ex->getMessage();
        }
    }
}
