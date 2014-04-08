<?php

class Lof_Twitter_Model_System_Config_Source_ListTarget
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'_blank', 'label'=>Mage::helper('lof_twitter')->__('New window')),
            array('value'=>'_parent', 'label'=>Mage::helper('lof_twitter')->__('Parent window'))
        );
    }    
}
