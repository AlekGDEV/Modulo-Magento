<?php

namespace DigitalCollege\Dev\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Digital extends AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */

    public function _construct()
    {
        $this->_init('tb_dcdevs', 'id');
        $this->_init('tb_products', 'id');
    }
}
