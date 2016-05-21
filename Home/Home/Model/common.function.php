<?php
function getDataCount($dbNmae){
     $db=M($dbName);
     $result=$db->select();
	 return count($result);
}
?>