<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Loop\Tracking\Model\ResourceModel\Tracking;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Loop\Tracking\Model\Tracking::class,
            \Loop\Tracking\Model\ResourceModel\Tracking::class
        );
    }
}
