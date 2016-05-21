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
		$Page = new \Think\Page($count,10);// ʵ������ҳ�� �����ܼ�¼����ÿҳ��ʾ�ļ�¼��(10
		$show = $Page->show();// ��ҳ��ʾ���)
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