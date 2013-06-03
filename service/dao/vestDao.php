<?php
/*
 Data access
*/
defined('WEKIT_VERSION') || exit('Forbidden');
Wind::import('SRC:library.base.PwBaseDao');

class vest_dao extends PwBaseDao{

	protected $_table=null;
	
	public function updateThread($tid, $uid, $username, $ip = null ){
		//��������
		$this->_table="bbs_threads";
		$sql=$this->_bindSql("UPDATE %s SET  `created_userid` ='%s', `created_username` ='%s',  `lastpost_userid` ='%s', `lastpost_username` ='%s' WHERE `tid` =%s",$this->getTable(), $uid, $username, $uid, $username, $tid );
		//���ɸ��������û���ϢSQL
		return $this->getConnection()->createStatement($sql)->query()->fetch();	
	}
	public function updateReply($pid, $uid, $username, $ip=null ){
		//�������ӻظ�
		$this->_table="bbs_posts";
		$sql=$this->_bindSql("UPDATE  `%s` SET  `created_username` =  '%s',`created_userid` =  '%s' WHERE  `pid` =%s;",$this->getTable(), $username, $uid, $pid );
		//���ɸ������ӻظ��û���ϢSQL
		return $this->getConnection()->createStatement($sql)->query()->fetch();	
	}

}


?>