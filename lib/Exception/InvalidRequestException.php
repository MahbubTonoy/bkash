<?php

namespace Bkash\Exception;

/**
 * InvalidRequestException is thrown when a request is initiated with invalid
 * parameters.
 */
class InvalidRequestException extends ApiErrorException
{
    protected $bkashParam;

    /**
     * Creates a new InvalidRequestException exception.
     *
     * @param string $message the exception message
     * @param null|int $httpStatus the HTTP status code
     * @param null|string $httpBody the HTTP body as a string
     * @param null|array $jsonBody the JSON deserialized body
     * @param null|array|\Bkash\Util\CaseInsensitiveArray $httpHeaders the HTTP headers array
     * @param null|string $bkashCode the Bkash error code
     * @param null|string $bkashParam the parameter related to the error
     *
     * @return InvalidRequestException
     */
    public static function factory(
        $message,
        $httpStatus = null,
        $httpBody = null,
        $jsonBody = null,
        $httpHeaders = null,
        $bkashCode = null,
        $bkashParam = null
    ) {
        $instance = parent::factory($message, $httpStatus, $httpBody, $jsonBody, $httpHeaders, $bkashCode);
        $instance->setBkashParam($bkashParam);

        return $instance;
    }

    /**
     * Gets the parameter related to the error.
     *
     * @return null|string
     */
    public function getBkashParam()
    {
        return $this->bkashParam;
    }

    /**
     * Sets the parameter related to the error.
     *
     * @param null|string $bkashParam
     */
    public function setBkashParam($bkashParam)
    {
        $this->bkashParam = $bkashParam;
    }
}
