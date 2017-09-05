
    <div class="news">
    	<ul>
        <?php new news('专业介绍','12'); ?>
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
