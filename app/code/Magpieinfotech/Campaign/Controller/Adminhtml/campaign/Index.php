<?php

namespace Magpieinfotech\Campaign\Controller\Adminhtml\campaign;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPagee;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magpieinfotech_Campaign::campaign');
        $resultPage->addBreadcrumb(__('Magpieinfotech'), __('Magpieinfotech'));
        $resultPage->addBreadcrumb(__('Manage item'), __('Manage Campaign'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Campaign'));

        return $resultPage;
    }
}
?>