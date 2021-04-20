<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Price Book Base.
 */
class PriceBookBase extends VendTransferObject
{
    use CastsDates;

    /**
     * The ID of the customer group.
     *
     * @var string
     */
    public $customer_group_id;

    /**
     * Price book name.
     *
     * @var string
     */
    public $name;

    /**
     * The ID of an outlet for which the price book should be used.
     *
     * @var string|null
     */
    public $outlet_id;

    /**
     * `"0"` - all platforms, `"1"` - in store, `"2"` - ecommerce.
     *
     * @var string|null
     */
    public $restrict_to_platform_key;

    /**
     * The date when the price book becomes valid (active).
     *
     * @var \Carbon\Carbon|null
     */
    public $valid_from;

    /**
     * The date when the price book becomes invalid (inactive).
     *
     * @var \Carbon\Carbon|null
     */
    public $valid_to;
}
