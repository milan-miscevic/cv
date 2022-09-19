<?php

declare(strict_types=1);

use Mmm\Cv\Profile\Profile;
use Mmm\Cv\Profile\Project;
use Mmm\Cv\Profile\Technological;

function formatDate(?DateTimeInterface $dateTime, string $format, string $present, string $locale): string
{
    if ($dateTime === null) {
        return $present;
    }

    $formatter = new \IntlDateFormatter($locale, 0, 0);
    $formatter->setPattern($format);
    return (string) $formatter->format($dateTime);
}

/**
 * @param Technological[] $technologies
 */
function formatTechnologies(array $technologies): string
{
    $f = function (Technological $technological): string {
        return $technological->getValue();
    };

    return implode(', ', array_map($f, $technologies));
}

/**
 * @param Project[] $projects
 */
function formatProjects(array $projects): string
{
    $f = function (Project $project): string {
        return sprintf(
            '<a href="%s">%s</a>',
            $project->url,
            $project->name,
        );
    };

    return implode(', ', array_map($f, $projects));
}

/** @var array<string, string> $translations */
/** @var Profile $profile */

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>CV</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php if ($profile->about->picture !== null) { ?>
<table>
    <tr>
        <td><img src="<?= $profile->about->picture ?>" height="130"></td>
        <td style="padding: 30px;">
            <h1><?= $profile->about->name ?></h1>
            <h3><?= $profile->about->occupation ?></h3>
        </td>
    </tr>
</table>
<?php } else { ?>
<h1><?= $profile->about->name ?></h1>
<h3><?= $profile->about->occupation ?></h3>
<?php }?>

<br>

<table>
<tr>
<td class="left">

<table>
    <tr>
        <td><img src="images/profile-12x12.png"></td>
        <td>
            <p class="section"><?= $translations['profile'] ?></p>
            <p><?= $profile->about->summary ?></p>
<?php if (is_string($profile->about->specialties)) { ?>
            <p><?= $profile->about->specialties ?></p>
<?php } elseif (count($profile->about->specialties) > 0) { ?>
            <p><?= $translations['specialties'] ?>: <?= implode(', ', $profile->about->specialties) ?>.</p>
<?php } ?>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td><img src="images/employment-12x12.png"></td>
        <td>
            <div>
                <p class="section"><?= $translations['recent-work-experience'] ?></p>
            </div>
            <?php foreach ($profile->positions as $index => $job) { ?>
                <div <?php if ($index > 0) {
                    echo ' class=topmargin';
                } ?>>
                    <p>
                        <span class="role">
                            <?= $job->role ?>
                            <?php
                                $company = '';
                if (isset($job->company)) {
                    $company = $translations['at'] . ' ' . $job->company;
                }
                echo $company;
                ?>
                        </span>
                        <br>
                        <span class="timespan">
                            <?= formatDate($job->startDate, $profile->config->positionDateFormat, $translations['present'], $profile->config->locale) ?> –
                            <?= formatDate($job->endDate, $profile->config->positionDateFormat, $translations['present'], $profile->config->locale) ?>
                        </span>
                    </p>
<?php if (isset($job->aboutCompany)) { ?>
                    <p><?= $job->aboutCompany ?></p>
<?php } ?>
                    <p><?= $job->description ?></p>
<?php if (count($job->technologies) > 0) { ?>
                    <p><?= $translations['technologies'] ?>: <?= formatTechnologies($job->technologies) ?>.</p>
<?php } ?>
<?php if (count($job->projects) > 0) { ?>
                                            <p><?= (count($job->projects) > 1) ? $translations['projects'] : $translations['project'] ?>: <?= formatProjects($job->projects) ?></p>
<?php } ?>
<?php if (isset($job->additional) > 0) { ?>
                    <p><?= $job->additional ?></p>
<?php } ?>
                                    </div>
            <?php } ?>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td><img src="images/education-12x12.png"></td>
        <td>
            <p class="section"><?= $translations['education'] ?></p>
<?php foreach ($profile->educations as $degree) { ?>
            <p>
                <span class="role"><?= $degree->degree ?>, <?= $degree->school ?>, <?= $degree->location ?></span>
                <br>
                <span class="timespan"><?= formatDate($degree->graduationDate, $profile->config->educationDateFormat, $translations['present'], $profile->config->locale) ?></span>
            </p>
<?php } ?>
        </td>
    </tr>
</table>

</td>
<td class="middle">
</td>
<td class="right">

<table>
<tr>
<td>

<span class="section"><?= $translations['details'] ?></span>
<br>
<?= $profile->contact->city ?>
<br>
<?php if (isset($profile->contact->country)) { ?>
<?= $profile->contact->country ?>
<br>
<?php } ?>
<?= $profile->contact->phone ?>
<br>
<a href="mailto:<?= $profile->contact->email ?>"><?= $profile->contact->email ?></a>
<?php if ($profile->contact->skype !== null) { ?>
<br>
Skype: <?= $profile->contact->skype ?>
<?php } ?>

<br>
<br>

<span class="section"><?= $translations['links'] ?></span>
<br>
<?php foreach ($profile->links as $link) { ?>
    <a href="<?= $link->url ?>"><?= $link->name ?></a>
    <br>
<?php } ?>

<br>

<span class="section"><?= $translations['languages'] ?></span>
<?php foreach ($profile->languages as $language) { ?>
<br>
<?= $language->name ?> (<?= $language->level ?>)
<?php } ?>

</td>
</tr>
</table>

</td>
</tr>
</table>

</body>

</html>
