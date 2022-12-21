<?php

namespace DigitalCollege\Dev\Block;

use DigitalCollege\Dev\Model\DigitalFactory;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $digitalFactory;
    protected $_productCollectionFactory;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context,
                                \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
                                DigitalFactory $digitalFactory,
                                array $data = [])
    {
        $this->digitalFactory = $digitalFactory;
        $this->_productCollectionFactory = $productCollectionFactory;
        return parent::__construct($context);
    }

    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->setPageSize(10);
//      $json = json_encode($collection);
        return $collection;
    }

    public function getDados()
    {
        $dc = $this->digitalFactory->create()->getCollection();
        return $dc->getData();
    }

    public function saveData()
    {
        $dc = $this->digitalFactory->create();
        $dc->setData([
            'author_name' => 'Eu',
            'email' => 'email@eu.com.tu',
            'description' => 'Agora vai sem erro?!'
        ]);
        $dc->save();
    }
}
