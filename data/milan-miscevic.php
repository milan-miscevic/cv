<?php

declare(strict_types=1);

use Mmm\CvCreator\Profile\About;
use Mmm\CvCreator\Profile\Config;
use Mmm\CvCreator\Profile\Contact;
use Mmm\CvCreator\Profile\Education;
use Mmm\CvCreator\Profile\Language;
use Mmm\CvCreator\Profile\LanguageLevel;
use Mmm\CvCreator\Profile\LanguageName;
use Mmm\CvCreator\Profile\Link;
use Mmm\CvCreator\Profile\Position;
use Mmm\CvCreator\Profile\Profile;
use Mmm\CvCreator\Profile\Project;
use Mmm\CvCreator\Profile\Technology;
use Mmm\CvCreator\Profile\TechnologyGroup;

return new Profile(
    new About(
        null,
        'Milan Miščević',
        'Software Engineer',
        'I am a software engineer with more than 12 years of software development experience and my first steps were made in web development back in 2003. Learning new technologies and concepts every day, I am devoted to ensuring high-quality and maintainable code with integrated best coding practices. I have a master\'s degree in Computer Science. A team player and interested in solving complex problems.',
        [
            'PHP',
            'object-oriented design',
            'backend development',
            'code quality',
        ],
    ),
    [
        new Position(
            'Software Engineer',
            'AUTO1 Group',
            new DateTimeImmutable('2021-05-01'),
            null,
            null,
            'Development of internal microservices and applications.',
            [
                new TechnologyGroup(Technology::PHP, [Technology::Symfony, Technology::Doctrine]),
                Technology::MySQL,
                Technology::REST,
                Technology::Swagger,
                Technology::GraphQL,
                Technology::Git,
                Technology::Composer,
                Technology::Docker,
                Technology::Terraform,
                Technology::Jenkins,
                Technology::Kibana,
                Technology::Behat,
                Technology::Wiremock,
                Technology::PHPStan,
                Technology::PHPUnit,
                Technology::PHPCodeSniffer,
                Technology::Go,
                new TechnologyGroup(Technology::JavaScript, [Technology::TypeScript, Technology::React]),
            ],
            [],
            null,
        ),
        new Position(
            'Software Engineer',
            'Lakeside',
            new DateTimeImmutable('2020-11-16'),
            new DateTimeImmutable('2021-04-09'),
            null,
            'Development of a new backend platform using the DDD approach.',
            [
                new TechnologyGroup(Technology::PHP, [Technology::Symfony, Technology::Doctrine]),
                Technology::MySQL,
                Technology::Git,
                Technology::Composer,
                Technology::REST,
                Technology::Docker,
                Technology::PHPUnit,
                Technology::PHPStan,
                Technology::GitHubActions,
                Technology::Nginx,
            ],
            [
                new Project('thelittleloop', 'https://thelittleloop.com/'),
            ],
            null,
        ),
        new Position(
            'Software Engineer',
            'inRecursion (my agency)',
            new DateTimeImmutable('2015-04-01'),
            new DateTimeImmutable('2021-04-09'),
            null,
            'Non-client work on personal (open source) projects.',
            [
                new TechnologyGroup(Technology::PHP, [Technology::Yii, Technology::Slim, Technology::Laravel]),
                Technology::MySQL,
                Technology::JavaScript,
                Technology::Git,
                Technology::Composer,
                Technology::Docker,
                Technology::PHPUnit,
                Technology::PHPCSFixer,
                Technology::Psalm,
                Technology::PHPStan,
                Technology::GitHubActions,
                Technology::Travis,
                Technology::SonarCloud,
                Technology::Nginx,
            ],
            [],
            null,
        ),
        new Position(
            'Software Engineer',
            'LifeForm',
            new DateTimeImmutable('2015-03-10'),
            new DateTimeImmutable('2020-11-13'),
            null,
            'Development and web server administration of the custom-made CMS, design of a new framework-agnostic architecture.',
            [
                new TechnologyGroup(Technology::PHP, [Technology::Zend, Technology::Symfony]),
                Technology::MySQL,
                new TechnologyGroup(Technology::JavaScript, [Technology::jQuery]),
                Technology::Git,
                Technology::Composer,
                Technology::Docker,
                Technology::Varnish,
                Technology::Grunt,
                Technology::PHPUnit,
                Technology::PHPCSFixer,
                Technology::PHPStan,
                Technology::Linux,
                Technology::Nginx,
                Technology::Elasticsearch,
                Technology::Solr,
                Technology::MongoDB,
                Technology::Redis,
            ],
            [
                new Project('SteadyHealth', 'https://www.steadyhealth.com/'),
            ],
            null,
        ),
        new Position(
            'Full Stack Developer',
            'To Islands Travel',
            new DateTimeImmutable('2014-05-21'),
            new DateTimeImmutable('2018-01-31'),
            null,
            'Development and web server administration of the custom-made CMSs.',
            [
                new TechnologyGroup(Technology::PHP, [Technology::Yii, Technology::vanilla]),
                Technology::MySQL,
                new TechnologyGroup(Technology::JavaScript, [Technology::jQuery]),
                Technology::Git,
                Technology::Composer,
                Technology::REST,
                Technology::Linux,
                Technology::Apache,
                Technology::Sphinx,
                Technology::Codeception,
                Technology::Capistrano,
            ],
            [
                new Project('Croatia Hotels and Apartments', 'https://www.croatia-hotels-apartments.com/'),
                new Project('Holiday-Link', 'https://www.holiday-link.com/'),
            ],
            null,
        ),
        new Position(
            'Embedded Developer',
            'RT-RK',
            new DateTimeImmutable('2014-02-18'),
            new DateTimeImmutable('2015-03-31'),
            null,
            'Development of drivers and software components according to the ISO 26262 standard.',
            [
                Technology::C,
                Technology::Python,
                Technology::SVN,
            ],
            [],
            null,
        ),
        new Position(
            'Full Stack Developer',
            null,
            new DateTimeImmutable('2013-02-23'),
            new DateTimeImmutable('2014-03-13'),
            null,
            'Development of (custom-made) CMSs and WordPress plugins for small companies.',
            [
                new TechnologyGroup(Technology::PHP, [Technology::Zend, Technology::vanilla]),
                Technology::MySQL,
                new TechnologyGroup(Technology::JavaScript, [Technology::jQuery]),
                Technology::Git,
                Technology::Linux,
                Technology::Apache,
                Technology::SVN,
                Technology::Wordpress,
            ],
            [],
            null,
        ),
        new Position(
            'Software Developer / System Engineer',
            'Financ',
            new DateTimeImmutable('2010-04-28'),
            new DateTimeImmutable('2014-02-14'),
            null,
            'Development and administration of the transaction processing system, development of software for POS terminals.',
            [
                Technology::Java,
                Technology::PHP,
                Technology::Linux,
                Technology::PLSQL,
                Technology::CSharp,
                Technology::SVN,
                Technology::SQLite,
                Technology::SOAP,
                Technology::Delphi,
            ],
            [],
            null,
        ),
        new Position(
            'PHP Developer',
            'Gimnazija Banja Luka',
            new DateTimeImmutable('2004-03'),
            new DateTimeImmutable('2008-09'),
            null,
            'Maintenance and development of the school forum, development of plugins.',
            [
                new TechnologyGroup(Technology::PHP, [Technology::phpBB]),
                Technology::MySQL,
            ],
            [],
            null,
        ),
    ],
    [
        new Education(
            'Master\'s degree',
            'Faculty of Electrical Engineering',
            'Banja Luka',
            new DateTimeImmutable('2020-11-30'),
        ),
        new Education(
            'Engineer\'s degree',
            'Faculty of Electrical Engineering',
            'Banja Luka',
            new DateTimeImmutable('2010-03-20'),
        ),
    ],
    new Contact(
        'Berlin',
        'Germany',
        '',
        'milan.miscevic@gmail.com',
        '',
    ),
    [
        new Link('LinkedIn', 'https://www.linkedin.com/in/milanmiscevic/'),
        new Link('GitHub', 'https://github.com/milan-miscevic'),
        new Link('Twitter', 'https://twitter.com/try_throw_catch'),
    ],
    [
        new Language(LanguageName::Serbian, [LanguageLevel::Native]),
        new Language(LanguageName::English, [LanguageLevel::C1, LanguageLevel::C2]),
        new Language(LanguageName::German, [LanguageLevel::B1, LanguageLevel::B2]),
    ],
    new Config('LLLL yyyy', 'LLLL yyyy', 'en_US'),
);
