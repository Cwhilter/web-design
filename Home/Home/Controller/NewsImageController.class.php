<?php
namespace Home\Controller;
use Think\Controller;
class NewsImageController extends Controller {
   public function newsImage(){
		$this->display('admin_newsImage');
    }
   public function show(){
	   $db=M('newsimg');
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
       $start=(($page-1)*$rp);
       //$limit="limit $start,$rp";
       $array=$db->limit($start,$rp)->select();
       $result=$db->select();
	   if($result){
	   header("Content-type:application/json");
       $jsonData=array('page'=>$page,'total'=>0,'rows'=>array());
       //循环记录，构建json数组
       foreach($array AS $row){
       $entry=array('id'=>$row['id'],
	                'cell'=>array(
					    'id' =>$row['id'],
					    'title'=>$row['title'],
					    'path'=>$row['path'],
					    )
					);
				$jsonData['rows'][]=$entry;
			}
	   $jsonData['total']=count($result);
	   echo json_encode($jsonData);
	   }
	   else{
	   $entry=array();
	   $jsonData['rows'][]=$entry;
	   $jsonData['total']=0;
	   echo json_encode($jsonData);
	   }
	}
  public function add(){
	   $db=M('news');
	   $data['date']=$_POST['date'];
	   $data['title']=$_POST['title'];
	   $data['body']=$_POST['body'];
	   $result = $db->add($data); 
       if($result){
       // 成功后跳转到新闻列表页面
       $this->success('新增成功，即将返回列表页面', 'admin');
          } 
		  else {
          // 错误页面的默认跳转页面是返回前一页，通常不需要设置
                 $this->error('新增失败');
                 }
	}
  public function delete(){
	   $db=M('newsimg');
	   if(isset($_GET['del'])){
	   $str=$_GET['del'];
	   $str=urldecode($str);
	   $result=$db->delete($str);
	   if($result){
       // 成功后跳转到新闻列表页面
       $this->success('删除成功，即将返回列表页面', '../admin_newsImage');
                  }
		else {
        // 错误页面的默认跳转页面是返回前一页，通常不需要设置
        $this->error("删除失败$str");
             }
		}
	 else{
		 $this->error("sorry");
	 }
	}
	public function addimage(){
		$this->display('uploadfile');
	}
	 
}