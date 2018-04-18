<?php

namespace Magpieinfotech\Volunteers\Controller\Adminhtml\volunteers;

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
        $resultPage->setActiveMenu('Magpieinfotech_Volunteers::volunteers');
        $resultPage->addBreadcrumb(__('Magpieinfotech'), __('Magpieinfotech'));
        $resultPage->addBreadcrumb(__('Manage item'), __('Manage Volunteers'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Volunteers'));

        return $resultPage;
    }
}
?>