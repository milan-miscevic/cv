<?php

declare(strict_types=1);

namespace Mmm\Cv\Tests\Generator;

use Mmm\Cv\Generator\Config;
use Mmm\Cv\Generator\Generator;
use Mmm\Cv\Profile\Profile;
use PHPUnit\Framework\TestCase;

class GeneratorTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testData(Profile $profile, string $language, string $format, string $generatedCv): void
    {
        $rootFolder = dirname(dirname(dirname(__FILE__)));
        $generator = new Generator($rootFolder);

        $this->assertSame(
            file_get_contents($generatedCv),
            $generator->generate(
                $profile,
                new Config(
                    $language,
                    $format,
                ),
            ),
        );
    }

    /**
     * @return string[][]
     */
    public function dataProvider(): array
    {
        $rootFolder = dirname(dirname(dirname(__FILE__)));

        return [
            [
                require implode(DIRECTORY_SEPARATOR, [$rootFolder, 'data', 'milan-miscevic.php']),
                'en',
                'html',
                implode(DIRECTORY_SEPARATOR, [$rootFolder, 'docs', 'cv.htm']),
            ],
            [
                require implode(DIRECTORY_SEPARATOR, [$rootFolder, 'tests', 'data', 'minimal-profile.php']),
                'en',
                'html',
                implode(DIRECTORY_SEPARATOR, [$rootFolder, 'tests', 'data', 'minimal-profile.htm']),
            ],
            [
                require implode(DIRECTORY_SEPARATOR, [$rootFolder, 'tests', 'data', 'full-profile.php']),
                'en',
                'html',
                implode(DIRECTORY_SEPARATOR, [$rootFolder, 'tests', 'data', 'full-profile.htm']),
            ],
            [
                require implode(DIRECTORY_SEPARATOR, [$rootFolder, 'data', 'milan-miscevic.php']),
                'en',
                'md',
                implode(DIRECTORY_SEPARATOR, [$rootFolder, 'docs', 'index.md']),
            ],
        ];
    }
}
