<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Tax Base.
 */
class TaxBase extends VendTransferObject
{
    /**
     * Tax name.
     *
     * @var string
     */
    public $name;

    /**
     * Tax rate. `0.1 = 10%`.
     *
     * @var int|float
     */
    public $rate;
}
