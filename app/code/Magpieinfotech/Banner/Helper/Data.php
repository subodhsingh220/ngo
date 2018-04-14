<?php
namespace Magpieinfotech\Banner\Helper;
use \Magento\Framework\App\Helper\AbstractHelper;
 
class Data extends AbstractHelper
{

private $_currentStote;

public function __construct(\Magento\Store\Model\StoreManagerInterface $currentStote){
	$this->_currentStote = $currentStote;
}

  public function getImageUrlPath($image){
    		$mediaUrl = $this->_currentStote->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
    		return $mediaUrl.$image;
    }

    public function getDays($date){
    	$date1=date_create($date);
		$date2=date_create(date('y-m-d'));
		$diff=date_diff($date1,$date2);
		return $diff->format("%a");
    }
}