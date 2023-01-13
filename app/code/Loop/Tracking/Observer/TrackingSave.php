<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Loop\Tracking\Observer;
 
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Request\Http;
use Loop\Tracking\Model\TrackingFactory;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;

class TrackingSave implements ObserverInterface
{
    public function __construct(TrackingFactory $trackingFactory, Curl $curl, Json $json, TimezoneInterface $date
    ) {
        $this->_trackingFactory = $trackingFactory;
        $this->_curl = $curl;
        $this->_json = $json;
        $this->_date =  $date;
    }
    
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $_product = $observer->getEvent()->getProduct();  
        $url = "https://supertracking.view.agentur-loop.com/trackme";
        $params = '{"sku": "'.$_product->getSku().'","price": '.$_product->getPrice().'}';
        $this->_curl->post($url, $params);
        $this->_curl->addHeader("Content-Type","application/json");
        $this->_curl->addHeader("Content-Length",200);
        $response = $this->_curl->getBody();
        $result = $this->_json->unserialize($response);
		if(isset($result['code']) || $result['code']!='') {
			$trackingModel = $this->_trackingFactory->create();
			$trackingModel->setSku($_product->getSku());
			$trackingModel->setTrackingCode($result['code']);
			$trackingModel->setTrackingMessage($result['message']);
			$trackingModel->setCreatedAt($this->_date->date()->format('Y-m-d H:i:s'));
			$trackingModel->save();
		}
    }
}