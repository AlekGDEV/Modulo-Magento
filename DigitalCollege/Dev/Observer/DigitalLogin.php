<?php

namespace DigitalCollege\Dev\Observer;

use DigitalCollege\Dev\Model\DigitalFactory;
use Magento\Framework\Event\ObserverInterface;

class DigitalLogin implements ObserverInterface
{
    protected $digitalFactory;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context , DigitalFactory $digitalFactory)
    {
        $this->digitalFactory = $digitalFactory;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();
        $this->saveData($customer->getName(), $customer->getEmail());
    }

    public function saveData($name, $email, $desc = 'deu bom')
    {
        $dc = $this->digitalFactory->create();
        $dc->setData([
            'author_name' => $name,
            'email' => $email,
            'description' => $desc
        ]);
        $dc->save();
    }
}
