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
use Ubivox\Api\Resources\Endpoints\Maillist\ListMaillists;

$client = new UbivoxClient(UBIVOX_COMPANY, UBIVOX_USERNAME, UBIVOX_PASSWORD);
$lists = new ListMaillists($client);

echo "<pre>";
var_dump($lists->getResultFormatted());
exit;
