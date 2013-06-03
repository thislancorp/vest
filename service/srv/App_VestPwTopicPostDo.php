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
class App_VestPwTopicPostDo extends PwPostDoBase {
	function check($postDm){
		/*
		描述	 帖子发布前，数据检查
		执行方式	 逻辑判断
		参数传递	 PwPostDm $postDm
		*/
		//print_r($postDm);
	}
	function createHtmlBeforeContent(){
		/*
		描述	 输出插件内容（位置：正文上方）
		执行方式	 页面输出
		参数传递	 无
		*/
		
	}	
	function createHtmlRightContent(){
		/*
		描述	 输出插件内容（位置：正文右侧）
		执行方式	 页面输出
		参数传递	 无
		*/
	}	
	function dataProcessing($postDm){
		/*
		描述	 帖子数据处理
		执行方式	 数据处理
		参数传递	 PwPostDm $postDm
		*/
	}	
	function addThread($tid){
		/*
		描述	 帖子发布成功后调用
		执行方式	 逻辑处理
		参数传递	 int $tid 帖子id
		*/
		//echo "addThread".$tid;
		return new PwTopicDm($tid);
	}
	function updateThread($tid){
		/*
		描述	 帖子更新成功后调用
		执行方式	 逻辑处理
		参数传递	 int $tid 帖子id
		*/
		echo "updateThread".$tid;
		return new PwTopicDm($tid);
	}	
	function addPost($pid, $tid){
		/*
		描述	 回复发布成功后调用
		执行方式	 逻辑处理
		参数传递	 int $pid 回复id
					int $tid 帖子id
		*/
		//echo "addPost tid:".$tid." pid:".$pid;
	}	
	function updatePost($pid, $tid){
		/*
		描述	 回复更新成功后调用
		执行方式	 逻辑处理
		参数传递	 int $pid 回复id
					int $tid 帖子id
		*/
		//echo "addPost tid:".$tid." pid:".$pid;
	}
}
?>