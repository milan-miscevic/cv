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
        'I am a seasoned software engineer with more than 10 years of software development experience. Learning new technologies and concepts every day, I am devoted to ensuring high-quality and maintainable code with integrated best coding practices. I have a master\'s degree in Computer Science. A team player and interested in solving complex problems.',
        [
            'PHP',
            'object-oriented design',
            'backend development',
            'tech debt',
        ],
    ),
    [
        new Position(
            'Software Engineer',
            'AUTO1 Group (Germany)',
            new DateTimeImmutable('2021-05-01'),
            null,
            null,
            'AUTO1 Group is Europe’s leading digital platform for buying and selling used cars online.
            <br>
            Development of internal microservices and applications, project leading in cooperation with product leadership and other teams, code reviews, technical specification writing and designing, technical improvement proposals, production incidence and proactive troubleshooting, tech debt, refactoring, migrating monolithic to microservices architecture.',
            [
                new TechnologyGroup(Technology::PHP, [Technology::Symfony, Technology::Doctrine]),
                Technology::MySQL,
                Technology::OpenAPI,
                Technology::REST,
                Technology::GraphQL,
                Technology::Jenkins,
                Technology::Terraform,
                Technology::AWS,
                Technology::Go,
                Technology::JavaScript,
            ],
            [],
            null,
        ),
        new Position(
            'Software Engineer',
            'Lakeside R&D (Serbia)',
            new DateTimeImmutable('2020-11-16'),
            new DateTimeImmutable('2021-04-09'),
            null,
            'Lakeside R&D is a tech agency providing solutions in the e-commerce, health, and education sectors.
            <br>
            Development of a new backend platform using the DDD approach.',
            [
                new TechnologyGroup(Technology::PHP, [Technology::Symfony, Technology::Doctrine]),
                Technology::MySQL,
                Technology::REST,
            ],
            [],
            null,
        ),
        new Position(
            'Software Engineer',
            'LifeForm (Bosnia and Herzegovina)',
            new DateTimeImmutable('2015-03-10'),
            new DateTimeImmutable('2020-11-13'),
            null,
            'LifeForm is a tech agency providing community solutions in the health sector.
            <br>
            Development and web server administration of the custom-made CMS, design of a new framework-agnostic architecture.',
            [
                new TechnologyGroup(Technology::PHP, [Technology::Zend, Technology::Symfony]),
                Technology::MySQL,
                new TechnologyGroup(Technology::JavaScript, [Technology::jQuery]),
                Technology::Varnish,
                Technology::Nginx,
                Technology::Elasticsearch,
                Technology::Solr,
            ],
            [],
            null,
        ),
        new Position(
            'Full Stack Developer',
            'To Islands Travel (Croatia)',
            new DateTimeImmutable('2014-05-21'),
            new DateTimeImmutable('2018-01-31'),
            null,
            'Development and web server administration of the custom-made CMSs.',
            [
                new TechnologyGroup(Technology::PHP, [Technology::Yii, Technology::vanilla]),
                Technology::MySQL,
                new TechnologyGroup(Technology::JavaScript, [Technology::jQuery]),
                Technology::Sphinx,
            ],
            [
                new Project('Croatia Hotels and Apartments', 'https://www.croatia-hotels-apartments.com/'),
                new Project('Holiday-Link', 'https://www.holiday-link.com/'),
            ],
            null,
        ),
        new Position(
            'Embedded Developer',
            'RT-RK (Bosnia and Herzegovina)',
            new DateTimeImmutable('2014-02-18'),
            new DateTimeImmutable('2015-03-31'),
            null,
            'Development of drivers and software components according to the ISO 26262 standard.',
            [
                Technology::C,
                Technology::Python,
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
                new TechnologyGroup(Technology::PHP, [Technology::Zend, Technology::Wordpress, Technology::vanilla]),
                Technology::MySQL,
                new TechnologyGroup(Technology::JavaScript, [Technology::jQuery]),
            ],
            [],
            null,
        ),
        new Position(
            'Software Developer / System Engineer',
            'Financ (Bosnia and Herzegovina)',
            new DateTimeImmutable('2010-04-28'),
            new DateTimeImmutable('2014-02-14'),
            null,
            'Development and administration of the transaction processing system, development of software for POS terminals.',
            [
                Technology::Java,
                Technology::PHP,
                Technology::PLSQL,
                Technology::CSharp,
                Technology::SQLite,
                Technology::SOAP,
                Technology::Delphi,
            ],
            [],
            null,
        ),
        new Position(
            'PHP Developer',
            'Gimnazija Banja Luka (Bosnia and Herzegovina)',
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
        null,
    ),
    [
        new Link('LinkedIn', 'https://www.linkedin.com/in/milanmiscevic/'),
        new Link('GitHub', 'https://github.com/milan-miscevic'),
        new Link('Full CV', 'https://milan-miscevic.github.io/cv/'),
    ],
    [
        new Language(LanguageName::Serbian, [LanguageLevel::Native]),
        new Language(LanguageName::English, [LanguageLevel::C1]),
        new Language(LanguageName::German, [LanguageLevel::B1]),
    ],
    new Config('LLLL yyyy', 'LLLL yyyy', 'en_US'),
);
