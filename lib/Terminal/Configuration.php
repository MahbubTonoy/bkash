<?php

// File generated from our OpenAPI spec

namespace Bkash\Terminal;

/**
 * A Configurations object represents how features should be configured for
 * terminal readers.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property \Bkash\BkashObject $bbpos_wisepos_e
 * @property null|bool $is_account_default Whether this Configuration is the default for your account
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property \Bkash\BkashObject $tipping
 * @property \Bkash\BkashObject $verifone_p400
 */
class Configuration extends \Bkash\ApiResource
{
    const OBJECT_NAME = 'terminal.configuration';

    use \Bkash\ApiOperations\All;
    use \Bkash\ApiOperations\Create;
    use \Bkash\ApiOperations\Delete;
    use \Bkash\ApiOperations\Retrieve;
    use \Bkash\ApiOperations\Update;
}
