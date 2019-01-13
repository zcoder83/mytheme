<?php get_header(); ?>
<div class="top-sub-navi inner-wrapper">
    <?php the_category(' > ', 'multiple'); echo " > "; ?><span class="cat-sub-heading"><?php the_title(); ?></span>
</div>
<div class="wrapper">
    <div class="inner-wrapper clearfix">
        <div class="main">
            <div class="post">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post();
                    /* ループ開始 */ ?>
                        <h2 class="sub-heading"><?php the_title(); ?></h2>
                        <?php
                            $categories = get_the_category();
                            $ctitle = '';
                            $cls = '';

                            if ( ! empty( $categories ) ) {
                                foreach ( $categories as $cat ) {
                                $cls .= $cat->slug . ' ';
                                $ctitle .= $cat->cat_name . '';
                                }
                            }
                        ?>
                        <span class='single-newevent'>タウン</span>
                        
                        <div class="single-content">
                            <div class="newevent-list-img">
                            <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail('large', array('class' => 'newevent-image'));
                            endif;
                            ?>   
                            </div>
                            <div class="newevent-content">
                                <?php the_content(); ?>
                            </div>
                            <?php if( get_field('タイトル01') ): ?>
                                <h3 class="event-title"><?php the_field('タイトル01'); ?></h3>
                            <?php endif; ?>
                            <?php if( get_field('内容01') ): ?>
                                <p class="event-desc"><?php the_field('内容01'); ?></p>
                            <?php endif; ?>
                            <?php 
                            $image = get_field('写真01');
                            if( !empty($image) ): ?>
                                <img class="event-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>  
                            <!-- ------------------------------------------- -->
                            <?php if( get_field('タイトル02') ): ?>
                                <h3 class="event-title"><?php the_field('タイトル02'); ?></h3>
                            <?php endif; ?> 
                            <?php if( get_field('内容02') ): ?>
                                <p class="event-desc"><?php the_field('内容02'); ?></p>
                            <?php endif; ?>
                            <?php 
                            $image = get_field('写真02');
                            if( !empty($image) ): ?>
                                <img class="event-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>  
                            <!-- ------------------------------------------- -->
                            <?php if( get_field('タイトル03') ): ?>
                                <h3 class="event-title"><?php the_field('タイトル03'); ?></h3>
                            <?php endif; ?>
                            <?php if( get_field('内容03') ): ?>
                                <p class="event-desc"><?php the_field('内容03'); ?></p>
                            <?php endif; ?>
                            <?php 
                            $image = get_field('写真03');
                            if( !empty($image) ): ?>
                                <img class="event-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>     

                        </div>
                    <?php endwhile; ?>

                    <?php $orig_post = $post;
                        global $post;
                        $categories = get_the_category($post->ID);
                        if ($categories) {
                        $category_ids = array();
                        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                        $args=array(
                        'category__in' => $category_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page'=> 3, // Number of related posts that will be shown.
                        'caller_get_posts'=>1
                        );

                        $my_query = new wp_query( $args );
                        if( $my_query->have_posts() ) {
                        echo '<p class="en-title move-left">Related</p>
                        <h2 class="heading">関連物件</h2><div class="related_posts">';
                        while( $my_query->have_posts() ) {
                        $my_query->the_post();?>

                        <a class="article-box" href="<?php the_permalink();?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium', array('class' => 'image')); ?>
                        <h3 class="title"><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <?php
                        }
                        echo '</a></div>';
                        }
                        }
                        $post = $orig_post;
                        wp_reset_query(); ?>
                        <div class="more">
                            <a class="more-btn" href="">
                                <span class="more-text">MORE</span>
                                <span class="more-dir">></span>
                            </a>
                        </div>
                <?php else : ?>
                        <h3>記事がありません</h3>
                        <p>表示する記事はありませんでした。</p>
                <?php endif; ?>
            </div> 
        </div>
        <div class="sidemenu">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
