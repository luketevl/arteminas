<?php

class Lof_Twitter_Model_System_Config_Source_ListSourceAlign
{
    public function toOptionArray()
    {
        return array(
        	array('value'=>'center', 'label'=>Mage::helper('lof_twitter')->__('Center')),
            array('value'=>'left', 'label'=>Mage::helper('lof_twitter')->__('Left')),
            array('value'=>'right', 'label'=>Mage::helper('lof_twitter')->__('Right'))
        );
    }    
}
