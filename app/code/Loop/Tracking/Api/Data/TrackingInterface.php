<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Loop\Tracking\Api\Data;

interface TrackingInterface
{
    const ID = 'id';
    const SKU = 'sku';
    const TRACKING_MESSAGE = 'tracking_message';
    const TRACKING_CODE = 'tracking_code';
    const CREATED_AT = 'created_at';

    /**
     * Get id
     * @return string|null
     */
    public function getId();

    /**
     * Set id
     * @param string $id
     * @return \Loop\Tracking\Tracking\Api\Data\TrackingInterface
     */
    public function setId($id);

    /**
     * Get sku
     * @return string|null
     */
    public function getSku();

    /**
     * Set sku
     * @param string $sku
     * @return \Loop\Tracking\Tracking\Api\Data\TrackingInterface
     */
    public function setSku($sku);

    /**
     * Get tracking_code
     * @return string|null
     */
    public function getTrackingCode();

    /**
     * Set tracking_code
     * @param string $trackingCode
     * @return \Loop\Tracking\Tracking\Api\Data\TrackingInterface
     */
    public function setTrackingCode($trackingCode);

    /**
     * Get tracking_message
     * @return string|null
     */
    public function getTrackingMessage();

    /**
     * Set tracking_message
     * @param string $trackingMessage
     * @return \Loop\Tracking\Tracking\Api\Data\TrackingInterface
     */
    public function setTrackingMessage($trackingMessage);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Loop\Tracking\Tracking\Api\Data\TrackingInterface
     */
    public function setCreatedAt($createdAt);
}
