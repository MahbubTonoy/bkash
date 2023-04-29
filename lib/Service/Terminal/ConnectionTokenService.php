<?php

// File generated from our OpenAPI spec

namespace Bkash\Service\Terminal;

class ConnectionTokenService extends \Bkash\Service\AbstractService
{
    /**
     * To connect to a reader the Bkash Terminal SDK needs to retrieve a short-lived
     * connection token from Bkash, proxied through your server. On your backend, add
     * an endpoint that creates and returns a connection token.
     *
     * @param null|array $params
     * @param null|array|\Bkash\Util\RequestOptions $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\Terminal\ConnectionToken
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/terminal/connection_tokens', $params, $opts);
    }
}
