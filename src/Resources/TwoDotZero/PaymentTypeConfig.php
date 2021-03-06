<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Payment Type Config.
 */
class PaymentTypeConfig extends VendTransferObject
{
    /**
     * Algorithm **undocumented**.
     *
     * @var string|null
     */
    public $algorithm;

    /**
     * Conceal cash totals **undocumented**.
     *
     * @var bool|null
     */
    public $conceal_cash_totals;

    /**
     * **undocumented**.
     *
     * @var integer|string|null
     */
    public $previous_payment_type_id;

    /**
     * Indicates whether a receipt will be printed.
     *
     * @var bool|null
     */
    public $print;

    /**
     * Rounding **undocumented**.
     *
     * @var string|null
     */
    public $rounding;

    /**
     * The URL of the gateway.
     *
     * @var string|null
     */
    public $url;
}
