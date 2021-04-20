<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Sale Tax.
 */
class SaleTax extends VendTransferObject
{
    /**
     * Tax amount.
     *
     * @var int|float|null
     */
    public $amount;

    /**
     * ID **undocumented**.
     *
     * @var string|null
     */
    public $id;

    /**
     * Tax name.
     *
     * @var string|null
     */
    public $name;

    /**
     * Tax rate.
     *
     * @var int|float|null
     */
    public $rate;
}
