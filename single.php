<?php get_header(); ?>
<div class="top-sub-navi inner-wrapper">
    <?php the_category(' > ', 'multiple'); echo " > "; ?><span class="cat-sub-heading"><?php echo get_secondary_title(); ?></span>
</div>
<div class="wrapper">
    <div class="inner-wrapper clearfix">
        <div class="main">
            <div class="post">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post();
                    /* ループ開始 */ ?>
                        <h2 class="sub-heading"><?php echo get_secondary_title(); ?></h2>
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
                        <?php 
                            if ($ctitle=="タウンプロジェクト") {
                                echo "<span class='single-town'>タウン</span>";
                            } else {
                                echo "<span class='single-oneon'>ワンオン</span>";
                            }
                        ?>
                        <h3 class="single-title"><?php the_title(); ?></h3>
                        
                        
                        <?php the_content(); ?>
                        <a class="miru-btn" href="<?php the_field('suumo'); ?>" alt="suumo">SUUMOで見る</a>
                        <a class="miru-btn at-home" href="<?php the_field('home'); ?>">at homeで見る</a>
                        <a href=""></a>
                        <h4 class="single-heading">物件詳細</h4>
                        
                        <table class="single-custom">
                            <tr class="single-row">
                                <th>物件名</th>
                                <td><?php the_field('物件名'); ?></td>
                            </tr>
                            <tr class="single-row">
                                <th>所在地</th>
                                <td><?php the_field('所在地'); ?> </td>
                            </tr>
                            <tr class="single-row">
                                <th>交通</th>
                                <td><?php the_field('交通'); ?></td>
                            </tr>
                            <tr class="single-row">
                                <th>販売戸数</th>
                                <td><?php the_field('販売戸数'); ?></td>
                                <th>販売価格</th>
                                <td><?php the_field('販売価格'); ?></td>
                            </tr>
                            <tr class="single-row">
                                <th>敷地面積</th>
                                <td><?php the_field('敷地面積'); ?></td>
                                <th>土地権利</th>
                                <td><?php the_field('土地権利'); ?></td>
                            </tr>
                            <tr class="single-row">
                                <th>地目</th>
                                <td><?php the_field('地目'); ?></td>
                                <th>都市計画</th>
                                <td><?php the_field('都市計画'); ?></td>
                            </tr>
                            <tr class="single-row">
                                <th>用途地域</th>
                                <td><?php the_field('用途地域'); ?></td>
                                <th>用途比率</th>
                                <td><?php the_field('用途比率'); ?></td>
                            </tr>
                            <tr class="single-row">
                                <th>容積率</th>
                                <td><?php the_field('容積率'); ?></td>
                                <th>防火指定</th>
                                <td><?php the_field('防火指定'); ?></td>
                            </tr>
                            <tr class="single-row">
                                <th>設備</th>
                                <td><?php the_field('設備'); ?></td>
                            </tr>
                            <tr class="single-row">
                                <th>接道道路</th>
                                <td><?php the_field('接道道路'); ?></td>
                            </tr>
                            <tr class="single-row">
                                <th>現況</th>
                                <td><?php the_field('現況'); ?></td>
                                <th>引渡</th>
                                <td><?php the_field('引渡'); ?></td>
                            </tr>
                        </table> 
                        <?php 
                            $location = get_field('map');

                            if( !empty($location) ):
                            ?>
                            <div class="acf-map">
                                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                            </div>
                            <?php endif; ?>   
                    <?php endwhile; ?>
                    <a href="">この物件についてお問い合わせする</a>
                    <div>
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
                        echo '<div id="related_posts"><h3>Related Posts</h3><ul>';
                        while( $my_query->have_posts() ) {
                        $my_query->the_post();?>

                        <li><div class="relatedthumb"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium', array('class' => 'related-image')); ?></a></div>
                        <div class="relatedcontent">
                        <h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <?php
                                        $content = get_the_content();
                                        $content = preg_replace("/<img[^>]+\>/i", " ", $content);
                                        $content = apply_filters('the_content', $content);
                                        $content = str_replace(']]>', ']]>', $content);
                                        echo $content;
                                        ?>
                        </div>
                        </li>
                        <?php
                        }
                        echo '</ul></div>';
                        }
                        }
                        $post = $orig_post;
                        wp_reset_query(); ?>
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
