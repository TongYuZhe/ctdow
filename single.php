<?php get_header(); ?>
	
    <div class="box">
	<?php get_sidebar(); ?>
    <?php while( have_posts() ) : the_post(); ?>
        <h1></h1>
        <div class="box_right">
            <div class="meiti">
                <ul>
                    <li class="ab">
                        <p class="text"><?php the_title(); ?></p>
                        <p class="texts">2014年09月03日  12:42    浏览次数：102 </p>
                    </li>
                    <li>
                        <p class="con"><?php echo get_the_content() ?></p>
<?php
						$categories = get_the_category();
						$categoryIDS = array();
						foreach ($categories as $category){
							array_push($categoryIDS, $category->term_id);
						}
						$categoryIDS = implode(",", $categoryIDS);
?>
                        <p class="cons"><?php if (get_previous_post($categoryIDS)) { previous_post_link('上一篇: %link','%title',true);} else { echo "已是最后文章";} ?></p>
                        <p class="cons"><?php if (get_next_post($categoryIDS)) { next_post_link('下一篇: %link','%title',true);} else { echo "已是最新文章";} ?></p>

                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
	</div>
    <div class="box_foot"></div>
	<?php endwhile; ?>
	
<?php get_footer(); ?>