<?php
namespace Magpieinfotech\Banner\Block;
use Magento\Framework\View\Element\Template;
class Banner extends \Magento\Framework\View\Element\Template
{
	public $_bannerFactory;
	public $_bannerHelper;
	public $_campaignFactory;
	public $_volunteersFactory;
	public $_blogHelper;
	public $_postBlock;
	public $_galleryFactory;
	public function __construct(
		\Magpieinfotech\Banner\Helper\Data $bannerHelper,
		Template\Context $context, 
		array $data = array(),
		\Magpieinfotech\Banner\Model\BannerFactory $BannerFactory,
		\Magpieinfotech\Campaign\Model\CampaignFactory $CampaignFactory,
		\Magpieinfotech\Volunteers\Model\VolunteersFactory $VolunteersFactory,
		\Mageplaza\Blog\Helper\Data  $blogHelper,
		\Mageplaza\Blog\Block\Frontend $postBlock,
		\Magpieinfotech\Gallery\Model\GalleryFactory $galleryFactory
		)
    {
		$this->_bannerHelper = $bannerHelper;
		$this->_campaignFactory = $CampaignFactory;
		$this->_volunteersFactory = $VolunteersFactory;
		$this->_bannerFactory = $BannerFactory;
		$this->_blogHelper = $blogHelper;
		$this->_postBlock = $postBlock; 
		$this->_galleryFactory = $galleryFactory;
	    parent::__construct($context, $data);
    }

    public function getBanners(){
    	$collection = $this->_bannerFactory->create()->getCollection()->setOrder('entity_id', 'desc');
    	return $collection;
    }

    public function getImageUrl($image){
    	return $this->_bannerHelper->getImageUrlPath($image);
    }


}