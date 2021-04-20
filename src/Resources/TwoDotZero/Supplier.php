<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Supplier.
 */
class Supplier extends VendTransferObject
{
    /**
     * Deletion timestamp in UTC.
     *
     * @var mixed|null
     */
    public $deleted_at;

    /**
     * Supplier's description. **deprecated**.
     *
     * @var string|null
     */
    public $description;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The Supplier name.
     *
     * @var string
     */
    public $name;

    /**
     * **internal** **deprecated**.
     *
     * @var string|null
     */
    public $source;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;
}
