	<script type="text/javascript">
		//@Mr.Think---判断URL实现菜单高亮显示 
		function highURL(menuId,classCur){ 
			if(!document.getElementById) return false; 
			if(!document.getElementById(menuId)) return false; 
			if(!document.getElementsByTagName) return false; 
			var menuId=document.getElementById(menuId); 
			var links=menuId.getElementsByTagName("a"); 
			for(var i=0; i<links.length; i++ ){ 
				var menuLink=links[i].href; 
				var currentLink=window.location.href; 
				if(currentLink.indexOf(menuLink)!=-1){ 
					links[i].className=classCur; 
				} 
			} 
		} 
	</script>
    <div class="biao">
        <span>您当前的位置：&nbsp;>&nbsp;<a style="text-decoration:none;"><?php the_title(); ?></a></span>
        <a href="/"><p>计算机系</p></a>
    </div>
    <div class="clear"></div>
    
<?php 
	global $wp;
	$current_url = home_url(add_query_arg(array(),$wp->request));
	$xbgk = strstr($current_url,'xbgk'); //判断地址栏是否有xbgk

	if(!empty($xbgk)){
		wp_nav_menu( array('container_class' => 'box_left','theme_location' => xbgk) );
		echo '<script type="text/javascript">window.onload=function highThis(){highURL("menu-xbgk","box_lefta");}</script>';
	}else if(!empty($jxzy)){
		wp_nav_menu( array('container_class' => 'fl aboutmain-left','theme_location' => jxzy) );
		echo '<script type="text/javascript">window.onload=function highThis(){highURL("menu-jxzy","aboutmain-left-li");}</script>';
	}
?>