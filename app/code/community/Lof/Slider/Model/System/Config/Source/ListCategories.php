<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Lof * @package     Lof_Slider
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Position config model
 *
 * @category   Lof
 * @package     Lof_Slider
 * @author    
 */
class Lof_Slider_Model_System_Config_Source_ListCategories
{
	public function toOptionArray(){
	
		$category = Mage::getModel('catalog/category'); 
		$tree = $category->getTreeModel(); 
		$tree->load();
		$ids = $tree->getCollection()->getAllIds(); 
		$arr = array();
		if ($ids){ 
			foreach ($ids as $id){ 
				$cat = Mage::getModel('catalog/category'); 
				$cat->load($id);
				$tmp = array();
				$tmp["value"] = $id;
				$tmp["label"] = $cat->getName();
				$arr[] = $tmp;
			}
		}
		return $arr;
	}
}