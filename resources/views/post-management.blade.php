<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh sách bài đăng</title>
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
  <link rel="stylesheet" href="@{/css/management.css}">
</head>
<body>
<header class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="inner-head">
          <div class="inner-logo">
            <a href="{{route ('admin.home')}}">
              <img src="/image/logo.png" alt="logo">
            </a>
          </div>
          <div class="inner-menu">
            <ul class="menu">
              <li><a href="{{route('admin.home')}}" class="active-menu">Trang Chủ</a></li>
              <li><a href="{{route('user.management')}}">Quản Lí Người Dùng</a></li>
              <li><a href="{{route('post.management')}}">Quản Lí Bài Đăng</a></li>
              <li><a thref="{{route('comment.management')}}">Quản Lí Bình Luận</a></li>
            </ul>
          </div>
          <div class="user-dropdown">
            <div class="dropdown-toggle">
              <i class="fa-solid fa-user"></i>
              <span text="${email}"></span>
              <i class="fa-solid fa-chevron-down"></i>
            </div>
            <ul class="dropdown-menu">
              <li><a href="{{route('admin.profile')}}">Quản Lí Cá Nhân</a></li>
              <li><form action="/logout" method="post">
                <button type="submit">Đăng Xuất</button>
              </form></li>
            </ul>
          </div>
          <div class="inner-menu-mb">
            <div class="menu-mb-icon"><i class="fa-solid fa-bars"></i></div>
            <ul class="menu-mb">
              <li><a href="{{route('admin.home')}}" class="active-menu"><i class="fa-solid fa-house"></i>Trang Chủ</a></li>
              <li><a href="{{route('user.management')}}"><i class="fa-solid fa-house"></i>Quản Lí Người Dùng</a></li>
              <li><a href="{{route('post.management')}}"><i class="fa-solid fa-house"></i>Quản Lí Bài Đăng</a></li>
              <li><a href="{{route('comment.management')}}"><i class="fa-solid fa-house"></i>Quản Lí Bình Luận</a></li>
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
<div class="style-body" style="overflow-x: auto;">
  <h1>Danh sách bài đăng</h1>
  <table border="1">
    <thead>
    <tr>
      <th>Tiêu Đề</th>
      <th>Giá</th>
      <th>Địa Chỉ</th>
      <th>Miêu Tả</th>
      <th>Hình Ảnh</th>
      <th>Tiện Ích</th>
      <th>Ngày Đăng</th>
      <th>Người Đăng</th>
      <th>Tình Trạng</th>
      <th>Đánh Giá</th>
    </tr>
    </thead>
    <tbody>
    <tr ="post : ${posts}">
      <td text="${post.title}"></td>
      <td><span text="${#numbers.formatDecimal(post.price, 0, 'COMMA', 0, 'POINT')}"></span>VND</td>
      <td class="break-word">
        <a href="${post.location.link}" text="${post.location.address}" target="_blank"></a>
      </td>
      <td text="${post.description}"></td>
      <td>
        <ul>
          <li ="image : ${post.listImages}">
            <img src="@{'/' + ${image.url}}" alt="Image Description"
                 style="width:100px; height:auto;" />
          </li>
        </ul>
      </td>
      <td>
        <ul>
          <li ="amenity : ${post.listAmenities}" text="${amenity.name}">Amenity</li>
        </ul>
      </td>
      <td text="${#dates.format(post.created, 'dd/MM/yyyy HH:mm')}"></td>
      <td>
        <a href="mailto:${post.user.email}" text="${post.user.email}"></a>
      </td>
      <td>
        <form action="@{/admin/post-management/updateStatus}" method="post">
          <input type="hidden" th:name="postId" th:value="${post.id}" />
          <select name="approved" onchange="this.form.submit()">
            <option value="true" th:selected="${post.approved}">Đã Duyệt</option>
            <option value="false" th:selected="${!post.approved}">Chưa Duyệt</option>
          </select>
        </form>
      </td>
      <td text="${averageRating[post.id]}"></td>
      <td>
        <form action="@{/admin/post-management/{id}(id=${post.id})}" method="post" id="deleteForm">
          <input type="hidden" name="_method" value="delete">
          <div class="delete-button-wrapper">
            <button type="submit" class="label--1" style="background: none; border: none; cursor: pointer;"
                    onclick="return confirm('Bạn có chắc chắn muốn xóa bài đăng này không?')">
              <i class="fa-solid fa-trash-can"></i>
            </button>
          </div>
        </form>

      </td>
    </tr>
    </tbody>
  </table>
</div>
</body>
</html>
