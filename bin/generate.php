<?php

declare(strict_types=1);

use Mmm\CvCreator\Generator\Config;
use Mmm\CvCreator\Generator\HtmlGenerator;
use Mmm\CvCreator\Generator\MarkdownGenerator;
use Mmm\CvCreator\Generator\Translator;
use Mmm\CvCreator\Profile\Profile;

require_once 'vendor/autoload.php';

$rootFolder = dirname(dirname(__FILE__));

/** @var Profile */
$profile = require_once $rootFolder . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'milan-miscevic.php';
$htmlFile = $rootFolder . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'cv.htm';
$mdFile = $rootFolder . DIRECTORY_SEPARATOR . 'docs' . DIRECTORY_SEPARATOR . 'index.md';

// @todo temporary
$generatorRootFolder = $rootFolder . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'milan-miscevic' . DIRECTORY_SEPARATOR . 'cv-creator';

$translator = new Translator();

$htmlGenerator = new HtmlGenerator($translator, $generatorRootFolder);
$markdownGenerator = new MarkdownGenerator($translator);

file_put_contents(
    $htmlFile,
    $htmlGenerator->generate($profile, new Config('en', 3, 'html')),
);

file_put_contents(
    $mdFile,
    $markdownGenerator->generate($profile, new Config('en', 99, 'md')),
);
