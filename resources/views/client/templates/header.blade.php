
<div class="navigation navigation_two">
    <div class="container">
        <div class="logo">
            <a href="{{route('home')}}"><img class="img-responsive" src="{{asset('client/images/logo.png')}}" alt="">
            </a>
        </div>
        <div id="navigation" class="menu-wrap">
            <ul>
                <li><a href="{{route('home')}}">Trang Chủ</a></li>
                <li><a href="{{route('client_giang_vien')}}">Giáo Viên</a></li>
                <li class="has-sub"><a href="{{route('client_khoa_hoc')}}"> Khóa Học</a>
                    <ul>
                        <li><a href="">Danh Mục Khóa Học</a> </li>
                        <li><a href="{{route('client_khoa_hoc')}}">Tất Cả Khóa Học</a> </li>
                    </ul>
                </li>
                <li><a href="{{route('client_lien_he')}}">Liên Hệ</a></li>
                <li><a href="{{route('client_gioi_thieu')}}">Giới Thiệu</a></li>
            </ul>
        </div>
        <!-- End: navigation  -->
        <div class="header_sign">
           
            {{-- @if (Auth::user()) --}}
            <nav id="navigation">
                <ul>
                  <li><a href="#" style="color: red" aria-haspopup="true"></a>
                    <ul class="dropdown" aria-label="submenu">
                      <li><a href="#"></a></li>
                      <li> <a href="" class="dropdown-item">Sign out</a></li>
                      <li> <a href="" class="dropdown-item">Lịch sử đăng ký </a></li>
                      <li>
                        {{-- @if (Auth::user()->id_role!=2)
                        <a href="{{route('admin.user.index')}}" class="dropdown-item">Admin</a>
                        @endif --}}
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
              {{-- @else
              <a href="{{route('login')}}" class="more-link"> Sign in  </a>     
              @endif --}}
        </div>
        <!-- End: Sign in -->
    </div>
    <!--/ container -->
</div>