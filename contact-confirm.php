<?php
 /* Template Name: Contact Confirmation */ 
 get_header(); ?>
 <div class="inner-wrapper">
    <span class="contact-category-list"><a href="<?php echo home_url(); ?>">TOP</a></span> > <?php the_title(); ?>
 </div>
 <div class="common-main-title">
    <div class="inner-wrapper">
        <span class="common-title">CONTACT US</span><h1>お問い合わせ</h1>
    </div>
</div>
 <div class="inner-wrapper">
    <p class="contact-ex">以下の内容をご確認の上、「送信する」ボタンを押してください。修正する場合は、「修正する」ボタンを押してください。</p>
</div>
<div class="step-123 flex-container">
    <div class="step1">
        <span class="step-num">STEP.1</span><span>内容の入力</span>
    </div>
    <div class="step2 onthepage">
        <span class="step-num">STEP.2</span><span>内容の確認</span>
    </div>
    <div class="step3">
        <span class="step-num">STEP.3</span><span>送信完了</span>
    </div>
</div>
 <div class="inner-wrapper">
 <?php echo do_shortcode( '[mwform_formkey key="96"]' ); ?> 
 </div>


<?php get_footer(); ?>
