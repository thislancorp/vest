<?php
defined('WEKIT_VERSION') or exit(403);
/**
 * 增加一条帖子记录时，调用
 *
 * @author enj0y <hackes@outlook.com>
 * @copyright http://www.it68.com.cn
 * @license http://www.it68.com.cn
 */
class App_Vest_PwThreadsDao_AddDo extends PwThreadsDao {
	
	//var $fields=array();
	/**
	 * @param int $id 新增的帖子tid
	 * @param array $fields 帖子字段
	 * @return void
	 */

	public function app_VestDo($id, $fields) {
		$fields['tid']=$id;//uid
		$fields['created_userid']=2;//uid
		$fields['created_username']="enj0y";
		$fields['created_ip']="8.8.8.8";
		$fields['lastpost_userid']=2;
		$fields['lastpost_username']="enj0y";
		return $this->_getVestDs()->updateThread($id, '2', 'enj0y', '2', 'enj0y');
	}

	private function _getVestDs() {
        return Wekit::load('SRC:extensions.vest.service.vest');
    }
}

?>