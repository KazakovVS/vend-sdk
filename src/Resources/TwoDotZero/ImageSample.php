<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Image Sample.
 */
class ImageSample extends VendTransferObject
{
    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * Sizes. **undocumented**.
     *
     * @var \SimpleSquid\Vend\Resources\TwoDotZero\ImageSizes|null
     */
    public $sizes;

    /**
     * URL of image.
     *
     * @var string|null
     */
    public $url;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;
}
