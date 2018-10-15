<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventorySourceSelectionApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Represents requested quantity for particular product
 *
 * @api
 */
interface ItemRequestInterface extends ExtensibleDataInterface
{
    /**
     * Requested SKU
     *
     * @return string
     */
    public function getSku(): string;

    /**
     * Requested Product Quantity
     *
     * @return float
     */
    public function getQty(): float;

    /**
     * Set SKU
     *
     * @param string $sku
     * @return void
     */
    public function setSku(string $sku): void;

    /**
     * Set Quantity
     *
     * @param float $qty
     * @return void
     */
    public function setQty(float $qty): void;

    /**
     * Retrieve existing extension attributes object
     *
     * Null for return is specified for proper work SOAP requests parser
     *
     * @return \Magento\InventorySourceSelectionApi\Api\Data\ItemRequestExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object
     *
     * @param \Magento\InventorySourceSelectionApi\Api\Data\ItemRequestExtensionInterface $extensionAttributes
     * @return void
     */
    public function setExtensionAttributes(ItemRequestExtensionInterface $extensionAttributes);
}
