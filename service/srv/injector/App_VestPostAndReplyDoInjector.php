<?php

defined('WEKIT_VERSION') || exit('Forbidden');

Wind::import('EXT:vest.service.srv.do.App_VestPostAndReplyDo');


class App_VestPostAndReplyDoInjector extends PwBaseHookInjector {

	/**
	 * 注入器处理发帖 
	 */
	public function doVestPost() {
		return new App_VestPostAndReplyDo($this->bp);
	}

	/**
	 * 注入器处理回帖 
	 */
	public function doVestReply() {
		return new App_VestPostAndReplyDo($this->bp);
	}
}
