<?php

require_once "hood/config.php";
require_once "classes/connection.php";
require_once "classes/table.php";
require_once "hood/engine.php";

function get_page_contents() {
    
    global $access;
    global $ResearchTable;
    
    if (!empty($_REQUEST['seed'])) {
        
        $link = new connection($access);
        $link->open($access);
        $research = new table();
        
        // get query
        $query = buildSearchQuery($_REQUEST['seed']);
        
        // create research table
        $research->create($link->getLink(), "research", "$ResearchTable");
        
        // run query against research table
        $results = $research->goFetch($query);
        
        //print_r($results);
        
        // show results
        if (!empty($results)) {
            ?><?php
            foreach($results as $row) {
                
            }
            ?><?php
        }
        
        
    }
    
    ?>

   	<div id="SearchControl" align="center">
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        	<input type="text" id="mainPageSearch" name="seed" />
        	<input type="submit" id="mainPageSearchButton" value="SEARCH" />
        </form>
        </div>
        
    <?php
}

include "basetemplate.php";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
