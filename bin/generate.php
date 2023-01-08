<?php

declare(strict_types=1);

use Mmm\CvCreator\Generator\Config;
use Mmm\CvCreator\Generator\Generator;
use Mmm\CvCreator\Profile\Profile;

require_once 'vendor/autoload.php';

$rootFolder = dirname(dirname(__FILE__));

/** @var Profile */
$profile = require_once $rootFolder . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'milan-miscevic.php';
$htmlFile = $rootFolder . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'cv.htm';
$mdFile = $rootFolder . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'index.md';

// @todo temporary
$generatorRootFolder = $rootFolder . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'milan-miscevic' . DIRECTORY_SEPARATOR . 'cv-creator';

$generator = new Generator($generatorRootFolder);

file_put_contents(
    $htmlFile,
    $generator->generate($profile, new Config('en', 4, 'html')),
);

file_put_contents(
    $mdFile,
    $generator->generate($profile, new Config('en', 99, 'md')),
);
