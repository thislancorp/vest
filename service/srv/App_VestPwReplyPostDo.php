<?php
defined('WEKIT_VERSION') or exit(403);
Wind::import('SRV:forum.srv.post.do.PwPostDoBase');
/**
 * 发表回复
 *
 * @author enj0y <hackes@outlook.com>
 * @copyright http://www.it68.com.cn
 * @license http://www.it68.com.cn
 */
class App_VestPwReplyPostDo extends PwPostDoBase {

	public function __construct() {

	}	

	/*
	 * @see PwPostDoBase
	*/
	public function check($postDm) {
		print_r($postDm);
		return true;
	}
	
	/**
	 * 帖子发布页，正文上方内容显示(模板扩展) <output内容输出>
	 */
	public function createHtmlBeforeContent() {
		//echo "beforexxxx";
	}
	
	/**
	 * 帖子发布页，正文右侧内容显示(模板扩展) <output内容输出>
	 */
	public function createHtmlRightContent() {
		//echo "rightxxxx";
	}
	
	/**
	 * 数据处理
	 *
	 * @param PwPostDm $postDm
	 * @return PwPostDm
	 */
	public function dataProcessing($postDm) {
		//print_r($postDm);
		/*
		$postDm->user->info['punch']=str_replace("\"".$postDm->user->username."\"","\"test\"",$postDm->user->info['punch']);
		$postDm->user->uid=2;
		$postDm->user->username="test";
		$postDm->user->info['username']="test";
		*/
		//print_r($postDm);
		//return $this->_getDao()->updateThread($id, '2', 'enj0y', '2', 'enj0y');
		//return $postDm;
	}
	
	/**
	 * 帖子发布成功后调用
	 *
	 * @param int $tid
	 */
	public function addThread($tid) {
		//print_r($tid);exit();
	}
	
	/**
	 * 帖子更新成功后调用
	 *
	 * @param int $tid
	 */
	public function updateThread($tid) {
		//print_r($tid);exit();
	}
	
	/**
	 * 回复发布成功后调用
	 *
	 * @param int $pid
	 * @param int $tid
	 */
	
	public function addPost($pid, $tid) {
		//print_r($tid);print_r($pid);exit();
	}
	
	/**
	 * 回复更新成功后调用
	 *
	 * @param int $pid
	 * @param int $tid
	 */
	public function updatePost($pid, $tid) {
		//print_r($tid);print_r($pid);exit();
	}
	
}
?>