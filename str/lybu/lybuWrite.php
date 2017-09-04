<?php
	function replaceSpecialChar($strParam){
		$regex = "/\/|\~|\!|\@|\#|\\$|\%|\^|\&|\*|\(|\)|\_|\+|\{|\}|\:|\<|\>|\?|\[|\]|\,|\.|\/|\;|\'|\`|\-|\=|\\\|\|/";
		return preg_replace($regex,"",$strParam);
	}
	$wt = $_POST['wtext'];
	$str = replaceSpecialChar($wt);
?>
<?php
	require'../../class/local.class.php';
	
	$new = new local('localhost','root','2650393056','nsijsj',"insert into nsi_lybu(data)values('$wt')");
	if($new){
		echo'留言成功，1秒钟后返回...';
	}else{
		echo'留言失败，1秒钟后返回...';
	}
?>
<script type="text/javascript">
	setTimeout('top.location.href = "/lybx/lybu/"',1000);
</script>