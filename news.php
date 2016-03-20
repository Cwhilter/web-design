<?php

$sql="select * from news";
$result=$conn->prepare($sql);
$result->execute();
$array=$result->fetchAll(PDO::FETCH_ASSOC);
$smarty->assign('news',$array);
?>
