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
  <form class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="inquires">
        <div class="inquires__title titleText text-center">
          <h1 class="titleText__japaneseImg">
            <img src="<?php echo get_template_directory_uri();?>/assets/h2_inquiries-C2Vs2DDB.png" alt="お問い合わせ" />
          </h1>
          <p class="titleText__english">Inquires</p>
        </div>
        <div class="inquires__subTitle">ご連絡先</div>
        <div class="inquires__contents">
          <div class="container-fluid">
            <div class="row">
              <div class="col ps-0">
                <label for="lastName" class="form-label">姓<span class="badge bg-primary">必須</span></label>
              </div>
              <div class="col px-0">
                <label for="fastName" class="form-label">名<span class="badge bg-primary">必須</span></label>
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col ps-0">
                <input type="text" class="form-control" id="lastName" maxlength="100" required />
              </div>
              <div class="col px-0">
                <input type="text" class="form-control" id="firstName" maxlength="100" required />
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col ps-0">
                <label for="firstNameKana" class="form-label">せい<span class="badge bg-primary">必須</span></label>
              </div>
              <div class="col px-0">
                <label for="lastNameKana" class="form-label">めい<span class="badge bg-primary">必須</span></label>
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col ps-0">
                <input type="text" class="form-control" id="lastNameKana" maxlength="100" required />
              </div>
              <div class="col px-0">
                <input type="text" class="form-control" id="firstNameKana" maxlength="100" required />
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col px-0">
                <label for="email" class="form-label">Email<span class="badge bg-primary">必須</span></label>
              </div>
            </div>
            <div class="row">
              <div class="col px-0">
                <input type="email" class="form-control" id="email" placeholder="you@example.com" required />
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col px-0">
                <label for="postCode" class="form-label">郵便番号</label>
              </div>
            </div>
            <div class="row">
              <div class="col-4 px-0">
                <input type="text" class="form-control" id="postCode" placeholder="123-4567" maxlength="8" />
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col px-0">
                <label for="address" class="form-label">ご住所</label>
              </div>
            </div>
            <div class="row">
              <div class="col px-0">
                <input type="text" class="form-control" id="address" placeholder="マンション・アパート名もご記入ください"
                  maxlength="200" />
              </div>
            </div>
          </div>
        </div>
        <div class="inquires__subTitle">お問い合わせ内容</div>
        <div class="inquires__contents">
          <div class="container-fluid mb-3 px-0">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio1" checked>
              <label class="form-check-label" for="flexRadio1">
                リフォームについて
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio2">
              <label class="form-check-label" for="flexRadio2">
                お見積もりについて
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio3">
              <label class="form-check-label" for="flexRadio3">
                スタッフ募集について
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio4">
              <label class="form-check-label" for="flexRadio4">
                その他
              </label>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col px-0">
                <label for="title" class="form-label">件名 (全角40文字以内)</label>
              </div>
            </div>
            <div class="row">
              <div class="col px-0">
                <input type="text" class="form-control" id="title" placeholder="" maxlength="80" />
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col px-0">
                <label for="inquiresContents" class="form-label">お問い合わせ内容 (全角1000文字以内)<span
                    class="badge bg-primary">必須</span></label>
              </div>
            </div>
            <div class="row">
              <div class="col px-0">
                <textarea class="form-control" id="inquiresContents" placeholder="" maxlength="2000" rows="8"
                  required></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-grid d-md-flex justify-content-md-center mt-3">
      <button class="btn btn-primary py-3 col-md-5" type="submit">送信する</button>
    </div>
    <div class="col-md-2"></div>
  </form>
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