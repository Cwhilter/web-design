<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $db=M('News');
		$result=$db->limit(8)->select();
		$this->assign('news',$result);
		$this->display('index');
    }
	public function member(){
	    $db=M('member');
		$result=$db->select();
		$this->assign('member',$result);
	    $this->display('member');
	}
	public function article(){
	    $db=M('News');
		$result=$db->select();
		$count = $db->count();
		$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10
		$show = $Page->show();// 分页显示输出)
		$this->assign('page',$show);
		if(isset($_GET['id'])){
		$number=$_GET['id'];
		}
		else
		{
		$number=0;
		}
		$this->assign('number',$number);
		
		$this->assign('news',$result);
		$this->display('article');
	}
	public function yjfx(){
	    $this->display('yjfx');
		}
}