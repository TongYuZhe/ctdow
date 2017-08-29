
        <?php //$getid = get_cat_ID('专业介绍'); ?>
		<?php
            $limit = 12;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts('&showposts=' . $posts_per_page . '&paged=' . $paged . '&cat='.$getid);
            $wp_query->is_archive = true;
            $wp_query->is_home = false;
        ?>
        <?php /*wp_list_categories('include=2&title_li=&style=none');*/ ?><!-- 分类名 -->
        
        
  

    <div class="teams">
      <ul>
      	<?php
			while( have_posts() ) : the_post();		
		?>
        <li>
          <p><a href="<?php echo get_permalink(); ?>"><img src="<?php echo catch_that_image() ?>"></a></p>
          <p><?php the_title(); ?></p>
        </li>
        <?php
				endwhile;
		?>
      </ul>
    </div>
    <?php pagination($hqwz); ?>
    <div class="clear"></div>
    
  </div>
  <!--<div class="fudong">
  	<ul>
     	<li><p class="g1"><a href="http://www.baidu.com"></a></p></li>
        <li><a href="javascript:scroll(0,0)"><img src="images1/tope.jpg" width="44" height="51" /></a></li>
    </ul>
  </div>-->
  
  <div class="clear"></div>
  
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