<div class="side-model">
    <p class="en-title">MODEL</p>
    <h2 class="heading">モデルハウス</h2>
    <div class="model-item">
        <?php
              $query = new WP_Query(
               array(
                'category__in' => array(3),
                'posts_per_page' => 1,
                'post_type' => 'post',
               )
               );
             ?>
            <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
            <a class="article-box article-model" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumbnail', array('class' => 'image')); ?>
                <h3 class="title"><?php the_title(); ?></h3>
                <?php
                  $content = get_the_content();
                  $content = preg_replace("/<img[^>]+\>/i", " ", $content);
                  $content = apply_filters('the_content', $content);
                  $content = str_replace(']]>', ']]>', $content);
                  echo $content;
                ?>
            </a>
        <?php endwhile; endif; wp_reset_postdata(); ?>
        <div class="more">
            <a class="more-btn" href="">
            <span class="more-text">MORE</span>
            <span class="more-dir">></span>
            </a>
        </div>
    </div>
        
</div>
<div class="side-town">
    <p class="en-title">TOWN</p>
    <h2 class="heading">タウンプロジェクト</h2>
    <?php
              $query = new WP_Query(
               array(
                'category__in' => array(1),
                'posts_per_page' => 4,
                'post_type' => 'post',
               )
               );
             ?>
            <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
            <a class="article-project clearfix" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumbnail', array('class' => 'image')); ?>
                <div class="project-item">
                    <h3 class="title"><?php the_title(); ?></h3>
                    <?php
                    $content = get_the_content();
                    $content = preg_replace("/<img[^>]+\>/i", " ", $content);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                    ?>
                </div>
            </a>
            <?php endwhile; endif; wp_reset_postdata(); ?>
            
</div>
<div class="more">
                <a class="more-btn" href="">
                <span class="more-text">MORE</span>
                <span class="more-dir">></span>
                </a>
            </div>
<div class="side-oneon">
    <p class="en-title">ONEON</p>    
    <h2 class="heading">ワンオンプロジェクト</h2>
    <?php
              $query = new WP_Query(
               array(
                'category__in' => array(2),
                'posts_per_page' => 4,
                'post_type' => 'post',
               )
               );
             ?>
            <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
            <a class="article-project clearfix" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumbnail', array('class' => 'image')); ?>
                <div class="project-item">
                <h3 class="title"><?php the_title(); ?></h3>
                    <?php
                    $content = get_the_content();
                    $content = preg_replace("/<img[^>]+\>/i", " ", $content);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                    ?>
                </div>
            </a>
            <?php endwhile; endif; wp_reset_postdata(); ?>
            
</div>
<div class="more">
    <a class="more-btn" href="">
    <span class="more-text">MORE</span>
    <span class="more-dir">></span>
    </a>
</div>
<div class="side-newevent">
    <p class="en-title">BLOG</p>    
    <h2 class="heading">最近の出来事</h2>
    <?php
        $query = new WP_Query(
        array(
        'category__in' => array(6),
        'posts_per_page' => 4,
        'post_type' => 'post',
        )
        );
    ?>
    <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
    <a class="article-project clearfix" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('thumbnail', array('class' => 'image')); ?>
        <div class="project-item">
        <h3 class="title"><?php the_title(); ?></h3>
            <?php
            $content = get_the_content();
            $content = preg_replace("/<img[^>]+\>/i", " ", $content);
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]>', $content);
            echo $content;
            ?>
        </div>
    </a>
    <?php endwhile; endif; wp_reset_postdata(); ?>
</div>
<div class="more">
    <a class="more-btn" href="">
    <span class="more-text">MORE</span>
    <span class="more-dir">></span>
    </a>
</div>