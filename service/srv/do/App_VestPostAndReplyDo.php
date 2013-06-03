<?php

defined('WEKIT_VERSION') || exit('Forbidden');

Wind::import('SRV:forum.srv.post.do.PwPostDoBase');

/**
 * 发帖+回帖 - 钩子
 * 
 */
class App_VestPostAndReplyDo extends PwPostDoBase {

	private $loginUser; //登录用户信息
	private $forum; //板块信息
	private $config; //配置信息
	private $event = array(); //事件

	public function __construct(PwPost $pwpost) {
		$this->loginUser = $pwpost->user;
		$this->forum = $pwpost->action->forum;
		$this->config = $this->_getConfig();
		//var_dump($this->forum);exit;
	}

	/**
	 * 钩子 帖子发布成功后调用
	 */
	public function addThread($tid) {
		return $this->vestUser($tid, 0, 'post');
	}

	/**
	 * 钩子 回复发布成功后调用
	 */
	public function addPost($pid, $tid) {
		return $this->vestUser($tid, $pid, 'reply');
	}

	/**
	 * 发帖+回帖马甲处理
	 */
	public function vestUser($tid, $pid, $operate) {
		if ($operate === 'post' ) {
			return $this->_updatePost($tid, $uid);
		}else if ($operate === 'reply' ){
			return $this->_updateReply($tid, $pid, $uid);
		}else{
			return false;
		}
	}

	/**
	 */
	private function _updatePost($tid, $pid) {
		if ( $this->_checkIsOK() != true ) {
			return false;
		}else{
			die("tid".$tid);
		}
	}
	private function _updateReply($tid, $pid) {
		if ( $this->_checkIsOK() != true ) {
			return false;
		}else{
			die("tid".$tid." pid".$pid);
		}
	}

	private function _checkIsOK($tid, $pid, $operate) {
		//帖子ID、回复id是否有效
		if ($tid <= 0 || $pid < 0) return false;

		//应用是否开启
		if (!$this->config['ifopen']) return false;

		//所属用户组是否有权限
		$uids = &$this->config['users'];
		if (!empty($uids) && !in_array($this->loginUser->uid, $uids) && !) return false;

		//所在板块是否有权限
		$fids = &$this->config['condition']['fids'];
		if (!empty($fids) && !in_array($this->forum->fid, $fids)) return false;

		return true;
	}

	private function _getConfig() {
		$site = Wekit::C('site');
		$config = array();
		$config['ifopen'] = $site['app.vest.ifopen'];
		$config['users'] = explode(',', $site['app.vest.users'] );
		$config['vestusers'] = explode(',', $site['app.vest.vestusers'] );
		unset($site);
		return $config;
	}
	
	private function _getUidName( $uid = null ) {
		if( $uid === null ){
			return $this->loginUser->username;
		}else{
			$info = Wekit::load('user.PwUser')->getUserByUid($uid);
			return $info['username']?$info['username']:false;
		}
	}
	
	private function _getVestDs() {
		return Wekit::load('EXT:luckyfree.service.App_Vest');
	}
}
