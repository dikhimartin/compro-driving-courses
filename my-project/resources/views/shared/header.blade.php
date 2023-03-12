<!-- <div id="loading-area" class="loader1"></div> -->
<header class="site-header header header-style-1">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix onepage">
            <div class="container-fluid">
                <!-- website logo -->
                <div class="logo-header mostion logo-black">
                    <a href="/">
                        <img src="{{URL::asset('assets/images/logo-bina-drive-black.png')}}"" alt="">
                    </a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="nav navbar-nav nav-style">
                        @foreach (MenuList() as $key => $value)
                            @if (is_array($value))
                                {{-- Generate submenu markup if the value is an array --}}
                                <li class="{!! trim($__env->yieldContent('navActive')) == $key ? ' active' : '' !!} menu-item curent-menu-item">
                                    <a href="javascript:void(0)">{{ $value['about-us'] }}<i class="fas fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        @foreach ($value as $subKey => $subValue)
                                            <li><a href="{{ url('/' . $subKey) }}">{{ $subValue }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                {{-- Generate regular menu item markup --}}
                                <li class="{!! trim($__env->yieldContent('navActive')) == $key ? ' active' : '' !!} menu-item curent-menu-item"><a href="{{ url('/' . $key) }}">{{ $value }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>                

        </div>
    </div>
</header>

