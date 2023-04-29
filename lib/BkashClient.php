<?php

// File generated from our OpenAPI spec

namespace Bkash;

/**
 * Client used to send requests to Bkash's API.
 *
 * @property \Bkash\Service\AccountLinkService $accountLinks
 * @property \Bkash\Service\AccountService $accounts
 * @property \Bkash\Service\ApplePayDomainService $applePayDomains
 * @property \Bkash\Service\ApplicationFeeService $applicationFees
 * @property \Bkash\Service\Apps\AppsServiceFactory $apps
 * @property \Bkash\Service\BalanceService $balance
 * @property \Bkash\Service\BalanceTransactionService $balanceTransactions
 * @property \Bkash\Service\BillingPortal\BillingPortalServiceFactory $billingPortal
 * @property \Bkash\Service\ChargeService $charges
 * @property \Bkash\Service\Checkout\CheckoutServiceFactory $checkout
 * @property \Bkash\Service\CountrySpecService $countrySpecs
 * @property \Bkash\Service\CouponService $coupons
 * @property \Bkash\Service\CreditNoteService $creditNotes
 * @property \Bkash\Service\CustomerService $customers
 * @property \Bkash\Service\DisputeService $disputes
 * @property \Bkash\Service\EphemeralKeyService $ephemeralKeys
 * @property \Bkash\Service\EventService $events
 * @property \Bkash\Service\ExchangeRateService $exchangeRates
 * @property \Bkash\Service\FileLinkService $fileLinks
 * @property \Bkash\Service\FileService $files
 * @property \Bkash\Service\FinancialConnections\FinancialConnectionsServiceFactory $financialConnections
 * @property \Bkash\Service\Identity\IdentityServiceFactory $identity
 * @property \Bkash\Service\InvoiceItemService $invoiceItems
 * @property \Bkash\Service\InvoiceService $invoices
 * @property \Bkash\Service\Issuing\IssuingServiceFactory $issuing
 * @property \Bkash\Service\MandateService $mandates
 * @property \Bkash\Service\OAuthService $oauth
 * @property \Bkash\Service\OrderService $orders
 * @property \Bkash\Service\PaymentIntentService $paymentIntents
 * @property \Bkash\Service\PaymentLinkService $paymentLinks
 * @property \Bkash\Service\PaymentMethodService $paymentMethods
 * @property \Bkash\Service\PayoutService $payouts
 * @property \Bkash\Service\PlanService $plans
 * @property \Bkash\Service\PriceService $prices
 * @property \Bkash\Service\ProductService $products
 * @property \Bkash\Service\PromotionCodeService $promotionCodes
 * @property \Bkash\Service\QuoteService $quotes
 * @property \Bkash\Service\Radar\RadarServiceFactory $radar
 * @property \Bkash\Service\RefundService $refunds
 * @property \Bkash\Service\Reporting\ReportingServiceFactory $reporting
 * @property \Bkash\Service\ReviewService $reviews
 * @property \Bkash\Service\SetupAttemptService $setupAttempts
 * @property \Bkash\Service\SetupIntentService $setupIntents
 * @property \Bkash\Service\ShippingRateService $shippingRates
 * @property \Bkash\Service\Sigma\SigmaServiceFactory $sigma
 * @property \Bkash\Service\SkuService $skus
 * @property \Bkash\Service\SourceService $sources
 * @property \Bkash\Service\SubscriptionItemService $subscriptionItems
 * @property \Bkash\Service\SubscriptionScheduleService $subscriptionSchedules
 * @property \Bkash\Service\SubscriptionService $subscriptions
 * @property \Bkash\Service\TaxCodeService $taxCodes
 * @property \Bkash\Service\TaxRateService $taxRates
 * @property \Bkash\Service\Terminal\TerminalServiceFactory $terminal
 * @property \Bkash\Service\TestHelpers\TestHelpersServiceFactory $testHelpers
 * @property \Bkash\Service\TokenService $tokens
 * @property \Bkash\Service\TopupService $topups
 * @property \Bkash\Service\TransferService $transfers
 * @property \Bkash\Service\Treasury\TreasuryServiceFactory $treasury
 * @property \Bkash\Service\WebhookEndpointService $webhookEndpoints
 */
class BkashClient extends BaseBkashClient
{
    /**
     * @var \Bkash\Service\CoreServiceFactory
     */
    private $coreServiceFactory;

    public function __get($name)
    {
        if (null === $this->coreServiceFactory) {
            $this->coreServiceFactory = new \Bkash\Service\CoreServiceFactory($this);
        }

        return $this->coreServiceFactory->__get($name);
    }
}
