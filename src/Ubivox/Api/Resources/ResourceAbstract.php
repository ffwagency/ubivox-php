<?php

/*
 * This file is part of the ubivox-php SDK.
 *
 * (c) Jens Beltofte <jens.beltofte@ffwagency.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ubivox\Api\Resources;

use Ubivox\Api;
use Ubivox\Api\Client as Client;

/**
 * Abstract class for all service endpoints.
 *
 * @package Ubivox\Api
 */
abstract class ResourceAbstract
{
    /**
     * Client Connection
     *
     * @var \Ubivox\Api\Client
     */
    protected $client;

    /**
     * @var array
     */
    protected $params;

    /**
     * @var String
     */
    protected $resourceName;

    /**
     * @var Object
     */
    protected $resourceResult;

    /**
     * Construct ResourceAbstract.
     *
     * @param \Ubivox\Api\Client $client
     *   The XmlRpc client to Ubivox.
     * @param array $params
     *   Array with method specific params.
     */
    public function __construct(Client $client, $params = [])
    {
        $this->client = $client;
        $this->params = $params;

        if (!isset($this->resourceName)) {
            $this->resourceName = $this->getResourceNameFromClass();
        }

        $this->resourceResult = $this->client->callApi($this->resourceName, $this->params);
    }

    /**
     * Return the raw result from the service endpoint.
     *
     * @return object
     */
    public function getResultRaw()
    {
        return $this->resourceResult;
    }

    /***
     * Find and return the resource name from the class name.
     *
     * @return string
     */
    protected function getResourceNameFromClass()
    {
        $namespacedClassName = get_class($this);
        $resourceName = join('', array_slice(explode('\\', $namespacedClassName), -1));
        $resourceName = preg_replace('/\B([A-Z])/', '_$1', $resourceName);
        $resourceName = strtolower("mailer.{$resourceName}");
        return $resourceName;
    }
}
