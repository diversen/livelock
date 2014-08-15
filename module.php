<?php

class livelock {
  
    /**
     * this module will run at a run level. 
     * This means any page will run this module
     * @param type $level
     */
    function runLevel ($level) {
        if ($level == 4) {
            $a = user::getAccount(session::getUserId());
            if (isset($a['locked']) && $a['locked'] == 1) {
                moduleloader::setStatus(403);
                config::setMainIni('blocks_all', null);
            }
            
        }
    }
}

