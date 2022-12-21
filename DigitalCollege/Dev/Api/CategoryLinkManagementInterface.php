<?php
namespace DigitalCollege\Dev\Api;

/**
 * @api
 */
interface CategoryLinkManagementInterface
{
    /**
     * @return \DigitalCollege\Dev\Api\Data\CategoryProductLinkInterface[]
     */
    public function getAssignedProducts();
}
