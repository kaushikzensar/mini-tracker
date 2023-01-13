<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Loop\Tracking\Api;

interface TrackingRepositoryInterface
{

    /**
     * Retrieve Tracking matching the specified criteria.
     * @return Array
     */
    public function getList();

    
}

