<?php

declare(strict_types=1);

namespace Mmm\Cv\Tests\Generator;

use Mmm\Cv\Generator\Generator;
use Mmm\Cv\Profile\Profile;
use PHPUnit\Framework\TestCase;

class GeneratorTest extends TestCase
{
    // @todo
    private string $rootFolder = '/app';

    /**
     * @dataProvider dataProvider
     */
    public function testData(Profile $profile, string $language, string $generatedCv): void
    {
        $generator = new Generator($this->rootFolder);

        $this->assertSame(
            file_get_contents($generatedCv),
            $generator->generate($profile, 'html', $language),
        );
    }

    /**
     * @return string[][]
     */
    public function dataProvider(): array
    {
        return [
            [
                require implode(DIRECTORY_SEPARATOR, [$this->rootFolder, 'data', 'milan-miscevic.php']),
                'en',
                implode(DIRECTORY_SEPARATOR, [$this->rootFolder, 'docs', 'cv.htm']),
            ],
            [
                require implode(DIRECTORY_SEPARATOR, [$this->rootFolder, 'tests', 'data', 'minimal-profile.php']),
                'en',
                implode(DIRECTORY_SEPARATOR, [$this->rootFolder, 'tests', 'data', 'minimal-profile.htm']),
            ],
        ];
    }
}
