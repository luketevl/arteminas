<?php


class Lof_Twitter_Model_System_Config_Source_ListNavigation
{
    public function toOptionArray()
    {
        return array(
        	array('value'=>'', 'label'=>Mage::helper('lof_twitter')->__('No')),
            array('value'=>'number', 'label'=>Mage::helper('lof_twitter')->__('Number')),
            array('value'=>'thumbs', 'label'=>Mage::helper('lof_twitter')->__('Thumbnails'))
        );
    }    
}
