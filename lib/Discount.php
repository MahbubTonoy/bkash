<?php

namespace Bkash;

/**
 * Class Discount.
 *
 * @property null|string $checkout_session The Checkout session that this coupon is applied to, if it is applied to a particular session in payment mode. Will not be present for subscription mode.
 * @property \Bkash\Coupon $coupon Hash describing the coupon applied to create this discount.
 * @property string|\Bkash\Customer $customer The ID of the customer associated with this discount.
 * @property null|int $end If the coupon has a duration of repeating, the date that this discount will end. If the coupon has a duration of once or forever, this attribute will be null.
 * @property string $id The ID of the discount object.
 * @property null|string $invoice The invoice that the discount’s coupon was applied to, if it was applied directly to a particular invoice.
 * @property null|string $invoice_item The invoice item id (or invoice line item id for invoice line items of type=‘subscription’) that the discount’s coupon was applied to, if it was applied directly to a particular invoice item or invoice line item.
 * @property string $object String representing the object’s type. Objects of the same type share the same value.
 * @property null|string $promotion_code The promotion code applied to create this discount.
 * @property int $start Date that the coupon was applied.
 * @property null|string $subscription The subscription that this coupon is applied to, if it is applied to a particular subscription.
 */
class Discount extends BkashObject
{
    const OBJECT_NAME = 'discount';
}
