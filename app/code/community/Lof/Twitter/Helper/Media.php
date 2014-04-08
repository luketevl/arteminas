<?php
class Lof_Twitter_Helper_Media extends Mage_Core_Helper_Abstract {
	/**
	 * 
	 * Add media file ( js, css ) ...
	 * @param $type string media type (js, skin_css)
	 * @param $source string source path
	 * @param $before boolean true/false
	 * @param $params mix 
	 * @param $if string
	 * @param $cond string
	 */
	function addMediaFile($type = "", $source = "", $before = false, $params=null, $if="", $cond="" ){
		$_head = Mage::getSingleton('core/layout')->getBlock( 'head');
		if(is_object($_head) && !empty($source)){
		 	$items = $_head->getData('items');
		 	$tmpItems = array();
		 	$search = $type."/".$source;
		 	if(is_array($items)){
		 	 $key_array = array_keys($items);
             foreach ($key_array as &$_key) {
	              if ($search == $_key) {
	                  $tmpItems[$_key] = $items[$_key];
	                  unset($items[$_key]);
	              }
              }
		 	}
		 	if ($type=='skin_css' && empty($params)) {
               $params = 'media="all"';
            }
			if (empty($tmpItems)) {
				$tmpItems[$type.'/'.$source] = array(
	              'type'   => $type,
	               'name'   => $source,
	               'params' => $params,
	               'if'     => $if,
	               'cond'   => $cond,
	            );
            }
			if($before){
				$items = array_merge($tmpItems, $items);
			}
			else{
              	$items = array_merge($items, $tmpItems);
			}
            $_head->setData('items', $items);
		}
	}
	function isStaticBlock( $config = array()){
		$mode = isset($config["mode"])?$config["mode"]:"";
		if( $mode == "static" ){
			return true;
		}
		return false;
	}
	public function loadJS( $config = array(), $file_name = "", $file_align = "", $external = false){
		$content = "";
		if(!empty($config) && !empty($file_name)){
			if(!defined('_LOADED_LOFTWITTER_'.$file_align) ){
					$baseurl = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_JS);
					if($external ){
						$content .='<script type="text/javascript" src="'.$file_name.'"></script>';
					}
					else{
						$content .='<script type="text/javascript" src="'.$baseurl."lof_twitter/".$file_name.".js".'"></script>';
					}
					define('_LOADED_LOFTWITTER_'.$file_align, 1);
			}
		}
		return $content;
	}
	public function loadCSS( $config = array(), $obj = null, $file_name = "", $file_align = "", $external = false){
		$content = "";
		if(!empty($config) && !empty($file_name)){
			if(!defined('_LOADED_LOFTWITTER_'.$file_align) ){
					$theme = isset($config["theme"])?$config["theme"]:"default";
					if($external ){
						$content .='<link media="all" href="'.$file_name.'" type="text/css" rel="stylesheet"/>';
					}
					else{
						$content .='<link media="all" href="'.$obj->getSkinUrl("lof_twitter/".$theme."/".$file_name.".css").'" type="text/css" rel="stylesheet"/>';
					}
					define('_LOADED_LOFTWITTER_'.$file_align, 1);
			}
		}
		return $content;
	}
	public function getAssets( $config = array(), $obj = null){
		$content = "";
		if(!empty($config)){
			if( $this->isStaticBlock( $config ) ){
				$theme = isset($config["theme"])?$config["theme"]:"default";
				$content .= '<link media="all" href="'.$obj->getSkinUrl("lof_twitter/".$theme."/style.css").'" type="text/css" rel="stylesheet"/>';
				if(!defined('_LOADED_LOFTWITTER_'.$theme) ){
					$baseurl = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_JS);
					if( $config['enable_jquery'] ){
						$content .='<script type="text/javascript" src="'.$baseurl."lof_twitter/jquery.js".'"></script>';
					}
					$content .= '<link media="all" href="'.$baseurl."lof_twitter/jScrollPane/jScrollPane.css".'" type="text/css" rel="stylesheet"/>';
					$content .='<script type="text/javascript" src="'.$baseurl."lof_twitter/jtweetsanywhere.js".'"></script>';
					$content .='<script type="text/javascript" src="'.$baseurl."lof_twitter/script.js".'"></script>';
					define('_LOADED_LOFTWITTER_'.$theme, 1);
				}
			}
		}
		return $content;
	}
}