
    <div class="news">
    	<ul>
        <?php //$getid = get_cat_ID('专业介绍'); ?>
		<?php
            $limit = 14;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts('&showposts=' .$posts_per_page. '&paged=' . $paged . '&cat='.$getid);
            $wp_query->is_archive = true;
            $wp_query->is_home = false;
        ?>
        <?php /*wp_list_categories('include=2&title_li=&style=none');*/ ?><!-- 分类名 -->
        
        <?php
			while( have_posts() ) : the_post();		
		?>
        	<li>
            	<p class="e1"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
            </li>
        <?php
				endwhile;
		?>
        </ul>
    </div>

  <?php pagination($hqwz); ?>
   <div class="clear"></div>
