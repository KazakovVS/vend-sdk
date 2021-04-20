<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Inventory Count Item Request.
 */
class InventoryCountItemRequest extends VendTransferObject
{
    /**
     * The ID of the product for which the count should be adjusted.
     *
     * @var string
     */
    public $product_id;

    /**
     * The adjustment value.
     *
     * @var string
     */
    public $received;
}
