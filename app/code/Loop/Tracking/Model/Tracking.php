<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Loop\Tracking\Model;

use Loop\Tracking\Api\Data\TrackingInterface;
use Magento\Framework\Model\AbstractModel;

class Tracking extends AbstractModel implements TrackingInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Loop\Tracking\Model\ResourceModel\Tracking::class);
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @inheritDoc
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @inheritDoc
     */
    public function getSku()
    {
        return $this->getData(self::SKU);
    }

    /**
     * @inheritDoc
     */
    public function setSku($sku)
    {
        return $this->setData(self::SKU, $sku);
    }

    /**
     * @inheritDoc
     */
    public function getTrackingCode()
    {
        return $this->getData(self::TRACKING_CODE);
    }

    /**
     * @inheritDoc
     */
    public function setTrackingCode($trackingCode)
    {
        return $this->setData(self::TRACKING_CODE, $trackingCode);
    }

    /**
     * @inheritDoc
     */
    public function getTrackingMessage()
    {
        return $this->getData(self::TRACKING_MESSAGE);
    }

    /**
     * @inheritDoc
     */
    public function setTrackingMessage($trackingMessage)
    {
        return $this->setData(self::TRACKING_MESSAGE, $trackingMessage);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}