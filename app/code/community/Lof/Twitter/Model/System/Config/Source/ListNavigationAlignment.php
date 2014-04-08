<?php

class Lof_Twitter_Model_System_Config_Source_ListNavigationAlignment
{
    public function toOptionArray()
    {
        return array(
        	array('value'=>'horizontal', 'label'=>Mage::helper('lof_twitter')->__('Horizontal')),
            array('value'=>'vertical', 'label'=>Mage::helper('lof_twitter')->__('Vertical')),
            array('value'=>'0', 'label'=>Mage::helper('lof_twitter')->__('Disable'))
        );
    }    
}
