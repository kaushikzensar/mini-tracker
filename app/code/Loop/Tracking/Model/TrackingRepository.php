<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Loop\Tracking\Model;

use Loop\Tracking\Api\TrackingRepositoryInterface;
use Loop\Tracking\Model\ResourceModel\Tracking\CollectionFactory as TrackingCollectionFactory;

class TrackingRepository implements TrackingRepositoryInterface
{
    /**
     * @var TrackingCollectionFactory
     */
    protected $trackingCollectionFactory;


    /**
     * @param TrackingCollectionFactory $trackingCollectionFactory
     */
    public function __construct(      
        TrackingCollectionFactory $trackingCollectionFactory
    ) {
        $this->trackingCollectionFactory = $trackingCollectionFactory;
    }

    /**
     * @inheritDoc
     */
    public function getList() {
        $collection = $this->trackingCollectionFactory->create();
        $collection->getSelect()->reset(\Zend_Db_Select::COLUMNS)
            ->columns(['sku','tracking_code','tracking_message','created_at']);
        $result = [];
        $result[]['items'] = $collection->getData();
        return $result;
    }
}
