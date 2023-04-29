<?php

namespace Bkash\Exception\OAuth;

/**
 * Implements properties and methods common to all (non-SPL) Bkash OAuth
 * exceptions.
 */
abstract class OAuthErrorException extends \Bkash\Exception\ApiErrorException
{
    protected function constructErrorObject()
    {
        if (null === $this->jsonBody) {
            return null;
        }

        return \Bkash\OAuthErrorObject::constructFrom($this->jsonBody);
    }
}
