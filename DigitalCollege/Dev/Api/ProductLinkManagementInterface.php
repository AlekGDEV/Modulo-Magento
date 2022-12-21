<?php
namespace DigitalCollege\Dev\Api;

/**
 * @api
 */
interface ProductLinkManagementInterface
{
    /**
     * Get products assigned to an ID
     *
     * @param int $id
     * @return \DigitalCollege\Dev\Api\Data\CategoryProductLinkInterface[]
     */
    public function getAssignedProductsById($id);
}
