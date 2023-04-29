<?php

// File generated from our OpenAPI spec

namespace Bkash\Checkout;

/**
 * A Checkout Session represents your customer's session as they pay for one-time
 * purchases or subscriptions through <a
 * href="https://bkash.com/docs/payments/checkout">Checkout</a> or <a
 * href="https://bkash.com/docs/payments/payment-links">Payment Links</a>. We
 * recommend creating a new Session each time your customer attempts to pay.
 *
 * Once payment is successful, the Checkout Session will contain a reference to the
 * <a href="https://bkash.com/docs/api/customers">Customer</a>, and either the
 * successful <a
 * href="https://bkash.com/docs/api/payment_intents">PaymentIntent</a> or an
 * active <a href="https://bkash.com/docs/api/subscriptions">Subscription</a>.
 *
 * You can create a Checkout Session on your server and pass its ID to the client
 * to begin Checkout.
 *
 * Related guide: <a href="https://bkash.com/docs/checkout/quickstart">Checkout
 * Quickstart</a>.
 *
 * @property string $id Unique identifier for the object. Used to pass to <code>redirectToCheckout</code> in Bkash.js.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\Bkash\BkashObject $after_expiration When set, provides configuration for actions to take if this Checkout Session expires.
 * @property null|bool $allow_promotion_codes Enables user redeemable promotion codes.
 * @property null|int $amount_subtotal Total of all items before discounts or taxes are applied.
 * @property null|int $amount_total Total of all items after discounts and taxes are applied.
 * @property \Bkash\BkashObject $automatic_tax
 * @property null|string $billing_address_collection Describes whether Checkout should collect the customer's billing address.
 * @property string $cancel_url The URL the customer will be directed to if they decide to cancel payment and return to your website.
 * @property null|string $client_reference_id A unique string to reference the Checkout Session. This can be a customer ID, a cart ID, or similar, and can be used to reconcile the Session with your internal systems.
 * @property null|\Bkash\BkashObject $consent Results of <code>consent_collection</code> for this session.
 * @property null|\Bkash\BkashObject $consent_collection When set, provides configuration for the Checkout Session to gather active consent from customers.
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property null|string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://bkash.com/docs/currencies">supported currency</a>.
 * @property null|string|\Bkash\Customer $customer The ID of the customer for this Session. For Checkout Sessions in <code>payment</code> or <code>subscription</code> mode, Checkout will create a new customer object based on information provided during the payment flow unless an existing customer was provided when the Session was created.
 * @property null|string $customer_creation Configure whether a Checkout Session creates a Customer when the Checkout Session completes.
 * @property null|\Bkash\BkashObject $customer_details The customer details including the customer's tax exempt status and the customer's tax IDs. Only the customer's email is present on Sessions in <code>setup</code> mode.
 * @property null|string $customer_email If provided, this value will be used when the Customer object is created. If not provided, customers will be asked to enter their email address. Use this parameter to prefill customer data if you already have an email on file. To access information about the customer once the payment flow is complete, use the <code>customer</code> attribute.
 * @property int $expires_at The timestamp at which the Checkout Session will expire.
 * @property \Bkash\Collection<\Bkash\LineItem> $line_items The line items purchased by the customer.
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|string $locale The IETF language tag of the locale Checkout is displayed in. If blank or <code>auto</code>, the browser's locale is used.
 * @property null|\Bkash\BkashObject $metadata Set of <a href="https://bkash.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 * @property string $mode The mode of the Checkout Session.
 * @property null|string|\Bkash\PaymentIntent $payment_intent The ID of the PaymentIntent for Checkout Sessions in <code>payment</code> mode.
 * @property null|string|\Bkash\PaymentLink $payment_link The ID of the Payment Link that created this Session.
 * @property null|string $payment_method_collection Configure whether a Checkout Session should collect a payment method.
 * @property null|\Bkash\BkashObject $payment_method_options Payment-method-specific configuration for the PaymentIntent or SetupIntent of this CheckoutSession.
 * @property string[] $payment_method_types A list of the types of payment methods (e.g. card) this Checkout Session is allowed to accept.
 * @property string $payment_status The payment status of the Checkout Session, one of <code>paid</code>, <code>unpaid</code>, or <code>no_payment_required</code>. You can use this value to decide when to fulfill your customer's order.
 * @property \Bkash\BkashObject $phone_number_collection
 * @property null|string $recovered_from The ID of the original expired Checkout Session that triggered the recovery flow.
 * @property null|string|\Bkash\SetupIntent $setup_intent The ID of the SetupIntent for Checkout Sessions in <code>setup</code> mode.
 * @property null|\Bkash\BkashObject $shipping_address_collection When set, provides configuration for Checkout to collect a shipping address from a customer.
 * @property null|\Bkash\BkashObject $shipping_cost The details of the customer cost of shipping, including the customer chosen ShippingRate.
 * @property null|\Bkash\BkashObject $shipping_details Shipping information for this Checkout Session.
 * @property \Bkash\BkashObject[] $shipping_options The shipping rate options applied to this Session.
 * @property null|string $status The status of the Checkout Session, one of <code>open</code>, <code>complete</code>, or <code>expired</code>.
 * @property null|string $submit_type Describes the type of transaction being performed by Checkout in order to customize relevant text on the page, such as the submit button. <code>submit_type</code> can only be specified on Checkout Sessions in <code>payment</code> mode, but not Checkout Sessions in <code>subscription</code> or <code>setup</code> mode.
 * @property null|string|\Bkash\Subscription $subscription The ID of the subscription for Checkout Sessions in <code>subscription</code> mode.
 * @property string $success_url The URL the customer will be directed to after the payment or subscription creation is successful.
 * @property \Bkash\BkashObject $tax_id_collection
 * @property null|\Bkash\BkashObject $total_details Tax and discount details for the computed total amount.
 * @property null|string $url The URL to the Checkout Session. Redirect customers to this URL to take them to Checkout. If you’re using <a href="https://bkash.com/docs/payments/checkout/custom-domains">Custom Domains</a>, the URL will use your subdomain. Otherwise, it’ll use <code>checkout.bkash.com.</code> This value is only present when the session is active.
 */
