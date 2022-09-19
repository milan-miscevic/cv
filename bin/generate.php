<?php

declare(strict_types=1);

use Mmm\Cv\Generator\Generator;

require 'vendor/autoload.php';

$rootFolder = dirname(dirname(__FILE__));
$generator = new Generator($rootFolder);

$generator->generate('milan-miscevic', 'html', 'en');
