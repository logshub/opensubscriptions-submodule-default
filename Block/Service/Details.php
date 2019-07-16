<?php
namespace OpenSubscriptions\OpenSubscriptionsSubDefault\Block\Service;

class Details extends \Magento\Framework\View\Element\Template
{
    protected $coreRegistry;
    protected $helper;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->coreRegistry = $registry;
        parent::__construct($context, $data);
        
        $this->pageConfig->getTitle()->set(__('Service details'));
    }
    
    public function getTemplate()
    {
        $isActive = $this->getService()->getStatus() === \OpenSubscriptions\OpenSubscriptions\Model\Service::ACTIVE;
        $isThisSubmodule = $this->getService()->getSubmodule() == \OpenSubscriptions\OpenSubscriptionsSubDefault\Model\Submodule::ID;
        if ($isThisSubmodule && $isActive) {
            return 'service/details.phtml';
        }
        
        return '';
    }

    public function getService()
    {
        return $this->coreRegistry->registry('current_service');
    }

    /**
     * TODO: from product, not from service?
     */
    public function getDescription()
    {
        return $this->getService()->getSetting('open_sub_default_notes');
    }
}