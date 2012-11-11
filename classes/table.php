<?php
class table {
    
    function __construct() { 
        }
    
    public $name;
    public $link;
    public $db;
    public $results;
    
    public function create($link, $database, $tableName) {
        $this->name = $tableName;
        $this->link = $link;
        $this->db = $database;
    }
    
    public function goFetch($query) {
        $results = array();
        if ($this->link) {
            @mysql_select_db($this->db, $this->link);
            $exec = @mysql_query($query, $this->link);
            if (!empty($exec)) {
                while ($row = mysql_fetch_array($exec)) {
                    $this->results[]=$row;
                }
            }
            return $this->results;
        }
    }
    
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
