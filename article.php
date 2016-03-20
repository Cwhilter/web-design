<?php
$sql="select * from news";
$result=$conn->prepare($sql);
$result->execute();
$array=$result->fetchAll(PDO::FETCH_ASSOC);
$smarty->assign('news',$array);
if(isset($_GET["title_number"]))
{
$number=$_GET["title_number"];
}
else
{
$number=0;
}

$smarty->assign('number',$number);
?>

