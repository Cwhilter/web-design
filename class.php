<?php
class ConnDB{
	
	var $dbtype;
	var $host;
    var $user;
    var $pwd;
    var $dbname;
    
	//构造方法
    function ConnDB($dbtype,$host,$user,$pwd,$dbname){
		$this->dbtype=$dbtype;
    	$this->host=$host;
		$this->user=$user;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
	}

    //实现数据库的连接并返回连接对象
    function GetConnId(){
     	
    	if($this->dbtype=="mysql" || $this->dbtype=="mssql"){
    		$dsn="$this->dbtype:host=$this->host;dbname=$this->dbname";
		}else{
			$dsn="$this->dbtype:dbname=$this->dbname";
		}    
		try {
    		$conn = new PDO($dsn, $this->user, $this->pwd); 	//初始化一个PDO对象，就是创建了数据库连接对象$pdo
			$conn->query("set names utf8");
    		return $conn;
		} catch (PDOException $e) {
    		die ("Error!: " . $e->getMessage() . "<br/>");
		}

     	
    }	
}
?>