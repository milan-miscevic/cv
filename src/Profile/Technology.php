<?php

declare(strict_types=1);

namespace Mmm\Cv\Profile;

enum Technology: string
{
    case Apache = 'Apache';
    case C = 'C';
    case CSharp = 'C#';
    case Capistrano = 'Capistrano';
    case Codeception = 'Codeception';
    case Composer = 'Composer';
    case Delphi = 'Delphi';
    case Docker = 'Docker';
    case Doctrine = 'Doctrine';
    case Elasticsearch = 'Elasticsearch';
    case Git = 'Git';
    case GitHubActions = 'GitHub Actions';
    case Grunt = 'Grunt';
    case Java = 'Java';
    case JavaScript = 'JavaScript';
    case Laravel = 'Laravel';
    case Linux = 'Linux';
    case MongoDB = 'MongoDB';
    case MySQL = 'MySQL';
    case Nginx = 'Nginx';
    case PHP = 'PHP';
    case PHPCSFixer = 'PHP-CS-Fixer';
    case PHPStan = 'PHPStan';
    case PHPUnit = 'PHPUnit';
    case PLSQL = 'PL/SQL';
    case Psalm = 'Psalm';
    case Python = 'Python';
    case REST = 'REST';
    case Redis = 'Redis';
    case SOAP = 'SOAP';
    case SQLite = 'SQLite';
    case SVN = 'SVN';
    case Slim = 'Slim';
    case Solr = 'Solr';
    case SonarCloud = 'SonarCloud';
    case Sphinx = 'Sphinx';
    case Symfony = 'Symfony';
    case Travis = 'Travis';
    case Varnish = 'Varnish';
    case Wordpress = 'Wordpress';
    case Yii = 'Yii';
    case Zend = 'Zend';
    case jQuery = 'jQuery';
    case vanilla = 'vanilla';
}
