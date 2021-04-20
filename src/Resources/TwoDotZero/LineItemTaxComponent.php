<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Line Item Tax Component.
 */
class LineItemTaxComponent extends VendTransferObject
{
    /**
     * Tax rate ID.
     *
     * @var string
     */
    public $rate_id;

    /**
     * Tax total.
     *
     * @var int|float
     */
    public $total_tax;
}
