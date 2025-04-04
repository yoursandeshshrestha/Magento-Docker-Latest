<?php
namespace Formula\Wishlist\Model;

use Formula\Wishlist\Api\Data\WishlistItemInterface;
use Magento\Framework\Model\AbstractExtensibleModel;

class WishlistItem extends AbstractExtensibleModel implements WishlistItemInterface
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Formula\Wishlist\Model\ResourceModel\WishlistItem::class);
    }

    /**
     * Get wishlist item ID
     *
     * @return int|null
     */
    public function getWishlistItemId()
    {
        return $this->getData(self::WISHLIST_ITEM_ID);
    }

    /**
     * Set wishlist item ID
     *
     * @param int $wishlistItemId
     * @return $this
     */
    public function setWishlistItemId($wishlistItemId)
    {
        return $this->setData(self::WISHLIST_ITEM_ID, $wishlistItemId);
    }

    /**
     * Get customer ID
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * Set customer ID
     *
     * @param int $customerId
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        return $this->setData(self::CUSTOMER_ID, $customerId);
    }

    /**
     * Get product ID
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->getData(self::PRODUCT_ID);
    }

    /**
     * Set product ID
     *
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        return $this->setData(self::PRODUCT_ID, $productId);
    }

    /**
     * Get added at time
     *
     * @return string
     */
    public function getAddedAt()
    {
        return $this->getData(self::ADDED_AT);
    }

    /**
     * Set added at time
     *
     * @param string $addedAt
     * @return $this
     */
    public function setAddedAt($addedAt)
    {
        return $this->setData(self::ADDED_AT, $addedAt);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Formula\Wishlist\Api\Data\WishlistItemExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     *
     * @param \Formula\Wishlist\Api\Data\WishlistItemExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Formula\Wishlist\Api\Data\WishlistItemExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}