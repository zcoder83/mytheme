<?php 
    /* Template Name: Voice */ 
    get_header(); ?>
<div class="inner-wrapper">
    <span class="contact-category-list"><a href="<?php echo home_url(); ?>">TOP</a></span> > <?php the_title(); ?>
</div>
<div class="wrapper">
    <div class="inner-wrapper clearfix">
        <div class="voice-main main">
            <p class="en-title">VOICE</p>
            <h1 class="heading">お客様の声</h1>
            <div class="voice-page clearfix">
                <?php
                    $query = new WP_Query(
                    array(
                    'category__in' => array(4),
                    'posts_per_page' => 4,
                    'post_type' => 'post',
                    )
                    );
                    ?>
                <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
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
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="sidemenu">
            <?php get_sidebar() ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
haha