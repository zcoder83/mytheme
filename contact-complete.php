<?php
 /* Template Name: Contact Complete */ 
 get_header(); ?>
 <div class="inner-wrapper">
    <span class="contact-category-list"><a href="<?php echo home_url(); ?>">TOP</a></span> > <?php the_title(); ?>
 </div>
<div class="step-123 flex-container">
    <div class="step1">
        <span class="step-num">STEP.1</span><span>内容の入力</span>
    </div>
    <div class="step2">
        <span class="step-num">STEP.2</span><span>内容の確認</span>
    </div>
    <div class="step3 onthepage">
        <span class="step-num">STEP.3</span><span>送信完了</span>
    </div>
</div>
 <div class="inner-wrapper">
     <p class="thankyou"> この度はお問い合わせいただき、誠にありがとうございました。 お送りいただきました内容を確認の上、折り返しご連絡させていただきます。</p>
     <div class="contact-send-btn">
         <a class="contact-send" href="<?php echo home_url(); ?>">トップページに戻る</a>
     </div>
 <?php echo do_shortcode( '[mwform_formkey key="96"]' ); ?> 
 </div>


<?php get_footer(); ?>


