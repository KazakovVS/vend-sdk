<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use SimpleSquid\Vend\Resources\VendTransferObject;

/**
 * Webhook.
 */
class Webhook extends VendTransferObject
{
    /**
     * Indicates whether the webhook is active.
     *
     * @var bool
     */
    public $active;

    /**
     * Auto-generated object ID.
     *
     * @var string
     */
    public $id;

    /**
     * The ID of the retailer which the webhook request originated from.
     *
     * @var string
     */
    public $retailer_id;

    /**
     * Webhook type. One of: `product.update`, `inventory.update`, `sale.update`, `customer.update`, `consignment.receive`.
     *
     * @var string
     */
    public $type;

    /**
     * The URL of the endpoint prepared for receiving webhooks.
     *
     * @var string
     */
    public $url;
}
