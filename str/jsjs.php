	<?php new news('教师介绍','12'); ?>
    <div class="teams">
		<ul>
<?php
			while( have_posts() ) : the_post();		
?>
				<a href="<?php echo get_permalink(); ?>">
                    <li>
                        <p class="p1"><img src="<?php echo catch_that_image() ?>"></p>
                        <p class="p2"><?php the_title(); ?></p>
                    </li>
                </a>
<?php
			endwhile;
?>
		</ul>
	</div>
    <?php pagination('jsjs'); //分页,获取jsjs页下文章的数目 ?>
	<div class="clear"></div>