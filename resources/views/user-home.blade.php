<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang của USER</title>
    <link rel="icon" type="image/x-icon" href="/image/android-chrome-512x512.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200"/>
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
                        <a href="{{route ('user.home')}}" >
                            <img src="/image/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="inner-menu">
                        <ul class="menu">
                            <li><a href="{{route ('user.home')}}" class="active-menu">Trang Chủ</a></li>
                            <li><a href="{{route ('introduce')}}" class="active-menu">Giới Thiệu</a></li>
                            <li><a href="{{route('post')}}" class="active-menu">Bài Đăng</a></li>
                            <li><a href="{{route ('contact')}}" class="active-menu">Liên Hệ</a></li>
                        </ul>
                    </div>
                    <div class="user-dropdown">
                        <div class="dropdown-toggle">
                            <i class="fa-solid fa-user"></i>
                            <span>{{ $user->full_name}}</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <ul class="dropdown-menu">
                            <li><a href="{{route ('user.profile')}}">Quản Lí Cá Nhân</a></li>
                            <li><a href="{{route ('logout')}}">Đăng Xuất</a></li>
                        </ul>
                    </div>

                    <div class="inner-menu-mb">
                        <div class="menu-mb-icon"><i class="fa-solid fa-bars"></i></div>
                        <ul class="menu-mb">
                            <li><a href="{{route ('user.home')}}" class="active-menu"><i class="fa-solid fa-house"></i>Trang Chủ</a></li>
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
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="list">
                    <div class="item " id="next">
                        <img src="/image/art1.jpg" alt="ảnh 1">
                        <div class="content">
                            <h3 class="title">Chúng tôi mang đến cho bạn</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/image/art2.jpg" alt="ảnh 2">
                        <div class="content">
                            <h3 class="title">Vị trí thuận tiện</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/image/art1.jpg" alt="ảnh 3">
                        <div class="content">
                            <h3 class="title">Giá cả hợp lý</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/image/art2.jpg" alt="ảnh 4">
                        <div class="content">
                            <h3 class="title">Chất lượng và tiện nghi</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="criteria">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-4 col-lg-12 col-12">
                <div class="inner-box">
                    <div class="inner-icon">
                        <i class="material-symbols-outlined">
                            distance
                        </i>
                    </div>
                    <h3 class="inner-title">
                        Vị trí
                    </h3>
                    <p class="inner-desc">
                        Vị trí tiện lợi, gần các trường đại học, trung tâm thành phố...
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-lg-12 col-12">
                <div class="inner-box">
                    <div class="inner-icon">
                        <i class="material-symbols-outlined">
                            savings
                        </i>
                    </div>
                    <h3 class="inner-title">
                        Giá cả
                    </h3>
                    <p class="inner-desc">
                        Đảm bảo giá cả phải chăng và phù hợp với mọi mức thu nhập
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-lg-12 col-12">
                <div class="inner-box">
                    <div class="inner-icon">
                        <i class="material-symbols-outlined">
                            in_home_mode
                        </i>
                    </div>
                    <h3 class="inner-title">
                        Chất lượng và tiện nghi
                    </h3>
                    <p class="inner-desc">
                        Đầy đủ tiện nghi và đảm bảo chất lượng tốt nhất cho khách hàng.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="intro">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-xl-6 col-12">
                    <img src="/image/intro.jpg" alt="" class="image m-img">
                </div>
                <div class="col-xl-6 col-12">
                    <div class="inner-main">
                        <h2 class="title">
                            Mục đích của website
                        </h2>
                        <p class="desc">
                            Với sự phát triển đô thị và công nghệ, tình trạng thiếu chỗ ở ở các thành phố cũng như
                            tình trạng lừa đảo qua các trang mạng ngày càng cao. Việc tìm kiếm một phòng trọ, căn hộ
                            ưng ý trở nên khó khăn. Nắm bắt được điều này, trang web của chúng tôi cung cấp một nền
                            tảng trực tuyến tiện lợi, uy tín, nơi bạn có thể dễ dàng tra cứu thông tin chi tiết và
                            minh bạch về các phòng trọ đang cho thuê...
                        </p>
                        <a href="{{route ('introduce')}}" class="action btn">Tìm hiểu thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="room-rent">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-head">
                    <h2>Bài Đăng</h2>
                </div>
            </div>
        </div>
        <div class="inner-body" >
            <div class="btn-l-room-1 btn-arrow"><i class="fa-solid fa-arrow-left"></i></div>
            <div class="row carousel-room-1" >
                @foreach ($posts as $post)
                <div class="card col-xl-4 col-lg-6 col-12">
                    <div class="inner-box">
                        @if ($post->listImages && $post->listImages->isNotEmpty())
                        <div class="inner-img" >
                            <img src="{{ asset('storage/' . $post->listImages[0]->url) }}" alt="Post Image" class="image"/>
                        </div>
                        @endif
                        <p class="inner-title text-center">{{ $post->title}}</p>
                        @if ($post->location && $post->location->link)
                        <div class="inner-location">
                            <a href="{{ $post->location->link }}" target="_blank" class="btn inner-location">
                                <i class="fa-solid fa-map-location"></i>
                                <p class="line-clamp" style="--line-clamp:1;">{{ $post->location->address }}</p>
                            </a>
                        </div>
                        @endif
                        <div class="inner-bot">
                            <p class="inner-price">
                                <span>{{ number_format($post->price, 0, ',', '.') }}</span> VND
                            </p>
                            <a href="{{ route('post.detail', ['id' => $post->id]) }}" class="btn">Xem Phòng</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="btn-r-room-1 btn-arrow"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <a href="{{route('post')}}" class="btn btn-seemore">Xem Thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="comments">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-head text-center">
                    <h2 class="inner-title">
                        Bình luận của khách hàng
                    </h2>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="row carousel-comments">
                @foreach($comments as $comment)
                <div class="card col-xl-4 col-lg-6 col-12" >
                    <div class="inner-box" style="height: 200px">
                        <h2>{{$user->full_name}}</h2>
                        <div class="comment-rating">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="{{ $i < $comment->rating ? 'fas fa-star' : 'far fa-star' }}"></i>
                            @endfor
                        </div>
                        <p class="inner-comment">{{$comment->content}}</p>
                        <a href="{{ route('post.detail', ['id' => $comment->post_id]) }}" class="btn">Xem Bình Luận</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="inner-btn">
                <div class="btn-r btn-arrow"><i class="fa-solid fa-arrow-right btn-right"></i></div>
                <div class="btn-l btn-arrow"><i class="fa-solid fa-arrow-left btn-left"></i></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Đăng Nhập</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p style="color: black;">Vui lòng đăng nhập để tiếp tục.</p>
                <a href="{{route('login')}}" class="btn btn-primary">Đăng Nhập</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
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
            </div>
            <div class="col-xl-3 col-md-3 col-lg-6 col-6">
                <div class="inner-box">
                    <h2>
                        TNNA
                    </h2>
                    <p>
                        <a href="{{route('user.home')}}>
                            Trang chủ
                        </a>
                    </p>
                    <p>
                        <a href="{{route ('introduce')}}">
                            Giới Thiệu
                        </a>
                    </p>
                    <p>
                        <a href="{{route('post')}}">
                            Bài Đăng
                        </a>
                    </p>
                    <p>
                        <a href="{{route('contact')}}">
                            Liên Hệ
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/bootstrap/jquery.slim.min.js"></script>
<script src="/bootstrap/bootstrap.bundle.min.js"></script>
<script src="/js/header.js"></script>
<script src="/js/slideShow.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
