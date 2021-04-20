<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Payment Type.
 */
class PaymentType extends VendTransferObject
{
    use CastsDates;

    /**
     * Payment Type Config.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\PaymentTypeConfig|null
     */
    public $config;

    /**
     * Creation timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $created_at;

    /**
     * The deletion timestamp.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * Disabled. **undocumented**.
     *
     * @var bool|null
     */
    public $disabled;

    /**
     * Gateway. **undocumented**.
     *
     * @var bool|null
     */
    public $gateway;

    /**
     * Auto-generated object ID.
     *
     * @var string
     */
    public $id;

    /**
     * Internal. **undocumented**.
     *
     * @var bool|null
     */
    public $internal;

    /**
     * The name of the payment type.
     *
     * @var string
     */
    public $name;

    /**
     * Outlet ids **undocumented**.
     *
     * @var array|null
     */
    public $outlet_ids;

    /**
     * Payment type. **undocumented**.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\PaymentTypeDetails|null
     */
    public $payment_type;

    /**
     * The ID of the global Vend payment type. It shouldn't be used to identify the payment type - there may be multiple payment types with the same `type_id`.
     *
     * @var int
     */
    public $type_id;

    /**
     * Auto-incrementing object version number.
     *
     * @var int
     */
    public $version;
}
