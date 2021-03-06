<?php
/**
 * Copyright (c) 2017. Volodumur Hryvinskyi
 * @author   Volodumur Hryvinskyi <script@email.ua>
 * @package  scriptua\lp
 */

class BootstrapNavigation_Model_System_Config_Source_Maxdepth
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 3, 'label'=>Mage::helper('adminhtml')->__('Yes')),
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('No')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            3 => Mage::helper('adminhtml')->__('Yes'),
            1 => Mage::helper('adminhtml')->__('No'),
        );
    }
}
