<?php
/*
 *
 * Template Name: お問い合わせテンプレート
 *
 */
?>
<?php get_header(); ?>
<div class="container-fluid breadclumbContainer py-2">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">お問い合わせ</li>
    </ol>
  </nav>
</div>
<div class="container-xxl">
  <div class="inquiresForm">
    <?php echo apply_shortcodes( '[contact-form-7 id="1fc842f" title="コンタクトフォーム 1"]' ); ?>
  </div>  
    <div class="row imgBird4Container mt-5">
    <div class="col-2"></div>
    <div class="col-8 d-flex justify-content-end">
      <img class="imgBird4" src="<?php echo get_template_directory_uri();?>/assets/illust_bird4-C29D7HLC.png" alt="" />
    </div>
    <div class="col-2"></div>
  </div>
</div>
<div class="container-fluid footerImgContainer"></div>

<?php get_footer(); ?>