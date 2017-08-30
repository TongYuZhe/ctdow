    <div class="news">
    	<ul>
        <?php new news('系部动态','12'); ?>
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
	<?php pagination('xbdt'); ?>
	<div class="clear"></div>
	<style type="text/css">
		.box_right{width:85% !important;}
	</style>