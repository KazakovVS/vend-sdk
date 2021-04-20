<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Tag.
 */
class Tag extends VendTransferObject
{
    /**
     * Deletion timestamp in UTC.
     *
     * @var string|null
     */
    public $deleted_at;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The Tag name.
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
