<?php
class FW_Bundle_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_NODE_BUNDLE_PRODUCT_TYPE      = 'global/catalog/product/type/bundle';

    /**
     * Retrieve array of allowed product types for bundle selection product
     *
     * @return array
     */
    public function getAllowedSelectionTypes()
    {
        $config = Mage::getConfig()->getNode(self::XML_NODE_BUNDLE_PRODUCT_TYPE);
        //ADD DOWNLOADABLE
        $allowed_selection_types = $config->allowed_selection_types->asArray();
        $allowed_selection_types['downloadable'] = '';
        return array_keys($allowed_selection_types);
    }
}
