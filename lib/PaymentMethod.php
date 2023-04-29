<?php

// File generated from our OpenAPI spec

namespace Bkash;

/**
 * PaymentMethod objects represent your customer's payment instruments. You can use
 * them with <a
 * href="https://bkash.com/docs/payments/payment-intents">PaymentIntents</a> to
 * collect payments or save them to Customer objects to store instrument details
 * for future payments.
 *
 * Related guides: <a
 * href="https://bkash.com/docs/payments/payment-methods">Payment Methods</a> and
 * <a href="https://bkash.com/docs/payments/more-payment-scenarios">More Payment
 * Scenarios</a>.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property \Bkash\BkashObject $acss_debit
 * @property \Bkash\BkashObject $affirm
 * @property \Bkash\BkashObject $afterpay_clearpay
 * @property \Bkash\BkashObject $alipay
 * @property \Bkash\BkashObject $au_becs_debit
 * @property \Bkash\BkashObject $bacs_debit
 * @property \Bkash\BkashObject $bancontact
 * @property \Bkash\BkashObject $billing_details
 * @property \Bkash\BkashObject $blik
 * @property \Bkash\BkashObject $boleto
 * @property \Bkash\BkashObject $card
 * @property \Bkash\BkashObject $card_present
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property null|string|\Bkash\Customer $customer The ID of the Customer to which this PaymentMethod is saved. This will not be set when the PaymentMethod has not been saved to a Customer.
 * @property \Bkash\BkashObject $customer_balance
 * @property \Bkash\BkashObject $eps
 * @property \Bkash\BkashObject $fpx
 * @property \Bkash\BkashObject $giropay
 * @property \Bkash\BkashObject $grabpay
 * @property \Bkash\BkashObject $ideal
 * @property \Bkash\BkashObject $interac_present
 * @property \Bkash\BkashObject $klarna
 * @property \Bkash\BkashObject $konbini
 * @property \Bkash\BkashObject $link
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|\Bkash\BkashObject $metadata Set of <a href="https://bkash.com/docs/api/metadata">key-value pairs</a> that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 * @property \Bkash\BkashObject $oxxo
 * @property \Bkash\BkashObject $p24
 * @property \Bkash\BkashObject $paynow
 * @property \Bkash\BkashObject $pix
 * @property \Bkash\BkashObject $promptpay
 * @property \Bkash\BkashObject $radar_options Options to configure Radar. See <a href="https://bkash.com/docs/radar/radar-session">Radar Session</a> for more information.
 * @property \Bkash\BkashObject $sepa_debit
 * @property \Bkash\BkashObject $sofort
 * @property string $type The type of the PaymentMethod. An additional hash is included on the PaymentMethod with a name matching this value. It contains additional information specific to the PaymentMethod type.
 * @property \Bkash\BkashObject $us_bank_account
 * @property \Bkash\BkashObject $wechat_pay
 */
class PaymentMethod extends ApiResource
{
    const OBJECT_NAME = 'payment_method';

    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\PaymentMethod the attached payment method
     */
    public function attach($params = null, $opts = null)
    {
        $url = $this->instanceUrl() . '/attach';
        list($response, $opts) = $this->_request('post', $url, $params, $opts);
        $this->refreshFrom($response, $opts);

        return $this;
    }

    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\PaymentMethod the detached payment method
     */
    public function detach($params = null, $opts = null)
    {
        $url = $this->instanceUrl() . '/detach';
        list($response, $opts) = $this->_request('post', $url, $params, $opts);
        $this->refreshFrom($response, $opts);

        return $this;
    }
}
