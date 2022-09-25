<?php

declare(strict_types=1);

use Mmm\Cv\Generator\Generator;
use Mmm\Cv\Profile\Profile;

require_once 'vendor/autoload.php';

$rootFolder = dirname(dirname(__FILE__));

/** @var Profile */
$profile = require_once $rootFolder . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'milan-miscevic.php';
$outputFile = $rootFolder . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'cv.htm';

$generator = new Generator($rootFolder);

file_put_contents(
    $outputFile,
    $generator->generate($profile, 'html', 'en'),
);
