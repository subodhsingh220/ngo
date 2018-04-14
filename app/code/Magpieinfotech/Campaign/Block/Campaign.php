<?php
namespace Magpieinfotech\Banner\Block;
use Magento\Framework\View\Element\Template;
class Banner extends \Magento\Framework\View\Element\Template
{
	private $_bannerFactory;
	private $_bannerHelper;
	public function __construct(
		\Magpieinfotech\Banner\Helper\Data $bannerHelper,
		Template\Context $context, 
		array $data = array(),
		\Magpieinfotech\Campaign\Model\CampaignFactory $CampaignFactory
		)
    {
		$this->_bannerHelper = $bannerHelper;
		$this->_bannerFactory = $BannerFactory;
	    parent::__construct($context, $data);
    }

    public function getBanners(){
    	$collection = $this->_bannerFactory->create()->getCollection();
    	return $collection;
    }

    public function getImageUrl($image){
    	return $this->_bannerHelper->getImageUrlPath($image);
    }


}