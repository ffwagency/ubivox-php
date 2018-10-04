<?php

/*
 * This file is part of the ubivox-php SDK.
 *
 * (c) Jens Beltofte <jens.beltofte@ffwagency.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ubivox\Api;

use Zend\XmlRpc\Client as XmlRpcClient;
use Zend\XmlRpc\Client\Exception;

/**
 * Class Client
 *
 * @package Ubivox\Api
 */
class Client
{
    /**
     * XmlRpc connection.
     *
     * @var XmlRpcClient
     */
    protected $client;

    /**
     * Ubivox API URL.
     *
     * @var string
     */
    protected $apiUrl;


    /**
     * Array with debug options
     *
     * @var array
     */
    protected $debug = array('trace' => 1, 'exceptions' => true);

    /**
     * Initiate the XmlRpc client.
     *
     * @param string $company
     *   Machine name version of company name used in Ubivox URL.
     * @param string $username
     *   Ubivox user name.
     * @param string $password
     *   Ubivox API password.
     */
    public function __construct(string $company, string $username, string $password)
    {
        $this->apiUrl = 'https://' . $username . ':' . $password . '@' . $company . '.clients.ubivox.com/xmlrpc/';
        $this->client =  new XmlRpcClient($this->apiUrl);
    }

    /**
     * Return XmlRpc client.
     *
     * @return XmlRpcClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Execute XmlRpc call to Ubivox API.
     *
     * @param string $method
     *   The API method being executed.
     * @param array $params
     *   Array with method specific parameters.
     *
     * @return array
     *   Result from API call.
     */
    public function callApi($method, $params = [])
    {
        try {
            return $this->getClient()->call($method, $params);
        } catch (Exception\HttpException $e) {
            $message = "XmlRpc HTTP Exception: (code: {$e->getCode()}, message: {$e->getMessage()})";
            $this->handleError($message, $e);
        } catch (Exception\RuntimeException $e) {
            $message = "XmlRpc Runtime Exception: (code: {$e->getCode()}, message: {$e->getMessage()})";
            $this->handleError($message, $e);
        } catch (Exception\IntrospectException $e) {
            $message = "XmlRpc HTTP Introspect: (code: {$e->getCode()}, message: {$e->getMessage()})";
            $this->handleError($message, $e);
        } catch (Exception\FaultException $e) {
            $message = "XmlRpc Fault Exception: (code: {$e->getCode()}, message: {$e->getMessage()})";
            $this->handleError($message, $e);
        } catch (Exception\InvalidArgumentException $e) {
            $message = "XmlRpc Invalid Argument Exception: (code: {$e->getCode()}, message: {$e->getMessage()})";
            $this->handleError($message, $e);
        }
    }

    /**
     * Handle API error.
     *
     * @param string $message
     *   Error message to be logged.
     * @param integer $type
     *   Error type
     * @param \Exception $exception
     *   Exception of a mixed type.
     */
    private function handleError($message, $exeption, $type = E_USER_ERROR)
    {
        trigger_error($message, $type);
    }
}