class Session extends \Bkash\ApiResource
{
    const OBJECT_NAME = 'checkout.session';

    use \Bkash\ApiOperations\All;
    use \Bkash\ApiOperations\Create;
    use \Bkash\ApiOperations\Retrieve;

    const BILLING_ADDRESS_COLLECTION_AUTO = 'auto';
    const BILLING_ADDRESS_COLLECTION_REQUIRED = 'required';

    const CUSTOMER_CREATION_ALWAYS = 'always';
    const CUSTOMER_CREATION_IF_REQUIRED = 'if_required';

    const MODE_PAYMENT = 'payment';
    const MODE_SETUP = 'setup';
    const MODE_SUBSCRIPTION = 'subscription';

    const PAYMENT_METHOD_COLLECTION_ALWAYS = 'always';
    const PAYMENT_METHOD_COLLECTION_IF_REQUIRED = 'if_required';

    const PAYMENT_STATUS_NO_PAYMENT_REQUIRED = 'no_payment_required';
    const PAYMENT_STATUS_PAID = 'paid';
    const PAYMENT_STATUS_UNPAID = 'unpaid';

    const STATUS_COMPLETE = 'complete';
    const STATUS_EXPIRED = 'expired';
    const STATUS_OPEN = 'open';

    const SUBMIT_TYPE_AUTO = 'auto';
    const SUBMIT_TYPE_BOOK = 'book';
    const SUBMIT_TYPE_DONATE = 'donate';
    const SUBMIT_TYPE_PAY = 'pay';

    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\Checkout\Session the expired session
     */
    public function expire($params = null, $opts = null)
    {
        $url = $this->instanceUrl() . '/expire';
        list($response, $opts) = $this->_request('post', $url, $params, $opts);
        $this->refreshFrom($response, $opts);

        return $this;
    }

    /**
     * @param string $id
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\Collection<\Bkash\LineItem> list of LineItems
     */
    public static function allLineItems($id, $params = null, $opts = null)
    {
        $url = static::resourceUrl($id) . '/line_items';
        list($response, $opts) = static::_staticRequest('get', $url, $params, $opts);
        $obj = \Bkash\Util\Util::convertToBkashObject($response->json, $opts);
        $obj->setLastResponse($response);

        return $obj;
    }
}