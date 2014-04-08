<?php


class Lof_Twitter_Model_System_Config_Source_ListThemeColor
{	
    public function toOptionArray()
    {
		 return array(
        	array('value'=>'black', 'label'=>Mage::helper('lof_twitter')->__('Black')),
            array('value'=>'white', 'label'=>Mage::helper('lof_twitter')->__('White')),
            array('value'=>'blue', 'label'=>Mage::helper('lof_twitter')->__('Blue'))
        );
    }    
}
