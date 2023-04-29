<?php

// File generated from our OpenAPI spec

namespace Bkash\BillingPortal;

/**
 * A portal configuration describes the functionality and behavior of a portal
 * session.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property bool $active Whether the configuration is active and can be used to create portal sessions.
 * @property null|string|\Bkash\BkashObject $application ID of the Connect Application that created the configuration.
 * @property \Bkash\BkashObject $business_profile
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property null|string $default_return_url The default URL to redirect customers to when they click on the portal's link to return to your website. This can be <a href="https://bkash.com/docs/api/customer_portal/sessions/create#create_portal_session-return_url">overriden</a> when creating the session.
 * @property \Bkash\BkashObject $features
 * @property bool $is_default Whether the configuration is the default. If <code>true</code>, this configuration can be managed in the Dashboard and portal sessions will use this configuration unless it is overriden when creating the session.
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property \Bkash\BkashObject $login_page
 * @property null|\Bkash\BkashObject $metadata Set of <a href="https://bkash.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 * @property int $updated Time at which the object was last updated. Measured in seconds since the Unix epoch.
 */
class Configuration extends \Bkash\ApiResource
{
    const OBJECT_NAME = 'billing_portal.configuration';

    use \Bkash\ApiOperations\All;
    use \Bkash\ApiOperations\Create;
    use \Bkash\ApiOperations\Retrieve;
    use \Bkash\ApiOperations\Update;
}
