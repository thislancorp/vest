<?php

defined('WEKIT_VERSION') || exit('Forbidden');

Wind::import('EXT:vest.service.srv.do.App_VestPostAndReplyDo');


class App_VestPostAndReplyDoInjector extends PwBaseHookInjector {

	/**
	 * ע���������� 
	 */
	public function doVestPost() {
		return new App_VestPostAndReplyDo($this->bp);
	}

	/**
	 * ע����������� 
	 */
	public function doVestReply() {
		return new App_VestPostAndReplyDo($this->bp);
	}
}
