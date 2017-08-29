<?php get_header(); ?>
<div class="box">
	<?php get_sidebar(); ?>
    <div class="box_right">
        <div class="box_right_texs"><?php the_title(); ?></div>
        <div class="contents">
        <style type="text/css">
			.box_right{width:68%;}
		</style>
<?php
			global $wp;
			$current_url = home_url(add_query_arg(array(),$wp->request));
						
			$xbjs = strstr($current_url,'xbjs');//验证地址栏是否有xbjs字符串
			$zyjs = strstr($current_url,'zyjs');
			$xbdt = strstr($current_url,'xbdt');
			$jsjs = strstr($current_url,'jsjs');
			$jymx = strstr($current_url,'jymx');
			$xbbk = strstr($current_url,'xbbk');
			$lybu = strstr($current_url,'lybu');
			$qsbx = strstr($current_url,'qsbx');
			if(!empty($zyjs)){
				require"zyjs.php";
			}else if(!empty($xbdt)){
				require"zyjs.php";
			}else if(!empty($jsjs)){
				require"str/jsjs.php";
			}else if(!empty($jymx)){
				require"jsjs.php";
			}else if(!empty($xbbk)){
				require"zyjs.php";
			}else if(!empty($lybu)){
				require"ly.php";
			}else if(!empty($qsbx)){
				require"bx.php";
			}else{		
?>
    			
        		<p>
<?php
					while( have_posts() ) : the_post();
						the_content();
					endwhile;
?>
        		</p>
<?php
			}
?>
		</div>
	</div>
    <div class="fudong">
        <ul>
            <li>
                <p class="g1"><a href="http://www.baidu.com"></a></p>
            </li>
            <li>
                <a href="javascript:scroll(0,0)"><img src="/wp-content/themes/ctdow/images1/tope.jpg" width="44" height="51" /></a>
            </li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<div class="box_foot"></div>


    

     
<?php get_footer(); ?>