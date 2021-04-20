<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Brand.
 */
class Brand extends VendTransferObject
{
    use CastsDates;

    /**
     * Deletion timestamp in UTC.
     *
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The brand name.
     *
     * @var string
     */
    public $name;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;
}
