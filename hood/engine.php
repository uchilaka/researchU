<?php
function buildSearchQuery($seed) {
    
    // pull in config variables
    global $ResearchTable;
    global $FieldsToIndexForSearch;
    global $FieldsToSelect;
    global $ContactInfoTable;
    
    $params = explode(" ",$seed);
    $params2 = explode(",",$seed);
    $data=array();
    if (!empty($params)) {
        $data=array_merge($data, $params);
    }
    if (!empty($params2)) {
        $data=array_merge($data, $params2);
    }
    //print_r($data);
    $data[]=$seed;
    
    // build select statement
    $query = "SELECT ";
    foreach ($FieldsToSelect as $field) {
        $query .= "`{$field["TableAlias"]}`.`{$field["FieldName"]}`, ";
    }
    $query = rtrim($query,", ");
    
    $query .= " FROM
                    `$ResearchTable` INNER JOIN
                    `$ContactInfoTable` 
                    ON `$ResearchTable`.email_addrs = `$ContactInfoTable`.email_addrs
                WHERE ";
    
    //$query = "";
    $whereBits = array();
    
    foreach ($FieldsToIndexForSearch as $field) {
        foreach($data as $seedVar) {
            $whereBits[]=" `{$field["TableAlias"]}`.`{$field["FieldName"]}` LIKE '%$seedVar%' ";
        }
    }
    
    if (!empty($whereBits)) {
        foreach ($whereBits as $bits) {
            $query .= " ( $bits ) OR ";
        }
    } else {
        $query .= " id IS NOT NULL ";
    }
    
    $query = rtrim($query, "OR ");
    
    return $query;
    
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
