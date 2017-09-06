<?php
	function __autoload($class){
		require(get_stylesheet_directory().'/class/'.$class.'.class.php');
	}
	//每当new一个新类就会自动调用相同类名字的文件
?>