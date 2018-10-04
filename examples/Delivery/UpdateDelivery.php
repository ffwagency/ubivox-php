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
use Ubivox\Api\Resources\Endpoints\Delivery\UpdateDelivery;

$client = new UbivoxClient(UBIVOX_COMPANY, UBIVOX_USERNAME, UBIVOX_PASSWORD);
$params = [
   'delivery' => 872608,
   'subject' => 'The subject of my awesome Ubivox newsletter UPDATED ' . date('Y-m-d H:i:s') . '',
   'html_body' => '<html><head></head><body><h1>Hello world! Updated ' . date('Y-m-d H:i:s') . '</h1></body>',
   'text_body' => 'Hello world! Updated ' . date('Y-m-d H:i:s'),
   'list' => 47328
];
$lists = new UpdateDelivery($client, $params);

echo "<pre>";
var_dump($lists->getResultRaw());
exit;
