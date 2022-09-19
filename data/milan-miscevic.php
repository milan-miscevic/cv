<?php

declare(strict_types=1);

use Mmm\Cv\Profile\About;
use Mmm\Cv\Profile\Config;
use Mmm\Cv\Profile\Contact;
use Mmm\Cv\Profile\Education;
use Mmm\Cv\Profile\Language;
use Mmm\Cv\Profile\Link;
use Mmm\Cv\Profile\Position;
use Mmm\Cv\Profile\Profile;
use Mmm\Cv\Profile\Project;
use Mmm\Cv\Profile\Technology;
use Mmm\Cv\Profile\TechnologyGroup;

return new Profile(
    new About(
        null,
        'Milan Miščević',
        'PHP Developer',
        'I am a PHP developer with more than 10 years of software development experience and the first steps made into web development back in 2003. Learning new technologies and concepts every day, I am devoted to ensuring high quality and maintainable code with integrated best coding practices. I have a master\'s degree in computer science. A team player and interested in solving complex problems.',
        [
            'PHP',
            'object-oriented design',
            'backend development',
            'code quality',
        ],
    ),
    [
        new Position(
            'PHP Developer',
            'Lakeside',
            new DateTimeImmutable('2020-11-16'),
            null,
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
        ),
        new Position(
            'PHP Developer',
            'inRecursion (my agency)',
            new DateTimeImmutable('2015-04-01'),
            null,
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
        ),
        new Position(
            'PHP / Full Stack Developer',
            'LifeForm',
            new DateTimeImmutable('2015-03-10'),
            new DateTimeImmutable('2020-11-13'),
            null,
            'Senior developer roles, design of a new framework-agnostic architecture, Linux administration, education.',
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
        ),
        new Position(
            'PHP / Full Stack Developer',
            'To Islands Travel',
            new DateTimeImmutable('2014-04-01'),
            new DateTimeImmutable('2018-01-31'),
            null,
            'Senior developer roles, Linux administration, education.',
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
        'Banja Luka',
        'Bosnia and Herzegovina',
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
        new Language('Serbian', 'Native'),
        new Language('English', 'C1/C2'),
        new Language('German', 'B1'),
    ],
    new Config('yyyy', 'LLLL yyyy', 'en_US'),
);
