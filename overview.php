<?php
/*
*
* Template Name: 会社概要テンプレート
*
*/
?>
<?php get_header(); ?>
<div class="container-fluid breadclumbContainer py-2">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">会社概要</li>
    </ol>
  </nav>
</div>
<div class="container-xxl">
  <div class="companyOverview row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="companyOverview__title titleText text-center">
        <h1 class="titleText__japaneseImg">
          <img src="<?php echo get_template_directory_uri();?>/assets/h2_company-DCn3ntqv.png" alt="お問い合わせ" />
        </h1>
        <p class="titleText__english">Company Overview</p>
      </div>
      <div class="companyOverview__contents">
        <div class="table-responsive companyOverview__TableContainer">
          <table class="table align-middle">
            <thead>
              <tr>
                <td></td>
                <td></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="fw-medium">社名</th>
                <td>リゴロ株式会社</td>
              </tr>
              <tr>
                <th scope="row" class="fw-medium">英語表記</th>
                <td>REGOLO</td>
              </tr>
              <tr>
                <th scope="row" class="fw-medium">代表者名</th>
                <td>森屋吾郎</td>
              </tr>
              <!-- <tr>
                    <th scope="row" class="fw-medium">会社電話番号</th>
                    <td>03-0000-0000</td>
                  </tr>
                  <tr>
                    <th scope="row" class="fw-medium">会社住所</th>
                    <td>〒157-0067  東京都世田谷区喜多見7−8−23 Heim Yuri #1</td>
                  </tr> -->
              <tr>
                <th scope="row" class="fw-medium">設立日</th>
                <td>2024年8月1日</td>
              </tr>
              <tr>
                <td class="fw-medium">営業時間</td>
                <td>9:00~17:00　 (定休日：土日祝)</td>
              </tr>
              <tr>
                <td class="fw-medium">事業内容</td>
                <td>原状回復/リフォーム/メンテナンス/外装/店舗内装工事/水回り工事/漏水調査/断熱工事など</td>
              </tr>
              <tr>
                <td class="fw-medium">事業エリア</td>
                <td>関東エリア、その他ご相談に応じて</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row imgBird1Container mt-5">
        <div class="col-2"></div>
        <div class="col-8 d-flex justify-content-end">
          <img class="imgBird1" src="<?php echo get_template_directory_uri();?>/assets/illust_bird1-BI0kJgdq.png" alt="" height="120" />
        </div>
        <div class="col-2"></div>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<div class="container-fluid footerImgContainer"></div>
<?php get_footer(); ?>