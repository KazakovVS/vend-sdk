<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Tax rate.
 */
class TaxRate extends VendTransferObject
{
    /**
     * The name of the tax rate used for display.
     *
     * @var string
     */
    public $display_name;

    /**
     * Auto-generated object ID.
     *
     * @var string
     */
    public $id;

    /**
     * The name of the tax rate.
     *
     * @var string
     */
    public $name;

    /**
     * Tax rate value. `0.1 = 10%`.
     *
     * @var int|float
     */
    public $rate;

    /**
     * Rules **undocumented**.
     *
     * @var array|null
     */
    public $rules;
}
