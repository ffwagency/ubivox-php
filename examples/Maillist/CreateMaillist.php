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
use Ubivox\Api\Resources\Endpoints\Maillist\CreateMaillist;

$client = new UbivoxClient(UBIVOX_COMPANY, UBIVOX_USERNAME, UBIVOX_PASSWORD);
$params = [
    'title' => 'The Company Ltd - B2C users',
    'language' => 'en',
    'delivery_sender_name' => 'The Company Ltd.',
    'delivery_sender_email' => 'noreply@company.ltd',
    'primary_data_fields' => [],
];
$lists = new CreateMaillist($client, $params);

echo "<pre>";
var_dump($lists->getResultRaw());
exit;
