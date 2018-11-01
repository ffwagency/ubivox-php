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
 * Class CourseListStages.
 *
 * @package Ubivox\Api
 */
class CourseListStages extends ResourceAbstract
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
