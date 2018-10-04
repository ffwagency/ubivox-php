<?php

/*
 * This file is part of the ubivox-php SDK.
 *
 * (c) Jens Beltofte <jens.beltofte@ffwagency.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ubivox\Api\Resources\Endpoints\Maillist;

use Ubivox\Api\Resources\ResourceAbstract;

/**
 * Class ListMaillists.
 *
 * @package Ubivox\Api
 */
class ListMaillists extends ResourceAbstract
{
    /**
     * Return a simple formatted version of the API result.
     *
     * @return array
     */
    public function getResultFormatted()
    {
        $result = $this->resourceResult;
        $items = [];

        foreach ($result as $item) {
            $items[$item['id']] = $item['title'];
        }

        return $items;
    }
}
