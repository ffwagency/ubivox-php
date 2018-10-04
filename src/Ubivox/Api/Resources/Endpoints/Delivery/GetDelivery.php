<?php

/*
 * This file is part of the ubivox-php SDK.
 *
 * (c) Jens Beltofte <jens.beltofte@ffwagency.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ubivox\Api\Resources\Endpoints\Delivery;

use Ubivox\Api\Resources\ResourceAbstract;

/**
 * Class GetDelivery.
 *
 * @package Ubivox\Api
 */
class GetDelivery extends ResourceAbstract
{
    /**
     * Return a simple formatted version of the API result.
     *
     * @return array
     */
    public function getResultFormatted()
    {
        $result = $this->resourceResult;
        $stats = [];

        foreach ($result['stats'] as $item) {
            $stats[$item['date']] = $item;
        }

        $result['stats'] = $stats;

        return $result;
    }
}
