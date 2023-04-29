<?php

// File generated from our OpenAPI spec

namespace Bkash\Treasury;

/**
 * Encodes whether a FinancialAccount has access to a particular Feature, with a
 * <code>status</code> enum and associated <code>status_details</code>. Bkash or
 * the platform can control Features via the requested field.
 *
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property \Bkash\BkashObject $card_issuing Toggle settings for enabling/disabling a feature
 * @property \Bkash\BkashObject $deposit_insurance Toggle settings for enabling/disabling a feature
 * @property \Bkash\BkashObject $financial_addresses Settings related to Financial Addresses features on a Financial Account
 * @property \Bkash\BkashObject $inbound_transfers InboundTransfers contains inbound transfers features for a FinancialAccount.
 * @property \Bkash\BkashObject $intra_bkash_flows Toggle settings for enabling/disabling a feature
 * @property \Bkash\BkashObject $outbound_payments Settings related to Outbound Payments features on a Financial Account
 * @property \Bkash\BkashObject $outbound_transfers OutboundTransfers contains outbound transfers features for a FinancialAccount.
 */
class FinancialAccountFeatures extends \Bkash\ApiResource
{
    const OBJECT_NAME = 'treasury.financial_account_features';
}
