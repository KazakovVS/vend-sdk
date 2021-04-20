<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\CastsDates;
use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Rate Limit.
 */
class RateLimit extends VendTransferObject
{
    use CastsDates;

    /**
     * Error.
     *
     * @var string|null
     */
    public $error;

    /**
     * Limits.
     *
     * @var object
     */
    public $limits;

    /**
     * Retry after.
     *
     * @var \Carbon\Carbon
     */
    public $retry_after;
}
