<?php
defined('WEKIT_VERSION') or exit(403);
/**
 * 后台菜单添加
 *
 * @author enj0y <>
 * @copyright 
 * @license 
 */
class App_Vest_ConfigDo {
	
	/**
	 * 获取虚拟马甲后台菜单
	 *
	 * @param array $config
	 * @return array 
	 */
	public function getAdminMenu($config) {
		$config += array(
			'ext_vest' => array('虚拟马甲', 'app/manage/*?app=vest', '', '', 'appcenter'),
			);
		return $config;
	}
}

?>