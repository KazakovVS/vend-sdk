<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Register Sale Payment Update Base.
 */
class RegisterSalePaymentUpdateBase extends VendTransferObject
{
    /**
     * Payment amount.
     *
     * @var int|float
     */
    public $amount;

    /**
     * Existing payment ID. If included in the POST request it will cause an update instead of a creating a new supplier.
     *
     * @var string|null
     */
    public $id;

    /**
     * The date and time of the payment in RFC3339 format.
     *
     * @var string|null
     */
    public $payment_date;

    /**
     * The ID of the register used to add this payment to the sale.
     *
     * @var string|null
     */
    public $register_id;

    /**
     * Payment type id to be used for the payment.
     *
     * @var string
     */
    public $retailer_payment_type_id;
}
