<?php
	interface Isql{
		function sql();
	}
	class local implements Isql{
		private static  $p = 0;
		private $host;
		private $name;
		private $password;
		private $database;
		private $table;
		public function __construct($host,$name,$password,$database,$table){ //连接数据库
			self::$p++;
			$this -> host     = $host;
			$this -> name     = $name;
			$this -> password = $password;
			$this -> database = $database;
			$this -> table    = $table;
			$this -> link     = mysqli_connect($this->host,$this->name,$this->password,$this->database);
			$this -> result   = mysqli_query($this->link,$this->table); // Send a query to the server 向服务器发送查询请求
			if(!$this -> link){
			   printf("<h1>无法链接到服务器 原因：</h1>");
			   exit;
			}
		}
		static function a(){
			return self::$p;
		}
		public function sql(){
			return mysqli_fetch_assoc($this -> result);
		}
		public function __destruct(){
			//mysqli_free_result($this -> result); // Destroy the result set and free the memory used for it 结束查询释放内存
			mysqli_close($this -> link); // Close the connection 关闭连接
		}
		
	}
	class_alias('local','localhost');
?>