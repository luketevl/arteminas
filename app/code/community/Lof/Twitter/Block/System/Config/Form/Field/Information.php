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
 * @category    Mage
 * @package     Mage_Adminhtml
 * @copyright   Copyright (c) 2010 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Renderer for lable in fieldset
 *
 * @author LandOfCoder <landofcoder@gmail.com>
 */
class Lof_Twitter_Block_System_Config_Form_Field_Information  extends Mage_Adminhtml_Block_Abstract implements Varien_Data_Form_Element_Renderer_Interface
{
	public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $useContainerId = $element->getData('use_container_id');
        return sprintf('<tr class="system-fieldset-sub-head" id="row_%s"><td colspan="5" class="lof-description">
					   <h3>	<a target="_blank" href="http://landofcoder.com/our-porfolios/joomla-commercial-extensions/item/40-lof-cordion-module.html">. <b>Lof Twitter Module</b></a><p><i>The Lof Twitter - a Lightweight module  have released which develop on jquery library and power Lof\'s Core module, it\'s as  promised bring your site a new style.</i></p><ul><li><a href="http://landofcoder.com/submit-request.html">Report Bug </a></li><li><a href="http://landofcoder.com/forum/forum.html?id=24">Discussion</a></li></ul><p><b> - Short Userguide</b><p><img style="width:99%" src="../modules/mod_lofcordion/assets/ug-image-1.png"></p>Copyright <a href="http://landofcoder.com"><i>LandOfCoder.Com</i></a></p><script type="text/javascript" src="../modules/mod_lofcordion/assets/form.js"></script> <style>.lof-group{ padding:2px;color:#666;background:#CCC;cursor:hand; font-weight:bold; clear:both; cursor:pointer}</style>
							<br>
							<div style="font-size:11px">@Copyright: <i><a href="http://landofcoder.com" target="_blank">LandOfCoder.Com</a></i></div>
					   </td></tr>',
            $element->getHtmlId(), $element->getHtmlId(), $element->getLabel()
        );
    }
}
?>