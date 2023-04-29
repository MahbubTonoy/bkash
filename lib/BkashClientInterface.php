<?php

namespace Bkash;

/**
 * Interface for a Bkash client.
 */
interface BkashClientInterface extends BaseBkashClientInterface
{
    /**
     * Sends a request to Bkash's API.
     *
     * @param string $method the HTTP method
     * @param string $path the path of the request
     * @param array $params the parameters of the request
     * @param array|\Bkash\Util\RequestOptions $opts the special modifiers of the request
     *
     * @return \Bkash\BkashObject the object returned by Bkash's API
     */
    public function request($method, $path, $params, $opts);
}
