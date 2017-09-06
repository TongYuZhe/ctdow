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
			
			$zyjs = strstr($current_url,'zyjs'); //验证地址栏是否有zyjs字符串
			$jsjs = strstr($current_url,'jsjs');
			$jymx = strstr($current_url,'jymx');
			$xbdt = strstr($current_url,'xbdt');
			$xbbk = strstr($current_url,'xbbk');
			$lybu = strstr($current_url,'lybu');
			$qsbx = strstr($current_url,'qsbx');
			if(!empty($zyjs)){
				require(get_stylesheet_directory()."/str/zyjs.php"); //专业介绍
			}else if(!empty($jsjs)){
				require(get_stylesheet_directory()."/str/jsjs.php"); //教师介绍
			}else if(!empty($jymx)){
				require(get_stylesheet_directory()."/str/jymx.php"); //就业明星
			}else if(!empty($xbdt)){
				require(get_stylesheet_directory()."/str/xbdt.php"); //系部动态
			}else if(!empty($xbbk)){
				require(get_stylesheet_directory()."/str/xbbk.php"); //系部博客
			}else if(!empty($lybu)){
				//require"str/lybu/lybu.php"; //留言簿
				echo '功能未上线';
			}else if(!empty($qsbx)){
				//require"str/qsbx.php"; //报修
				echo '功能未上线';
			}else{
				if(strstr($current_url,'lxwm')){
?>
					<style type="text/css">
						.box_right{width:85% !important;}
					</style>
<?php
				}//如果是联系我们页，宽度就加宽
?>
        		<p>
<?php
					while( have_posts() ) : the_post();
						the_content(); //系部介绍&联系我们
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
                <a href="javascript:scroll(0,0)"><img src="/wp-content/themes/ctdow/images/tope.jpg" width="44" height="51" /></a>
            </li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<div class="box_foot"></div>


    

     
<?php get_footer(); ?>