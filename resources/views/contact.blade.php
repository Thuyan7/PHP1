<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liên Hệ</title>
  <link rel="icon" type="image/x-icon" href="/image/android-chrome-512x512.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/css/base.css">
  <link rel="stylesheet" href="/css/contact.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>

<header class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="inner-head">
          <div class="inner-logo">
              <a href="{{ Auth::check() ? (Auth::user()->role_id == 1 ? route('user.home') : (Auth::user()->role_id == 2 ? route('admin-home') : route('home'))) : route('home') }}">
              <img src="/image/logo.png" alt="logo">
            </a>
          </div>
          <div class="inner-menu">
            <ul class="menu">
                <li><a href="{{ Auth::check() ? (Auth::user()->role_id == 1 ? route('user.home') : (Auth::user()->role_id == 2 ? route('admin-home') : route('home'))) : route('home') }}" class="active-menu">Trang Chủ</a></li>
              <li><a href="{{route ('introduce')}}" class="active-menu">Giới Thiệu</a></li>
              <li><a href="{{route('post')}}" class="active-menu">Bài Đăng</a></li>
              <li><a href="{{route ('contact')}}" class="active-menu">Liên Hệ</a></li>
            </ul>
          </div>
            @if(Auth::check() && Auth::user()->role_id)
                <div class="user-dropdown">
                    <div class="dropdown-toggle">
                        <i class="fa-solid fa-user"></i>
                        <span>{{ Auth::user()->full_name ?? '' }}</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ Auth::user()->role_id == 1 ? route('user.profile') : (Auth::user()->role_id == 2 ? route('admin.profile') : '#') }}">
                                Quản Lí Cá Nhân
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}">Đăng Xuất</a>
                        </li>
                    </ul>
                </div>
            @endif
            <div class="inner-menu-mb">
            <div class="menu-mb-icon"><i class="fa-solid fa-bars"></i></div>
            <ul class="menu-mb">
                <li><a href="{{ Auth::check() ? (Auth::user()->role_id == 1 ? route('user.home') : (Auth::user()->role_id == 2 ? route('admin.home') : route('home'))) : route('home') }}"><i class="fa-solid fa-house"></i>Trang Chủ</a></li>
              <li><a href="{{route ('introduce')}}"><i class="fa-solid fa-house"></i>Giới Thiệu</a></li>
              <li><a href="{{route('post')}}"><i class="fa-solid fa-house"></i>Bài Đăng</a></li>
              <li><a href="{{route ('contact')}}"><i class="fa-solid fa-house"></i>Liên Hệ</a></li>
              <li class="item-action">
                <a href="{{route('login')}}">Đăng Nhập</a>
                <a href="{{route('logout')}}">Đăng Xuất</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="contact">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-sm-12">
        <div class="inner-contact">
          <h2>
            Trụ sở chính ở Đà Nẵng
          </h2>
          <div class="address">
            <h3>
              Công ty dịch vụ TNNA
            </h3>
            <p>
              Địa chỉ :
              <a href="https://www.google.com/maps/place/279+%C4%90.+Mai+%C4%90%C4%83ng+Ch%C6%A1n,+Ho%C3%A0+H%E1%BA%A3i,+Ng%C5%A9+H%C3%A0nh+S%C6%A1n,+%C4%90%C3%A0+N%E1%BA%B5ng+550000,+Vi%E1%BB%87t+Nam/@15.9902661,108.2439063,17z/data=!3m1!4b1!4m6!3m5!1s0x3142109909a5c113:0xec183e71a660c3b8!8m2!3d15.990261!4d108.2464866!16s%2Fg%2F11hd1zsth0?entry=ttu"
                 target="_blank">
                279 Mai Đăng Chơn - Ngũ Hành Sơn - Đà Nẵng
              </a>
            </p>
            <p>
              Email : <a href="mailto:contact@tnna.vn">contact@tnna.vn</a>
            </p>
            <p>
              Hotline : <a href="tel:0876338837">0876338837</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-sm-12">
        <div class="inner-form">
          <h2>
            Liên hệ
          </h2>
          <form action="" method="post" autocomplete="on">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <textarea name="content" class="form-control" id="content" placeholder="Nội dung" rows="8" maxlength="600" required></textarea>
            </div>
            <div class="form-group" style="text-align: center;">
              <button type="submit">
                Gửi đi
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="map">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245368.28264286026!2d107.91331347028394!3d16.071745991006676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0x1df0cb4b86727e06!2sDa%20Nang%2C%20Vietnam!5e0!3m2!1sen!2s!4v1717221496961!5m2!1sen!2s"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="inner-head text-center">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="inner-title">
                  Hãy gửi yêu cầu nếu bạn cần tư vấn
                </h2>
                <p class="inner-desc">
                  TNNA - Công ty hỗ trợ dịch vụ tìm kiếm Phòng trọ và Chung cư
                </p>
                <form action="">
                  <input type="text" class="form-control"
                         placeholder="Nhập số điện thoại của bạn để được tư vấn">
                  <button>Đăng kí</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-xl-6 col-md-6 col-lg-12 col-12">
        <div class="inner-box">
          <h2>
            Liên hệ
          </h2>
          <h3>
            Công Ty Dịch Vụ TNNA
          </h3>
          <p>
            <a href="https://www.google.com/maps/place/279+%C4%90.+Mai+%C4%90%C4%83ng+Ch%C6%A1n,+Ho%C3%A0+H%E1%BA%A3i,+Ng%C5%A9+H%C3%A0nh+S%C6%A1n,+%C4%90%C3%A0+N%E1%BA%B5ng+550000,+Vi%E1%BB%87t+Nam/@15.9902661,108.2439063,17z/data=!3m1!4b1!4m6!3m5!1s0x3142109909a5c113:0xec183e71a660c3b8!8m2!3d15.990261!4d108.2464866!16s%2Fg%2F11hd1zsth0?entry=ttu"
               target="_blank">
              Địa chỉ : 279 Mai Đăng Chơn - Ngũ Hành Sơn - Đà Nẵng
            </a>
          </p>
          <p>
            <a href="mailto:contact@tnna.vn">Email : contact@tnna.vn</a>
          </p>
          <p>
            <a href="tel:0876338837">Hotline : 0876338837</a>
          </p>
      </div>
        <div class="col-xl-3 col-md-3 col-lg-6 col-6">
          <div class="inner-box">
            <h2>
              TNNA
            </h2>
            <p>
              <a href="{{route ('user.home')}}" >
                Trang chủ
              </a>
            </p>
            <p>
              <a href="{{route ('introduce')}}">
                Giới thiệu
              </a>
            </p>
            <p>
              <a href="{{route('post')}}">
                Bài Đăng
              </a>
            </p>
            <p>
              <a href="{{route ('contact')}}">
                Liên hệ
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->
<script src="/bootstrap/jquery.slim.min.js"></script>
<script src="/bootstrap/bootstrap.bundle.min.js"></script>
<script src="/js/header.js"></script>

</body>

</html>
