<?php get_header(); ?>
<div class="main-img">
      <img class="main-img-item" src="<?php bloginfo('template_url'); ?>/img/main-img.jpg" alt="main-image">
</div>
<div class="what-can-do">
      <div class="whatcando-item inner-wrapper">
        <p class="en-title">WHAT WE CAN DO</p>
        <h1 class="main-title">ライジングだからできる“自由設計”</h1>
        <div class="what-content">
          <ul class="list-whatcando">
            <li>
              <span class="list-num">01</span>
              <img class="list-img" src="<?php bloginfo('template_url'); ?>/img/whatcando01.png" alt="plan">
              <p class="title">図面合わせ</p>
              <p class="desc">一級建築士と間取りや部屋数などを相談
します。</p>
            </li>
            <li>
              <span class="list-num">02</span>
              <img class="list-img" src="<?php bloginfo('template_url'); ?>/img/whatcando02.png" alt="plan">
              <p class="title">展示会場見学</p>
              <p class="desc">色、外観、内装などを実際にご覧いただき
ながら打ち合わせをします。</p>
            </li>
            <li>
              <span class="list-num">03</span>
              <img class="list-img" src="<?php bloginfo('template_url'); ?>/img/whatcando03.png" alt="plan">
              <p class="title">電気打ち合わせ</p>
              <p class="desc">家具の配置などから、コンセントの位置
などを決定します。</p>
            </li>
            <li>
              <span class="list-num">04</span>
              <img class="list-img" src="<?php bloginfo('template_url'); ?>/img/whatcando04.png" alt="plan">
              <p class="title">外構打ち合わせ</p>
              <p class="desc">庭や塀、玄関アプローチ、駐車場等の相談
をします。</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <div class="inner-wrapper clearfix">
        <div class="main">
          <p class="en-title move-left">NEW</p>
          <h2 class="heading">最新物件</h2>
          <div class="new clearfix">
            <?php
              $query = new WP_Query(
               array(
                'category__in' => array(1,2),
                'posts_per_page' => 8,
                'post_type' => 'post',
               )
               );
             ?>
            <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
            <a class="article-box article-new clearfix" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', array('class' => 'image')); ?>
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
                <span class="<?php echo $cls; ?>">
                <?php 
                  if ($ctitle=="タウンプロジェクト  ") {
                    echo "タウン";
                  } else {
                    echo "ワンオン";
                  }
                ?>
                 
                </span>
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
          </div>
          <div class="more">
              <a class="more-btn" href="">
                <span class="more-text">MORE</span>
                <span class="more-dir">></span>
              </a>
            </div>
          <p class="en-title">VOICE</p>
          <h2 class="heading">お客様の声</h2>
          <div class="voice clearfix">
            <?php
              $query = new WP_Query(
               array(
                'category__in' => array(4),
                'posts_per_page' => 3,
                'post_type' => 'post',
               )
               );
             ?>
            <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
            <a class="article-box article-voice" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', array('class' => 'image')); ?>
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
        <div class="sidemenu">

          <?php get_sidebar() ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
haha