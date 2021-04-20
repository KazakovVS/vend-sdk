<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Inventory Count Filter.
 */
class InventoryCountFilter extends VendTransferObject
{
    /**
     * Filter type.
     * One of `product_type`, `brand`, `supplier`, `tag`, `product`.
     *
     * @var string
     */
    public $type;

    /**
     * The ID of the filter object.
     *
     * @var string
     */
    public $value;
}
