<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Image Sizes **undocumented**
 * An object containing URLs for different sizes of an image.
 */
class ImageSizes extends VendTransferObject
{
    protected $ignoreMissing = true;

    /**
     * Original.
     *
     * @var string|null
     */
    public $original;

    /**
     * SL.
     *
     * @var string|null
     */
    public $sl;

    /**
     * SM.
     *
     * @var string|null
     */
    public $sm;

    /**
     * SS.
     *
     * @var string|null
     */
    public $ss;

    /**
     * ST.
     *
     * @var string|null
     */
    public $st;

    /**
     * Standard.
     *
     * @var string|null
     */
    public $standard;

    /**
     * Thumbnail.
     *
     * @var string|null
     */
    public $thumb;

    /**
     * **undocumented**
     *
     * @var mixed|null
     */
    public $raw;
}
