<?php

namespace Bkash\Exception;

/**
 * RateLimitException is thrown in cases where an account is putting too much
 * load on Bkash's API servers (usually by performing too many requests).
 * Please back off on request rate.
 */
class RateLimitException extends InvalidRequestException
{
}
