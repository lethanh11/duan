<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="base.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

  <title>Document</title>
</head>

<body>
  <div class="app">
    <header class="header">
      <?php include "header.php" ?>
    </header>

    <div class="app__container">
      <div class="grid">
        <div class="grid__row app-content">
          <div class="grid__column-3">
            <nav class="category">
              <h3 class="category__heading">Sản Phẩm</h3>
              <ul class="category-list">
                <li class="category-item">
                  <img src="http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/men-psy-1-150x150.jpg" alt="" class="category-img">
                  <div class="category-item-infor">
                    <div class="category-item-header">
                      <h4 class="category-item-name">Chuck Taylor Classic</h4>
                      <span class="category-item-price">2.000.000đ</span>
                    </div>
                  </div>
                </li>
                <li class="category-item">
                  <img src="http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/men-psy-1-150x150.jpg" alt="" class="category-img">
                  <div class="category-item-infor">
                    <div class="category-item-header">
                      <h4 class="category-item-name">Chuck Taylor Classic</h4>
                      <span class="category-item-price">2.000.000đ</span>
                    </div>
                  </div>
                </li>
                <li class="category-item">
                  <img src="http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/men-psy-1-150x150.jpg" alt="" class="category-img">
                  <div class="category-item-infor">
                    <div class="category-item-header">
                      <h4 class="category-item-name">Chuck Taylor Classic</h4>
                      <span class="category-item-price">2.000.000đ</span>
                    </div>
                  </div>
                </li>
              </ul>

            </nav>
          </div>
          <div class="grid__column-9">
            <div class="home-fillter">
              <span class="home-fillter__label">Sắp Xếp Theo</span>
              <button class="home-fillter__btn btn btn-pb btn-fillter">Phổ biến</button>
              <button class="home-fillter__btn btn btn--primary btn-fillter">Mới Nhất</button>
              <button class="home-fillter__btn btn btn-pb btn-fillter">Bán Chạy</button>

              <div class="select-input">
                <span class="select-input__label">Giá</span>
                <i class="select-input__icon fas fa-angle-down"></i>
                <ul class="selcet-input__list">
                  <li class="select-input__item">
                    <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                  </li>
                  <li class="select-input__item">
                    <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                  </li>
                </ul>
              </div>
              <div class="home-fillter__page">
                <span class="home-fillter__page-num">
                  <span class="home-fillter__page-current">1</span>/14

                </span>
                <div class="home-fillter__page-control">
                  <a href="" class="home-fillter__page-btn home-fillter__page-btn--disable">
                    <i class="home-fillter__page-icon fas fa-angle-left"></i>
                  </a>
                  <a href="" class="home-fillter__page-btn">
                    <i class="home-fillter__page-icon fas fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="home-product">
              <div class="grid__row">
                <div class="grid__column-3-4">  
                    <div class="home-product-item">
                      <a href="#" class="home-procut-item-link">
                      <div class="home-product-item__img">
                        <img src="https://giayxshop.vn/wp-content/uploads/2018/12/MG_2427-600x600.jpg" width="100%" height="100%" alt="">
                        </div>
                        <h4 class="home-product-item__name">Chuck 70 Archive Prints Hi</h4>
                        <div class="home-product-item__price">
                          <span class="home-product-item__price-old">1.200.000đ</span>
                          <span class="home-product-item__price-current">900.000đ</span>
                        </div>
                        <div class="home-product-item__action">
                          <span class="home-product-item__like home-product-item__like--liked">
                            <i class="home-product-item__like-icon-empty far fa-heart"></i>
                            <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                        </span>
                          <div class="home-product-item__rating">
                            <i class="home-product-item__start--gold fas fa-star"></i>
                            <i class="home-product-item__start--gold fas fa-star"></i>
                            <i class="home-product-item__start--gold fas fa-star"></i>
                            <i class="home-product-item__start--gold fas fa-star"></i>
                            <i class=" fas fa-star"></i>
                          </div>
                        </div>
                        <div class="home-product-item__origin">
                          <a href="" class="home-product-item__origin-cart btn btn--primary">Thêm giỏ hàng</a>
                        </div>
                        <div class="home-product-item__favourite">
                          <i class="fas fa-check"></i>
                          <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                          <span class="home-product-item__sale-off-percent">43%</span>
                          <span class="home-product-item__sale-off-label">GIẢM</span>
                        </div>
                        </a>
                    </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer"></div>
  </div>

  <!-- Modal -->
  <!-- <div class="modal">
    <div class="modal__overlay">

    </div>
    <div class="modal__body">
      Đăng Ký
        <div class="auth-form">
         <div class="auth-form__container">
         <div class="auth-form__header">
            <h3 class="auth-form__heading">Đăng Ký</h3>
            <span class="auth-form__switch-btn">Đăng Nhập</span>
          </div>
          <div class="auth-form__form">
            <div class="auth-form__group">
              <label for="" class="auth-form__text">Địa chỉ email *</label>
              <input type="text" class="auth-form__input" placeholder="Nhập Email">
            </div>
            <div class="auth-form__group">
            <label for="" class="auth-form__text">Mật Khẩu *</label>
              <input type="password" class="auth-form__input" placeholder="Nhập Mật khẩu">
            </div>
            <div class="auth-form__group">
            <label for="" class="auth-form__text">Nhập lại mật khẩu *</label>
              <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu">
            </div>
          </div>
          <div class="auth-form__aside">
            <p class="auth-form__policy-text">
              Bằng việc đăng ký, bạn đã đồng ý với Mona về
              <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
              <a href="" class="auth-form__text-link"> Chính sách bảo mật </a>
            </p>
          </div>
          <div class="auth-form__controls">
            <buttton text="submit" class="btn btn-normal auth-form__controls-back">TRỞ LẠI</buttton>
            <buttton text="submit" class="btn btn--primary ">ĐĂNG KÝ</buttton>
          </div>
         </div>
          <div class="auth-form__socials">
            <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
            <i class="auth-form__socials-icon fab fa-facebook-square"></i>
           <span class="auth-form__socials-title">Kết nối với Facebook</span> 
            </a>
            <a href=""  class="auth-form__socials--google btn  btn--size-s btn--with-icon">
            <i style="color: #666;" class="auth-form__socials-icon fab fa-google"></i>
            <span class="auth-form__socials-title"> Kết nối với Google</span>
            </a>
          </div>
        </div>
       Đăng Nhập
       <div class="auth-form">
         <div class="auth-form__container">
         <div class="auth-form__header">
            <h3 class="auth-form__heading">Đăng Nhập</h3>
            <span class="auth-form__switch-btn">Đăng Ký</span>
          </div>
          <div class="auth-form__form">
            <div class="auth-form__group">
              <label for="" class="auth-form__text">Địa chỉ email *</label>
              <input type="text" class="auth-form__input" placeholder="Nhập Email">
            </div>
            <div class="auth-form__group">
            <label for="" class="auth-form__text">Mật Khẩu *</label>
              <input type="password" class="auth-form__input" placeholder="Nhập Mật khẩu">
            </div>
           
          </div>
          <div class="auth-form__aside">
           <div class="auth-form__help">
             <a class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
             <span class="auth-form__help-separate"></span>
             <a class="auth-form__help-link "> Cần trợ giúp?</a>
           </div>
          </div>
          <div class="auth-form__controls">
            <buttton text="submit" class="btn btn-normal auth-form__controls-back">TRỞ LẠI</buttton>
            <buttton text="submit" class="btn btn--primary ">ĐĂNG NHẬP</buttton>
          </div>
         </div>
          <div class="auth-form__socials">
            <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
            <i class="auth-form__socials-icon fab fa-facebook-square"></i>
           <span class="auth-form__socials-title">Kết nối với Facebook</span> 
            </a>
            <a href=""  class="auth-form__socials--google btn  btn--size-s btn--with-icon">
            <i style="color: #666;" class="auth-form__socials-icon fab fa-google"></i>
            <span class="auth-form__socials-title"> Kết nối với Google</span>
            </a>
          </div>
        </div>
    </div>
  </div> -->
</body>

</html>