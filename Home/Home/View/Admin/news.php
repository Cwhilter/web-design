<?php
//获取当前分页内容
$db=M('news');
$array=$db->select();
$total=count($result);
$page=0;
if(isset($_POST['page'])){
   $page=$_POST['page'];
   }
   else{
      $page=1;
   }
   //获取当前设定的每页显示的记录数
   if(isset($_POST['rp'])){
      $rp=$_POST['rp'];
   }
   else{
      $rp=10;
	  }
	  header("Content-type:application/json");
   $jsonData=array('page'=>$page,'total'=>0,'rows'=>array());
   //循环记录，构建json数组
   foreach($array AS $row){
       $entry=array('id'=>$row['date'],
	          'cell'=>array(
			        'date' =>$row['date'],
					'title'=>$row['title'],
					'body'=>$row['body']
					)
					);
				$jsonData['rows'][]=$entry;
			}
	$jsonData['total']=count($array);
	echo json_encode($jsonData);
?>