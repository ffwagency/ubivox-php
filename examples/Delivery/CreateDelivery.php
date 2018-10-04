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
use Ubivox\Api\Resources\Endpoints\Delivery\CreateDelivery;

$client = new UbivoxClient(UBIVOX_COMPANY, UBIVOX_USERNAME, UBIVOX_PASSWORD);
$params = [
   'subject' => 'The subject of my awesome Ubivox newsletter',
   'html_body' => '<html><head></head><body><h1>Hello world!</h1></body>',
   'text_body' => 'Hello world!',
   'list' => 47328
];
$lists = new CreateDelivery($client, $params);

echo "<pre>";
var_dump($lists->getResultRaw());
exit;
