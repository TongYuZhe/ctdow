<?php
	function __autoload($class){
		require('/wp-content/themes/ctdow/class/'.$class.'.class.php');
	}
	//每当new一个新类就会自动调用相同类名字的文件
?>