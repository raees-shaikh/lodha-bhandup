<header>
    <div class="container">
        <div class="header-wrapper">
            <div class="header-left">
                <div class="header-logo">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="{{asset('frontend/images/prefer-logo.png')}}" alt="logo" class="img-fluid developer-logo-img dark-logo d-block">

                    </a>
                </div>
            </div>
            <div class="header-center">
                <div id="primary-menu" class="menu-wrapper">
                    <ul class="navbar-nav">
                        <li class="nav-item linkClass">
                            <a class="nav-link first" href=" {{route('index') . '#overview'}}">Overview</a>
                            <img src="{{asset('frontend/images/nav-icon.png')}}" alt="" class="d-none f-img">
                        </li>
                        <li class="nav-item linkClass2">
                            <a class="nav-link second" href=" {{route('index') . '#highlight'}}">Highlight</a>
                            <img src="{{asset('frontend/images/nav-icon.png')}}" alt="" class="d-none s-img">
                        </li>
                        <li class="nav-item linkClass3">
                            <a class="nav-link third" href="{{route('index') . '#amenities'}}">Amenities</a>
                            <img src="{{asset('frontend/images/nav-icon.png')}}" alt="" class="d-none t-img">
                        </li>
                        <li class="nav-item  linkClass4">
                            <a class="nav-link four" href="{{route('index') . '#price-list'}}">Price List</a>
                            <img src="{{asset('frontend/images/nav-icon.png')}}" alt="" class="d-none fo-img">
                        </li>
                        <li class="nav-item linkClass5 ">
                            <a class="nav-link five" href="{{route('index') . '#floor-plan'}} ">Floor Plan</a>
                            <img src="{{asset('frontend/images/nav-icon.png')}}" alt="" class="d-none fi-img">
                        </li>
                        <li class="nav-item  linkClass6">
                            <a class="nav-link six" href="{{route('index') . '#gallery'}}">Gallery</a>
                            <img src="{{asset('frontend/images/nav-icon.png')}}" alt="" class="d-none si-img">
                        </li>
                        <li class="nav-item  linkClass7">
                            <a class="nav-link seven" href="{{route('index') . '#location'}}">Location</a>
                            <img src="{{asset('frontend/images/nav-icon.png')}}" alt="" class="d-none se-img">
                        </li>
                        <li class="nav-item  linkClass8">
                            <a class="nav-link eight" href="{{route('index') . '#contact-us'}}">Contact Us</a>
                            <img src="{{asset('frontend/images/nav-icon.png')}}" alt="" class="d-none ei-img">
                        </li>
                        <li class="nav-item call_btn ">
                            <a class="nav-link" href="tel:919920454543">+91-9920454543</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="mobile-trigger">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-right">
                <div class="calling-content">
                    <a href="tel:919920454543" class="header_button pulse-button">
                        <img src="{{asset('frontend/images/icon/telephone14.png')}}">+91-9920454543</a>
                </div>
            </div>
        </div>
</div></header>
<!-- header section end here -->
