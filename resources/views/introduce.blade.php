<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu</title>
    <link rel="icon" type="image/x-icon" href="/image/android-chrome-512x512.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/about.css">
    <style>
        img {
            max-width: 100%;
            border-radius: 6px;
        }
    </style>
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
                            <li><a href="{{route('post')}}" class="active-menu" >Bài Đăng</a></li>
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
                            <li><a href="{{ Auth::check() ? (Auth::user()->role_id == 1 ? route('user.home') : (Auth::user()->role_id == 2 ? route('admin-home') : route('home'))) : route('home') }}"><i class="fa-solid fa-house"></i>Trang Chủ</a></li>
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
<main>
    <div class="about-intro">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <img src="https://tuoitredhdn.udn.vn/uploads/images/1(4).jpg" alt="" class="image">
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="inner-box">
                        <h2 class="title title-head">
                            Chúng tôi là ai ?
                        </h2>
                        <p class="desc">
                            Chúng tôi là sinh viên năm nhất của trường <strong style="font-weight: 600;">Đại Học
                            Công
                            Nghệ Thông Tin và Truyền Thông Việt Hàn</strong>. Đến từ lớp 23IT1 và hiện đang học
                            lớp
                            Thiết Kế Web 9 dưới sự hướng dẫn của thầy Đỗ Công Đức. Đây là trang web đầu tiên của
                            chúng
                            tôi, tập trung vào chủ đề tìm phòng trọ và căn hộ. Với mong muốn mang đến một nền tảng
                            tiện
                            ích và thân thiện cho người dùng, chúng tôi hy vọng trang web này sẽ giúp ích cho nhiều
                            người trong việc tìm kiếm nơi ở phù hợp và lý tưởng. Chúng tôi đã đầu tư nhiều tâm huyết
                            và
                            thời gian để xây dựng trang web này với mong muốn đem lại trải nghiệm tốt nhất cho người
                            dùng.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-intro">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="inner-box">
                        <h2 class="title title-head">
                            Web chúng tôi để làm gì ?
                        </h2>
                        <p class="desc">
                            Với sự phát triển đô thị và công nghệ, tình trạng thiếu chỗ ở ở các thành phố cũng như
                            tình
                            trạng lừa đảo qua các trang mạng ngày càng cao. Việc tìm kiếm một phòng trọ, căn hộ ưng
                            ý
                            trở nên khó khăn. Nắm bắt được điều này, trang web của chúng tôi cung cấp một nền tảng
                            trực
                            tuyến tiện lợi, uy tín, nơi bạn có thể dễ dàng tra cứu thông tin chi tiết và minh bạch
                            về
                            các phòng trọ đang cho thuê. Chúng tôi cam kết cập nhật thường xuyên và kiểm duyệt kỹ
                            lưỡng
                            để đảm bảo an toàn và chất lượng cho người dùng.
                            Và cho người dùng trải nghiệm tốt nhất.

                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <img src="https://tuoitredhdn.udn.vn/uploads/images/1(4).jpg" alt="" class="image">
                </div>
            </div>
        </div>
    </div>
    <div class="service-highlights">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-head">
                        <h2 class="title-head text-center">
                            Tại sao nên chọn website của chúng tôi
                        </h2>
                        <p class="desc"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="inner-box">
                        <h3 class="title">Vị trí tiện lợi</h3>
                        <div class="item-img" style="padding: 10px;">
                            <img src="/image/about-location.png" alt="" class="image">
                        </div>
                        <p class="desc">
                            Dễ dàng tìm kiếm nhà trọ gần các khu vực trung tâm, trường học, và khu công nghiệp. Vị
                            trí
                            đắc địa giúp bạn tiết kiệm thời gian và chi phí đi lại, tạo điều kiện thuận lợi cho công
                            việc và học tập hàng ngày.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="inner-box">
                        <h3 class="title">Giá cả phải chăng</h3>
                        <div class="item-img">
                            <img src="/image/about-price.png" alt="" class="image">
                        </div>
                        <p class="desc">
                            Chúng tôi cung cấp các tùy chọn nhà trọ với mức giá hợp lý, phù hợp với ngân sách của
                            sinh
                            viên và người lao động. Bạn có thể dễ dàng tìm thấy các phòng trọ chất lượng mà không lo
                            vượt quá khả năng tài chính của mình.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="inner-box">
                        <h3 class="title">Chất lượng và tiện nghi</h3>
                        <div class="item-img">
                            <img src="/image/about-danhgia.png" alt="" class="image">
                        </div>
                        <p class="desc">
                            Các nhà trọ đều được đánh giá cao về chất lượng, đảm bảo an ninh, sạch sẽ và đầy đủ tiện
                            nghi phục vụ cuộc sống hàng ngày. Chúng tôi cam kết cung cấp không gian sống thoải mái,
                            tiện
                            ích để bạn yên tâm sinh hoạt và học tập.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="inner-box">
                        <h3 class="title">Hỗ trợ nhanh chóng</h3>
                        <div class="item-img" style="padding: 10px;">
                            <img src="/image/about-customers.png" alt="" class="image">
                        </div>
                        <p class="desc">
                            Đội ngũ hỗ trợ của chúng tôi luôn sẵn sàng giải đáp mọi thắc mắc và giúp bạn tìm được
                            nhà
                            trọ ưng ý trong thời gian ngắn nhất. Với dịch vụ tận tâm và chuyên nghiệp, chúng tôi đảm
                            bảo
                            trải nghiệm tìm nhà trọ của bạn sẽ trở nên dễ dàng và hiệu quả.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="procedure">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-head">
                        <h2 class="title-head text-center">Quy trình tìm trọ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="inner-box">
                        <div class="img-item"><img src="/image/quy-trinh-1.png" alt="" class="image"></div>
                        <h3 class="title">Nhận yêu cầu và báo giá</h3>
                        <ul>
                            <li>Nhận yêu cầu từ các chủ nhà trọ</li>
                            <li>Phân tích yêu cầu và đề xuất gói dịch vụ phù hợp</li>
                            <li>Lập dự toán chi phí dịch vụ</li>
                            <li>Gửi báo giá chi tiết cho chủ nhà trọ</li>
                            <li>Chỉnh sửa báo giá theo phản hồi của chủ nhà trọ</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="inner-box">
                        <div class="img-item"><img src="/image/quytrinh-3.png" alt="" class="image"></div>
                        <h3 class="title">Kiểm tra kĩ càng</h3>
                        <ul>
                            <li>Đánh giá chất lượng và tình trạng nhà trọ</li>
                            <li>Kiểm tra các tiện ích và dịch vụ đi kèm</li>
                            <li>Phân tích vị trí và môi trường xung quanh</li>
                            <li>Xác minh pháp lý và giấy tờ liên quan</li>
                            <li>Lên kế hoạch kiểm tra định kỳ để đảm bảo chất lượng</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="inner-box">
                        <div class="img-item"><img src="/image/quy-trinh-2.png" alt="" class="image"></div>
                        <h3 class="title">Ký kết hợp đồng</h3>
                        <ul>
                            <li>Thống nhất các điều khoản hợp đồng</li>
                            <li>Soạn thảo hợp đồng chi tiết</li>
                            <li>Đàm phán và chỉnh sửa hợp đồng</li>
                            <li>Ký kết hợp đồng hợp tác</li>
                            <li>Lưu trữ hợp đồng và các tài liệu liên quan</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="inner-box">
                        <div class="img-item"><img src="/image/quytrinh-4.png" alt="" class="image"></div>
                        <h3 class="title">SEO</h3>
                        <ul>
                            <li>Phân tích từ khóa liên quan đến tìm kiếm nhà trọ</li>
                            <li>Tối ưu hóa nội dung và hình ảnh của nhà trọ trên website</li>
                            <li>Theo dõi và phân tích hiệu quả chiến dịch SEO</li>
                            <li>Điều chỉnh chiến lược SEO dựa trên dữ liệu thu thập</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Procedure -->
    <!-- Member -->
    <div class="member">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="inner-head">
                        <h2 class="title-head text-center">
                            Member for my team
                        </h2>
                        <p class="desc text-center">
                            Đây là những thành viên trong nhóm cùng nhau tạo nên web này
                        </p>
                    </div>
                </div>
            </div>
            <div class="row member-carousel">
                <div class="col-xl-3 col-lg-6 col-md-6 col-12 card">
                    <div class="inner-member">
                        <img src="/image/art1.jpg" alt="" class="avt">
                        <p class="name">Đặng Ngọc Thúy An</p>
                        <p class="job">Member</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12 card">
                    <div class="inner-member">
                        <img src="/image/art1.jpg" alt="" class="avt">
                        <p class="name">Nguyễn Quang Nhân</p>
                        <p class="job">Leader</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
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
</footer>
<script src="/js/header.js"></script>
<script src="/js/about.js"></script>
</body>
</html>
