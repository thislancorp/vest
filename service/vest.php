<?php
defined('WEKIT_VERSION') || exit('Forbidden');
        

        
 class vest {
         
    public function updateThread($tid, $uid, $username, $ip = null) {
        if (!$tid || !$uid || !$username) return false;
        $result = $this->_getDao()->updateThread($tid, $uid, $username, $ip = null);
        return $result;
    }
        
    public function updateReply($pid, $uid, $username, $ip=null ) {
        if (!$pid || !$uid || !$username) return false;
        $result = $this->_getDao()->updateReply($pid, $uid, $username, $ip=null );
        return $result;
    }

    protected function _getDao() {
        return Wekit::loadDao('SRC:extensions.vest.service.dao.vestDao');
    }
 }