<?php

class connection {
    
    public $link;
    public $userid;
    public $password;
    
    function __construct($access) {
        $this->open($access);
    }
    
    function open($access) {
        $this->link = mysql_connect($access[0],$access[1],$access[2]);
        $this->userid = $access[1];
        $this->password = $access[2];
    }
    
    function close() {
    }
    
    function getLink() {
        return $this->link;
    }
    
    function isLive() {
        return !empty($this->link);
    }
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
