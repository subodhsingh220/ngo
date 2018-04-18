<?php
namespace Magpieinfotech\Banner\Block\Adminhtml\Banner;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Magento\Framework\Module\Manager
     */
    protected $moduleManager;

    /**
     * @var \Magpieinfotech\Banner\Model\bannerFactory
     */
    protected $_bannerFactory;

    /**
     * @var \Magpieinfotech\Banner\Model\Status
     */
    protected $_status;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Magpieinfotech\Banner\Model\bannerFactory $bannerFactory
     * @param \Magpieinfotech\Banner\Model\Status $status
     * @param \Magento\Framework\Module\Manager $moduleManager
     * @param array $data
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magpieinfotech\Banner\Model\BannerFactory $BannerFactory,
        \Magpieinfotech\Banner\Model\Status $status,
        \Magento\Framework\Module\Manager $moduleManager,
        array $data = []
    ) {
        $this->_bannerFactory = $BannerFactory;
        $this->_status = $status;
        $this->moduleManager = $moduleManager;
        parent::__construct($context, $backendHelper, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('postGrid');
        $this->setDefaultSort('entity_id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(false);
        $this->setVarNameFilter('post_filter');
    }

    /**
     * @return $this
     */
    protected function _prepareCollection()
    {
        $collection = $this->_bannerFactory->create()->getCollection();
        $this->setCollection($collection);

        parent::_prepareCollection();

        return $this;
    }

    /**
     * @return $this
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
            'entity_id',
            [
                'header' => __('ID'),
                'type' => 'number',
                'index' => 'entity_id',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id'
            ]
        );


		
				$this->addColumn(
					'first_title',
					[
						'header' => __('First Title'),
						'index' => 'first_title',
					]
				);
				
				$this->addColumn(
					'second_title',
					[
						'header' => __('Second Title'),
						'index' => 'second_title',
					]
				);
				
				$this->addColumn(
					'third_title',
					[
						'header' => __('Third Title'),
						'index' => 'third_title',
					]
				);
				
						
						$this->addColumn(
							'status',
							[
								'header' => __('Status'),
								'index' => 'status',
								'type' => 'options',
								'options' => \Magpieinfotech\Banner\Block\Adminhtml\Banner\Grid::getOptionArray4()
							]
						);
						
						


		
        //$this->addColumn(
            //'edit',
            //[
                //'header' => __('Edit'),
                //'type' => 'action',
                //'getter' => 'getId',
                //'actions' => [
                    //[
                        //'caption' => __('Edit'),
                        //'url' => [
                            //'base' => '*/*/edit'
                        //],
                        //'field' => 'entity_id'
                    //]
                //],
                //'filter' => false,
                //'sortable' => false,
                //'index' => 'stores',
                //'header_css_class' => 'col-action',
                //'column_css_class' => 'col-action'
            //]
        //);
		

		
		   $this->addExportType($this->getUrl('banner/*/exportCsv', ['_current' => true]),__('CSV'));
		   $this->addExportType($this->getUrl('banner/*/exportExcel', ['_current' => true]),__('Excel XML'));

        $block = $this->getLayout()->getBlock('grid.bottom.links');
        if ($block) {
            $this->setChild('grid.bottom.links', $block);
        }

        return parent::_prepareColumns();
    }

	
    /**
     * @return $this
     */
    protected function _prepareMassaction()
    {

        $this->setMassactionIdField('entity_id');
        //$this->getMassactionBlock()->setTemplate('Magpieinfotech_Banner::banner/grid/massaction_extended.phtml');
        $this->getMassactionBlock()->setFormFieldName('banner');

        $this->getMassactionBlock()->addItem(
            'delete',
            [
                'label' => __('Delete'),
                'url' => $this->getUrl('banner/*/massDelete'),
                'confirm' => __('Are you sure?')
            ]
        );

        $statuses = $this->_status->getOptionArray();

        $this->getMassactionBlock()->addItem(
            'status',
            [
                'label' => __('Change status'),
                'url' => $this->getUrl('banner/*/massStatus', ['_current' => true]),
                'additional' => [
                    'visibility' => [
                        'name' => 'status',
                        'type' => 'select',
                        'class' => 'required-entry',
                        'label' => __('Status'),
                        'values' => $statuses
                    ]
                ]
            ]
        );


        return $this;
    }
		

    /**
     * @return string
     */
    public function getGridUrl()
    {
        return $this->getUrl('banner/*/index', ['_current' => true]);
    }

    /**
     * @param \Magpieinfotech\Banner\Model\banner|\Magento\Framework\Object $row
     * @return string
     */
    public function getRowUrl($row)
    {
		
        return $this->getUrl(
            'banner/*/edit',
            ['entity_id' => $row->getId()]
        );
		
    }

	
		static public function getOptionArray4()
		{
            $data_array=array(); 
			$data_array[0]='disabled';
			$data_array[1]='enabled';
            return($data_array);
		}
		static public function getValueArray4()
		{
            $data_array=array();
			foreach(\Magpieinfotech\Banner\Block\Adminhtml\Banner\Grid::getOptionArray4() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}