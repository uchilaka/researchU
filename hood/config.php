<?php
$ROOT = "http://localhost:8088/ResearchU/";
$access = array(
  "localhost",
    "root",
    ""
);

//// research table
$ResearchTable = "optional_info";
$ContactInfoTable = "contact_info";
// contact_info table = c
// optional_info table = o

$FieldsToSelect = array(
    array("TableAlias"=>$ContactInfoTable,
        "FieldName"=>"first_name"
        ),
    array("TableAlias"=>"$ContactInfoTable",
        "FieldName"=>"last_name"
        ),
    array("TableAlias"=>"$ContactInfoTable",
        "FieldName"=>"university"
        ),
    array("TableAlias"=>"$ResearchTable",
        "FieldName"=>"research_interests"
        ),
    array("TableAlias"=>"$ContactInfoTable",
        "FieldName"=>"department"
        ),
    array("TableAlias"=>"$ResearchTable",
        "FieldName"=>"email_addrs"
        )
);

$FieldsToIndexForSearch = array(
    array("TableAlias"=>"$ResearchTable",
        "FieldName"=>"research_interests"
        ),
    array("TableAlias"=>"$ResearchTable",
        "FieldName"=>"title"
        ),
    array("TableAlias"=>"$ContactInfoTable",
        "FieldName"=>"email_addrs"
        )
);

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
