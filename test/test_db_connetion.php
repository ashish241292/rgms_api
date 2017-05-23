<?php


require_once '../api/classes/Connect_db.php';
//-----------------------test------------------
$db = new Connect_db();
$db->connect();
echo $db->status ;
//---------------------------------------------
if($db->status == 1){
    echo "...Connection stablished successful...";
} else if($db->status == 0){
    echo '<br/>';
    echo "...Connection failed with following details...<br/>";
    echo "Error no:".$db->getDatabaseHandler()->errno."<br/>";
    echo "Error detail:".$db->getDatabaseHandler()->error."<br/>";
    echo "Error description:".$db->getDatabaseHandler()->error_list."<br/>";
}
//--------------------------------------------