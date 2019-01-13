<?php
/**
 * Template Name: New Event(Dekikoto)
 */
get_header();
?>
<div class="top-sub-navi inner-wrapper">
    <span class="contact-category-list"><a href="<?php echo home_url(); ?>">TOP</a></span> &gt <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
</div>

<div class="wrapper">
    <div class="inner-wrapper clearfix">
        <div class="main">
        <h2 class="sub-heading">”最近の出来事” の記事一覧</h2>
        <p class="category-desc-all">多区画の街造り。一定のコンセプトを設け、新しい街を創造します。ある程度共通した仕様の中ですのでコスト面でお客様に満足していただける企画です。ただ自由設計である事は同じです。</p>
        
        <!-- pagination with category display -->
        <?php
        $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'new-event',
            'posts_per_page' => 10,
            'paged' => $paged,
        );
        $arr_posts = new WP_Query( $args );
        wp_pagenavi(
            array(
                'query' => $arr_posts,
            )
        );
 
        if ( $arr_posts->have_posts() ) :
 
            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>
                <a class="category-list clearfix" href="<?php the_permalink(); ?>">
                    <div class="cat-list-img">
                        <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail('medium', array('class' => 'cat-image'));
                        endif;
                        ?>   
                    </div>
                    <div class="cat-list-desc">
                        <span class="new-event">最近の出来事</span>
                        <h2 class="cat-secon-title"><?php echo get_secondary_title(); ?></h2>
                        <?php
                            $content = get_the_content(array('class' => 'cat-content'));
                            $content = preg_replace("/<img[^>]+\>/i", " ", $content);
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]>', $content);
                            echo $content;
                        ?>
                    </div>
                    
                </a>
                <?php
            endwhile;
            wp_pagenavi(
                array(
                    'query' => $arr_posts,
                )
            );
        endif;
        ?>

        </div>
        <div class="sidemenu">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
