<?php
defined('WEKIT_VERSION') or exit(403);
Wind::import('SRV:forum.srv.post.do.PwPostDoBase');
/**
 * ����ظ�
 *
 * @author enj0y <hackes@outlook.com>
 * @copyright http://www.it68.com.cn
 * @license http://www.it68.com.cn
 */
class App_VestPwTopicPostDo extends PwPostDoBase {
	function check($postDm){
		/*
		����	 ���ӷ���ǰ�����ݼ��
		ִ�з�ʽ	 �߼��ж�
		��������	 PwPostDm $postDm
		*/
		//print_r($postDm);
	}
	function createHtmlBeforeContent(){
		/*
		����	 ���������ݣ�λ�ã������Ϸ���
		ִ�з�ʽ	 ҳ�����
		��������	 ��
		*/
		
	}	
	function createHtmlRightContent(){
		/*
		����	 ���������ݣ�λ�ã������Ҳࣩ
		ִ�з�ʽ	 ҳ�����
		��������	 ��
		*/
	}	
	function dataProcessing($postDm){
		/*
		����	 �������ݴ���
		ִ�з�ʽ	 ���ݴ���
		��������	 PwPostDm $postDm
		*/
	}	
	function addThread($tid){
		/*
		����	 ���ӷ����ɹ������
		ִ�з�ʽ	 �߼�����
		��������	 int $tid ����id
		*/
		//echo "addThread".$tid;
		return new PwTopicDm($tid);
	}
	function updateThread($tid){
		/*
		����	 ���Ӹ��³ɹ������
		ִ�з�ʽ	 �߼�����
		��������	 int $tid ����id
		*/
		echo "updateThread".$tid;
		return new PwTopicDm($tid);
	}	
	function addPost($pid, $tid){
		/*
		����	 �ظ������ɹ������
		ִ�з�ʽ	 �߼�����
		��������	 int $pid �ظ�id
					int $tid ����id
		*/
		//echo "addPost tid:".$tid." pid:".$pid;
	}	
	function updatePost($pid, $tid){
		/*
		����	 �ظ����³ɹ������
		ִ�з�ʽ	 �߼�����
		��������	 int $pid �ظ�id
					int $tid ����id
		*/
		//echo "addPost tid:".$tid." pid:".$pid;
	}
}
?>