<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Version
 * An object containing the highest and lowest version numbers for all items of the returned collection.
 */
class Version extends VendTransferObject
{
    /**
     * Highest version number of the payload.
     *
     * @var int|null
     */
    public $max;

    /**
     * Lowest version number of the payload.
     *
     * @var int|null
     */
    public $min;
}
