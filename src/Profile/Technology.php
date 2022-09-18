<?php

declare(strict_types=1);

namespace Mmm\Cv\Profile;

enum Technology: string implements Technological
{
    case Apache = 'Apache';
    case C = 'C';
    case Capistrano = 'Capistrano';
    case Codeception = 'Codeception';
    case Composer = 'Composer';
    case CSharp = 'C#';
    case Delphi = 'Delphi';
    case Docker = 'Docker';
    case Doctrine = 'Doctrine';
    case Elasticsearch = 'Elasticsearch';
    case Git = 'Git';
    case GitHubActions = 'GitHub Actions';
    case Grunt = 'Grunt';
    case Java = 'Java';
    case JavaScript = 'JavaScript';
    case jQuery = 'jQuery';
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
    case Redis = 'Redis';
    case REST = 'REST';
    case Slim = 'Slim';
    case SOAP = 'SOAP';
    case Solr = 'Solr';
    case SonarCloud = 'SonarCloud';
    case Sphinx = 'Sphinx';
    case SQLite = 'SQLite';
    case SVN = 'SVN';
    case Symfony = 'Symfony';
    case Travis = 'Travis';
    case vanilla = 'vanilla';
    case Varnish = 'Varnish';
    case Wordpress = 'Wordpress';
    case Yii = 'Yii';
    case Zend = 'Zend';

    public function getValue(): string
    {
        return $this->value;
    }
}
