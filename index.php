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
    <header class="header" id="header">
      <?php include "header.php" ?>
    </header>
    <div class="banner">
      
    </div>
    <?php include "content.php"?>
    <?php include "footer.php" ?>
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
  <script>
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar-user-img").style.width = "138px";
    document.getElementById("navbar-user-img").style.height = "45px";
    document.getElementById("header").style.transform = "translateY(-100%)";
    // document.getElementById("header").style.transform = "translateY(0%)";
    document.getElementById("header").style.transition = "transform ease-in 0.5s";
  } else {
    document.getElementById("navbar-user-img").style.width = "180px";
    document.getElementById("navbar-user-img").style.height = "60px";
    document.getElementById("header").style.transform = "translateY(0%)";
    
  }
}
  </script>
</body>

</html>