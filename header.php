<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( is_home() || is_front_page()) {
      $title = '東京を中心に関東で営業中！お家のメンテナンス・リフォーム・原状回復の工事はリゴロにお任せください。';
      $description = 'ご自宅のお困りごとやお部屋の原状回復のお見積りのご依頼。採用などはお気軽にこちらをご利用ください。';
    } else if (is_page('inquires')) {
      $title = 'お問い合わせページです。';
      $description = 'ご自宅のお困りごとやお部屋の原状回復のお見積りのご依頼。採用などはお気軽にこちらをご利用ください。';
    } else if (is_page('staff')) {
      $title = 'スタッフ募集／住まいの事でお悩みなら工務店のリゴロ';
      $description = 'あなたの力を私たちの新しい挑戦に貸してください！';
    } else if (is_page('overview')) {
    $title = '東京都世田谷区の工務店のリゴロ株式会社です。';
    $description = '当社は東京都世田谷区で設立された工務店です。工事施工からアフターフォローまで一貫したサービスを提供する会社です。都内を中心に営業活動をしております。';
    } else {
      $title = '東京を中心に関東で営業中！お家のメンテナンス・リフォーム・原状回復の工事はリゴロにお任せください。';
      $description = 'ご自宅のお困りごとやお部屋の原状回復のお見積りのご依頼。採用などはお気軽にこちらをご利用ください。';
    }
    ?>
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta property="og:title" content="<?php echo $title; ?>" />
		<meta property="og:description" content="<?php echo $description; ?>" />
    <meta name="robots" content="noindex" />
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/assets/regolo_favicon-Be6Nb3RU.ico" sizes="32x32">
    <link rel="stylesheet" href="https://use.typekit.net/ipa8xsu.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6LYCFD1NZM"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-6LYCFD1NZM');
    </script>
    <!-- Google tag (gtag.js)ここまで -->
  <?php wp_head(); ?>
  </head>
  <body>
    <div class="container-fluid headerContainer">
      <nav class="navbar navbar-expand-md">
        <div class="container-fluid px-0">
          <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri();?>/assets/jp_logo_yoko-CpS2ziNQ.svg" alt="Logo" height="56" class="d-inline-block align-text-top"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1">
              <?php if ( is_home() || is_front_page()) {
                  $home_active = 'active';
                  $staff_active = '';
                  $overview_active = '';
                  $inquires_active = '';
                } else if (is_page('inquires')) {
                  $home_active = '';
                  $staff_active = '';
                  $overview_active = '';
                  $inquires_active = 'active';
                } else if (is_page('staff')) {
                  $home_active = '';
                  $staff_active = 'active';
                  $overview_active = '';
                  $inquires_active = '';
                } else if (is_page('overview')) {
                  $home_active = '';
                  $staff_active = '';
                  $overview_active = 'active';
                  $inquires_active = '';
                } else {
                  $home_active = '';
                  $staff_active = '';
                  $overview_active = '';
                  $inquires_active = '';
                } ?>
                <li class="nav-item">
                  <a class="nav-link text-center <?php echo $home_active ?>" aria-current="page" href="/">HOME</a>
      
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center <?php echo $staff_active ?>" href="/staff">スタッフ募集</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center <?php echo $overview_active ?>" href="/overview">会社概要</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center <?php echo $inquires_active ?>" href="/inquires">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>  
    </div>