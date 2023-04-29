<?php

namespace Bkash;

/**
 * Interface for a Bkash client.
 */
interface BkashStreamingClientInterface extends BaseBkashClientInterface
{
    public function requestStream($method, $path, $readBodyChunkCallable, $params, $opts);
}
