<?php

/*
 * This file is part of the ubivox-php SDK.
 *
 * (c) Jens Beltofte <jens.beltofte@ffwagency.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include("../../vendor/autoload.php");
include("../settings.php");

use Ubivox\Api\Client as UbivoxClient;
use Ubivox\Api\Resources\Endpoints\Maillist\UpdateMaillistOptinOptoutSettings;

$client = new UbivoxClient(UBIVOX_COMPANY, UBIVOX_USERNAME, UBIVOX_PASSWORD);
$params = [
    'maillist' => 47365,
    'optin_subject' => 'Confirm your optin....',
    'optin_body' => 'Some random optin body....',
    'optin_success_url' => 'https://company.tld/newsletter/optin/success.html',
    'optin_failure_url' => 'https://company.tld/newsletter/optin/failure.html',
    'optout_success_url' => 'https://company.tld/newsletter/optout/success.html',
];
$lists = new UpdateMaillistOptinOptoutSettings($client, $params);

echo "<pre>";
var_dump($lists->getResultRaw());
exit;
