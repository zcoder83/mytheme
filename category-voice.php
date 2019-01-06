<?php
/**
 * Template Name: Category voice
 */
 
get_header(); ?>
<div class="inner-wrapper">
    <span class="contact-category-list"><a href="<?php echo home_url(); ?>">TOP</a></span> &gt <?php the_title(); ?>
</div>
<div class="wrapper">
    <div class="inner-wrapper clearfix">
        <div class="voice-main main">
            <p class="en-title">VOICE</p>
            <h1 class="heading">お客様の声</h1>
            <div class="voice-page clearfix">
                <?php
                $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'voice',
                    'posts_per_page' => 3,
                    'paged' => $paged,
                );
                $arr_posts = new WP_Query( $args );
        
                if ( $arr_posts->have_posts() ) :
        
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                ?>
                <div class="voice-item">
                    <?php the_post_thumbnail('large', array('class' => 'voice-image')); ?>
                    <h2 class="maker">YOUNGLE</h2>
                    <h3 class="title"><?php the_title(); ?></h3>
                    <div class="br-line"></div>
                    <div class="bg-opa"></div>
                </div>
                    <?php
                    $content = get_the_content(array('class' => 'voice-desc'));
                    $content = preg_replace("/<img[^>]+\>/i", " ", $content);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                    ?>
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
        </div>
        <div class="sidemenu">
            <?php get_sidebar() ?>
        </div>
    </div>
</div>
 
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>