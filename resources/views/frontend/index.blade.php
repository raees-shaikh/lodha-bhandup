@extends('frontend.layouts.app')
@section('title', ' ')
@section('content')
    <!-- Banner Section start here -->
    <div id="carouselExampleCaptions" class="carousel slide banner_section" data-ride="carousel">
        <div class="carousel-inner desk">
            {{-- <!-- <div class="carousel-item ">
                <img src="{{asset('frontend/images/banner/banner-4.webp')}}" class="d-block w-100" alt="...">
            </div> --> --}}
            <div class="carousel-item ">
                <img class="banner-img first" src="{{ asset('frontend/images/banner/slider2.png') }}" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item active">
                <img class="banner-img" src="{{ asset('frontend/images/banner/banner-2.webp ') }}" class="d-block w-100"
                    alt="...">
            </div>
            <!--
                                                                                                                                                                                                                                                                                                                                                <div class="carousel-item ">
                                                                                                                                                                                                                                                                                                                                                    <img src="{{ asset('frontend/images/banner/banner3.webp') }}" class="d-block w-100" alt="...">
                                                                                                                                                                                                                                                                                                                                                </div> -->
        </div>


        <div>
            <div class="banner_content">

                <div class="content_section">
                    <div class="inner-text pt-md-3 pt-2">
                        <!-- <h5 class="small_title">Welcome To</h5> -->
                        <h1 class="title">Lodha Bhandup</h1>
                        <h2 class="typo">2 & 3 BHK Apartment</h2>
                        <ul class="key_high">
                            <li><img src="{{ asset('frontend/images/green-check.png') }}"> <span> Exclusive Window for EOI
                                    Customer.</span> </li>
                            <li><img src="{{ asset('frontend/images/green-check.png') }}"> <span> Premium Inventory
                                    Choice.</span> </li>
                            <li><img src="{{ asset('frontend/images/green-check.png') }}"> <span> Early Access to show
                                    residence 7 days before the launch. </span> </li>
                        </ul>
                        <div class="banner_btn">
                            <button type="button" data-toggle="modal" data-target="#exampleModal1" class="custom-btn"> Know
                                More
                                {{-- <i class="icon-next"></i> --}}
                                <img src="{{ asset('frontend/images/greater.png') }}" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bottom_content ">
            <div class="bottom_wrap">
                <div class="item_box">
                    <div class="item col-lg-3 col-md-5  col-12 ">
                        <div class="inner">
                            <p>
                                <span class="key">Starting Price </span>
                                <span> ₹ 1.91 Cr* </span>
                            </p>
                        </div>
                    </div>


                    <div class="item col-lg-3 col-md-5 col-12 mx-md-4">
                        <div class="inner">
                            <p>
                                <span class="key"> Status</span>
                                <span> New Launch</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right_form">
            <div class=" form_sec">
                <h2 class="form_title">Book A Site Visit !</h2>
                <div class="form_section">
                    <form method="post" action="{{ route('frontend.contact.submit') }}">
                        @csrf
                        <input type="hidden" name="country_code" id="countryCode"
                            value="{{ session('page_name') == 'Slider' ? old('country_code') : '' }}">
                        <input value="Slider" type="hidden" name="page_name">
                        <input type="hidden" name="recaptcha_response" id="recaptchaResponseSlider">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                id="qSenderName2" minlength="3" maxlength="30"
                                value="{{ session('page_name') == 'Slider' ? old('name') : '' }}" required>
                            @if ($errors->has('name') && session('page_name') == 'Slider')
                                <div class="text-danger  mb-3">
                                    <p> {{ $errors->first('name') }} </p>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Email" name="email"
                                id="qEmailID2" minlength="5" maxlength="40"
                                value="{{ session('page_name') == 'Slider' ? old('email') : '' }}" required>
                            @if ($errors->has('email') && session('page_name') == 'Slider')
                                <div class="text-danger  mb-3">
                                    <p> {{ $errors->first('email') }} </p>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input class="form-control phone-input" placeholder="Enter Mobile Number" name="phone"
                                id="qMobileNo2" minlength="10" maxlength="10"
                                value="{{ session('page_name') == 'Slider' ? old('phone') : '' }}" required>
                            @if ($errors->has('phone') && session('page_name') == 'Slider')
                                <div class="text-danger  mb-3">
                                    <p> {{ $errors->first('phone') }} </p>
                                </div>
                            @endif
                        </div>
                        <div class="form-group ">
                            <select name="configuration_required" id="" class="form-select form-control pt-2"
                                required>
                                <option value="">Select Configuration </option>
                                <option value="2 bhk" @if (session('page_name') == 'Slider' && old('configuration_required') == '2 bhk') selected @endif>2
                                    BHK</option>
                                <option value="2.5 bhk" @if (session('page_name') == 'Slider' && old('configuration_required') == '2.5 bhk') selected @endif>
                                    2.5 BHK
                                </option>
                                <option value="3 bhk" @if (session('page_name') == 'Slider' && old('configuration_required') == '3 bhk') selected @endif>3
                                    BHK</option>
                            </select>
                            @if ($errors->has('configuration_required') && session('page_name') == 'Slider')
                                <div class="text-danger  mb-3">
                                    <p> {{ $errors->first('configuration_required') }} </p>
                                </div>
                            @endif
                        </div>
                        @if ($errors->has('recaptcha_response') && session('page_name') == 'Slider')
                            <div class="text-danger  mb-3">
                                <p> {{ $errors->first('recaptcha_response') }} </p>
                            </div>
                        @endif
                        <div class="form-group">
                            <button class="btn main_button" id="">Submit Now
                            </button>
                        </div>
                        <div class="inp-box" style="display: flex;align-items: flex-start;">
                            <input type="checkbox" checked="" disabled name="confirmation">
                            <p class="inp-txt" style="margin-left: 5px; font-size: 9px; color: #000;"> I give my consent
                                to RERA-authorized real estate agent to Call, SMS, Email or WhatsApp me about the products
                                and offers.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="carousel_btns">
            {{-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <img src="{{asset('frontend/images/icon/left-arrow.png')}}" alt="" class="img-fluid">
            </button> --}}

            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                data-slide="next">
                <img src="{{ asset('frontend/images/right-arrow.png') }}" alt="" class="img-fluid">
            </button>
        </div>
        <!-- <div class="overlay"></div> -->
    </div>
    <!-- End banner section -->

    {{-- <!-- <div id="carouselExampleCaptions1" class="carousel slide" data-ride="carousel" style="padding:5px;">
        <ul class="carousel-indicators">
            <li data-target="#carouselExampleCaptions1" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions1" data-slide-to="1"></li>
         </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/images/strip/Brigade-Insignia-dsk.jpg')}}" data-toggle="modal" data-target="#onload" class="d-view img-fluid" alt="">
                <img src="{{asset('frontend/images/strip/brgade-insignia-mob.jpg')}}" data-toggle="modal" data-target="#onload" class="m-view img-fluid" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{asset('frontend/images/strip/m3m-altitude-dsk.webp')}}" data-toggle="modal" data-target="#onload" class="d-view img-fluid" alt="">
                <img src="{{asset('frontend/images/strip/m3m-altitude-mob.webp')}}" data-toggle="modal" data-target="#onload" class="m-view img-fluid" alt="">
            </div>
        </div>
    </div> --> --}}

    {{-- <!-- <section class="strip_section">
        <img src="{{asset('frontend/images/strip/m3m-altitude-dsk.webp')}}" data-toggle="modal" data-target="#onload" class="d-view img-fluid" alt="">
        <img src="{{asset('frontend/images/strip/m3m-altitude-mob.webp')}}" data-toggle="modal" data-target="#onload" class="m-view img-fluid" alt="">
    </section> --> --}}

    <!-- overview section start here -->
    <div class="overview ptb" id="overview" data-name="Overview">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="img_section">
                        <img class="first_img" src="{{ asset('frontend/images/overview.png') }}">

                        <div class="second_img">
                            <img src="{{ asset('frontend/images/about-img.webp') }}">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content_section">
                        <div class="title_section">
                            <h4 class="pro_title">Overview</h4>
                            <h3 class="title">Building Dreams, Creating Homes: Our Story</h3>
                        </div>

                        <p>Lodha Bhandup , Mumbai is an upcoming residential apartment project by Lodha Group, one of
                            India's most renowned real estate developers. This project is in Bhandup, along the prime LBS
                            Road, Bhandup, Mumbai. It has modern homes and great facilities for families and individuals.
                            The project has big apartments with 2, and 3 BHK. They're made to give people lots of space and
                            comfort. Every apartment is carefully designed to let in lot.</p>


                        <div class="banner_btn text-md-left text-center">
                            <button type="button" data-toggle="modal" data-target="#exampleModal1"> Know More
                                <i class="icon-next"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- overview section end here -->

    <!-- highlight section start here -->

    <div class="highlight_section ptb" id="highlight" data-name="Highlight">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pb-lg-md">
                    <div class="content_section">
                        <div class="title_section">
                            <h4 class="pro_title">Highlight</h4>
                            <h3 class="title">Elevating Properties: Our Spotlight Features</h3>
                        </div>
                        <ul class="highlighted-list">
                            <li> <span class="number">01</span>
                                <span class="highlight_point">50+ Handpicked Amenities</span>
                            </li>
                            <li> <span class="number">02</span>
                                <span class="highlight_point">Lavish Clubhouse With Premium Amenities</span>
                            </li>

                            <li> <span class="number">03</span>
                                <span class="highlight_point">Dedicated 1 Acre Mother Earth</span>
                            </li>

                            <li> <span class="number">04</span>
                                <span class="highlight_point">Community Features And Quality Of Living</span>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image_section">
                        <img src="{{ asset('frontend/images/highlight.png') }}">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- highlight section ends here -->

    <!-- amenities section start here -->
    <div class="amenities_section ptb" id="amenities" data-name="Amenities">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image_section">
                        <img src="{{ asset('frontend/images/amenities-new.png') }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content_section">
                        <div class="title_section">
                            <h4 class="pro_title">Amenities</h4>
                            <h3 class="title">Elevated Living: Unparalleled Amenities <br> For Every Lifestyle</h3>
                        </div>
                        <div class="outer">
                            <div class="amenities_wrapper">
                                <div class="item">
                                    <div class="wrap">
                                        <div class="title">
                                            <h2>Indoor Kids’ Play Area</h2>
                                            <p>Step into a world of imagination and exploration within the dedicated
                                                indoor kids' play area.
                                            </p>
                                        </div>
                                        <div class="image_wrapper">
                                            <img src="{{ asset('frontend/images/amenities/a1.webp') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="wrap">
                                        <div class="title">
                                            <h2>Kids Pool</h2>
                                            <p>Our kids' pool isn't just for cooling off—it's a lively hub where
                                                children socialize, build water confidence, and make cherished family
                                                memories.
                                            </p>
                                        </div>
                                        <div class="image_wrapper">
                                            <img src="{{ asset('frontend/images/amenities/a2.webp') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="wrap">
                                        <div class="title">
                                            <h2>Flower Garden</h2>
                                            <p>Unleash your inner gardener and craft a breathtaking bloom haven. Delight in
                                                a palette of vibrant colors and enchanting scents all season long.
                                            </p>
                                        </div>
                                        <div class="image_wrapper">
                                            <img src="{{ asset('frontend/images/amenities/flower-garden.webp') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="wrap">
                                        <div class="title">
                                            <h2> Gym</h2>
                                            <p>Our gym is equipped with top-of-the-line exercise machines and equipment
                                                to accommodate various workout preferences and fitness levels.
                                            </p>
                                        </div>
                                        <div class="image_wrapper">
                                            <img src="{{ asset('frontend/images/amenities/a4.webp') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="wrap">
                                        <div class="title">
                                            <h2>Badminton Court</h2>
                                            <p>Smash your limits on the court where every rally counts. Experience the
                                                thrill, precision, and speed of badminton like never before.
                                            </p>
                                        </div>
                                        <div class="image_wrapper">
                                            <img src="{{ asset('frontend/images/amenities/badminton-court.webp') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="wrap">
                                        <div class="title">
                                            <h2>Spa</h2>
                                            <p>Enjoy panoramic views of lush greenery or serene waterfronts, creating an
                                                ambiance of tranquility that soothes the soul.
                                            </p>
                                        </div>
                                        <div class="image_wrapper">
                                            <img src="{{ asset('frontend/images/amenities/a6.webp') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- amenities section ends here -->

    <!-- price section start here -->
    <div class="price_section ptb" id="price-list" data-name="Price List" style="text-align: center;">
        <div class="container">
            <div class="title_section">
                <h4 class="pro_title">Price List</h4>
                <h3 class="title">Unlock The Door To Affordable Luxury</h3>
            </div>
            <div class="row price_inner" style="justify-content: center;">
                <div class="col-lg-4 col-md-6">
                    <div class="item_wrap pt-3">
                        <img src="{{ asset('frontend/images/card.png') }}" alt="" class="w-100 pb-3">
                        <div class="title">
                            <h3>2 BHK </h3>
                        </div>
                        <div class="price">
                            <h2>₹ 1.91 Cr* </h2>
                        </div>
                        <div class="size">
                            <p>Size : 775 - 804 Sq.Ft.</p>
                            <!-- <p>Type : Apartment</p> -->
                        </div>
                        <div class="banner_btn price_btn">
                            <button type="button" data-toggle="modal" data-target="#exampleModal1"> Know More
                                <i class="icon-next"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item_wrap pt-3">
                        <img src="{{ asset('frontend/images/card.png') }}" alt="" class="w-100 pb-3">
                        <div class="title">
                            <h3>2 BHK + Study</h3>
                        </div>
                        <div class="price">
                            <h2>₹ 2.26 Cr* </h2>
                        </div>
                        <div class="size">
                            <p>Size : 890 Sq.Ft.</p>
                            <!-- <p>Type : Apartment</p> -->
                        </div>
                        <div class="banner_btn price_btn">
                            <button type="button" data-toggle="modal" data-target="#exampleModal1"> Know More
                                <i class="icon-next"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item_wrap pt-3">
                        <img src="{{ asset('frontend/images/card.png') }}" alt="" class="w-100 pb-3">
                        <div class="title">
                            <h3>3 BHK</h3>
                        </div>
                        <div class="price">
                            <h2>₹ 2.69 Cr*</h2>
                        </div>
                        <div class="size">
                            <p>Size : 1045 - 1075 Sq.Ft.</p>
                            <!-- <p>Type : Apartment</p> -->
                        </div>
                        <div class="banner_btn price_btn">
                            <button type="button" data-toggle="modal" data-target="#exampleModal1"> Know More
                                <i class="icon-next"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- price section ends here -->

    <!-- floorplan section start here -->
    <div class="floor_plan ptb" id="floor-plan" data-name="Floor Plan" style="text-align: center;">
        <div class="container">
            <div class="title_section">
                <h4 class="pro_title">Floor Plan</h4>
                <h3 class="title">Choose Your Perfect Plan</h3>
            </div>
            <div class="row" style="justify-content: center;">
                <div class="col-lg-4 col-md-6">
                    <div class="item_wrap">
                        <div class="img_sec" style="position: relative;">
                            <!-- <a href="frontend/images/floor-plan/masterplan.webp" class="with-caption image-link" title="Floor Plan"> -->
                            <img src="{{ asset('frontend/images/floor-plan/masterplan.webp') }}"
                                style="filter: blur(5px);">
                            <!-- </a> -->
                            <button class="title"
                                style="position: absolute; top: 50%;left: 50%; transform: translate(-50%, -50%); border: 0;"
                                data-toggle="modal" data-target="#exampleModal1">View Plan</button>
                        </div>
                        <h4 class="title">Master Plan</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item_wrap">
                        <div class="img_sec" style="position: relative;">
                            <!-- <a href="frontend/images/floor-plan/floorplan.webp" class="with-caption image-link" title="Floor Plan"> -->
                            <img src="{{ asset('frontend/images/floor-plan/floorplan.webp') }}"
                                style="filter: blur(5px);">
                            <button class="title"
                                style="position: absolute; top: 50%;left: 50%; transform: translate(-50%, -50%); border: 0;"
                                data-toggle="modal" data-target="#exampleModal1">View Plan</button>
                            <!-- </a> -->
                        </div>
                        <h4 class="title">2 BHK</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item_wrap">
                        <div class="img_sec" style="position: relative;">
                            <!-- <a href="frontend/images/floor-plan/floorplan.webp" class="with-caption image-link" title="Floor Plan"> -->
                            <img src="{{ asset('frontend/images/floor-plan/floorplan.webp') }}"
                                style="filter: blur(5px);">
                            <button class="title"
                                style="position: absolute; top: 50%;left: 50%; transform: translate(-50%, -50%); border: 0;"
                                data-toggle="modal" data-target="#exampleModal1">View Plan</button>
                            <!-- </a> -->
                        </div>
                        <h4 class="title">3 BHK</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- floorplan section ends here -->

    <div class="gallery_section ptb pb-0" id="gallery">
        <div class="container">
            <div class="title_section">
                <h4 class="pro_title">Gallery </h4>
                <h3 class="title">Discover Your Dream Home: Explore Our Stunning Gallery</h3>
            </div>
            <div class="row justify-content-center" id="lightgallery">
                <div class="col-lg-4 col-sm-6">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/g1.webp" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/g1-sm.webp') }}">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/g4.webp" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/g4-sm.webp') }}">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/g3.webp" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/g3-sm.webp') }}">
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/bedroom.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/bedroom.png') }}">
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/courtyard.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/courtyard.png') }}">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/dressing.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/dressing.png') }}">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/seating.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/seating.png') }}">
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/building-view.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/building-view.png') }}">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/view.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/view.png') }}">
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6 toggle-sec">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/front.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/front.png') }}">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 toggle-sec">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/gallery.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/gallery.png') }}">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 toggle-sec">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/outdoor.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/outdoor.png') }}">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 toggle-sec">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/roaming.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/roaming.png') }}">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 toggle-sec">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/sereneplace.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/sereneplace.png') }}">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 toggle-sec">
                    <div class="galler_item">
                        <a href="frontend/images/gallery/living.png" class="w-100">
                            <img src="{{ asset('frontend/images/gallery/living.png') }}">
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <div class="banner_btn text-center mb-4">
            <button type="button" class="load-more-outer"><span class="load-more"> Show More</span>
                <i class="icon-next"></i>
            </button>

        </div>

        <div class="location_section ptb" id="location">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image_section">
                            <!-- <a href="frontend/images/location-map.webp" class="with-caption image-link" title="Floor Plan"> -->
                            <img src="{{ asset('frontend/images/location-map.webp') }}" style="filter: blur(5px);">
                            <button class="title"
                                style="position: absolute; top: 50%;left: 50%; transform: translate(-50%, -50%); border: 0;"
                                data-toggle="modal" data-target="#exampleModal1">View Map</button>
                            <!-- </a> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content_wrap">
                            <div class="title_section pb-lg-2 pb-3">
                                <h4 class="pro_title">Location </h4>
                                <h3 class="title">Perfectly Positioned: Discover Our Ideal Locations</h3>
                            </div>
                            <div class="content_section">
                                <div class="accordion_Sec " id="accordion">
                                    <div class="card ">
                                        <div class="card-header" id="faqHeading-1">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1"
                                                data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                                <img src="{{ asset('frontend/images/icon/road.png') }}">5 Min : Eastern
                                                Express Highway
                                            </h5>
                                        </div>
                                        <!-- <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1"
                                                                                                                                                                                                                                                                                                                                                                            data-parent="#accordion">
                                                                                                                                                                                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                                                                                                                                                                                <p> <span>Manipal hospital</span> <span class="time"> 3 Kms </span></p>
                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="faqHeading-2">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                                                data-aria-expanded="true" data-aria-controls="faqCollapse-2">
                                                <img src="{{ asset('frontend/images/icon/train.png') }}">2 Min : Mulund
                                                Railway Station
                                            </h5>
                                        </div>
                                        <!-- <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                                                                                                                                                                                                                                                                                                                                                                            data-parent="#accordion">
                                                                                                                                                                                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                                                                                                                                                                                <p> <span>Yelahanka Railway</span> <span class="time">2 Kms </span> </p>
                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-2">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                                                data-aria-expanded="true" data-aria-controls="faqCollapse-2">
                                                <img src="{{ asset('frontend/images/icon/school.png') }}">5 Min : Orchids
                                                The
                                                International School
                                            </h5>
                                        </div>
                                        <!-- <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                                                                                                                                                                                                                                                                                                                                                                            data-parent="#accordion">
                                                                                                                                                                                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                                                                                                                                                                                <p> <span>Yelahanka Railway</span> <span class="time">2 Kms </span> </p>
                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-2">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                                                data-aria-expanded="true" data-aria-controls="faqCollapse-2">
                                                <img src="{{ asset('frontend/images/icon/school.png') }}">10 Min : NES
                                                International School
                                            </h5>
                                        </div>
                                        <!-- <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                                                                                                                                                                                                                                                                                                                                                                            data-parent="#accordion">
                                                                                                                                                                                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                                                                                                                                                                                <p> <span>Yelahanka Railway</span> <span class="time">2 Kms </span> </p>
                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-2">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                                                data-aria-expanded="true" data-aria-controls="faqCollapse-2">
                                                <img src="{{ asset('frontend/images/icon/hospital.png') }}">10 Min :
                                                Fortis
                                                Hospital
                                            </h5>
                                        </div>
                                        <!-- <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                                                                                                                                                                                                                                                                                                                                                                            data-parent="#accordion">
                                                                                                                                                                                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                                                                                                                                                                                <p> <span>Yelahanka Railway</span> <span class="time">2 Kms </span> </p>
                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                        </div> -->
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="contact_section ptb" id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="left_sec col-lg-6">
                        <div class="content">
                            <div class="title_section about-developer">
                                <h4 class="pro_title">About Developer </h4>
                                <!-- <h3 class="title">M3M India</h3> -->
                            </div>
                            <p>At Lodha, our passion is to create landmarks that meet global standards, epitomise the values
                                of
                                our family, and are built on a legacy of trust spanning four decades. We are guided by our
                                vision of ‘‘Building a Better Life’’. Lodha enables and transforms you to be a better
                                version of
                                yourself by maximising your potential and leading a flourished life.
                            </p>
                            <p>All our developments deliver the highest level of design and craftsmanship, uncompromising
                                quality, unparalleled service – putting Lodha developments in the league of the world’s
                                finest.
                                Our homes are designed to enable more productivity with amenities designed and curated to
                                equip
                                with opportunity! Be it green/open spaces designed to live a healthier and fuller life or
                                gentry
                                to match like-mindedness, banquets and clubhouses to network or striking the right chord
                                with
                                the right people, Lodha ensures that your next biggest milestone is within reach.</p>
                        </div>
                    </div>

                    <div class="footer_form right_form col-lg-6 ">
                        <div class=" form_sec">
                            <h2 class="form_title">Keep In Touch</h2>
                            <div class="form_section">
                                <form method="post" action="{{ route('frontend.contact.submit') }}">
                                    @csrf
                                    <input type="hidden" name="country_code" id="countryCode"
                                        value="{{ session('page_name') == 'Bottom' ? old('country_code') : '' }}">
                                    <input type="hidden" value="Bottom" name="page_name">
                                    <input type="hidden" name="recaptcha_response" id="recaptchaResponseBottom">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Name"
                                            name="name" id="qSenderName3" minlength="3" maxlength="30"
                                            value="{{ session('page_name') == 'Bottom' ? old('name') : '' }}" required>
                                        @if ($errors->has('name') && session('page_name') == 'Bottom')
                                            <div class="text-danger  mb-3">
                                                <p> {{ $errors->first('name') }} </p>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter Email"
                                            name="email" id="qEmailID3" minlength="5" maxlength="40"
                                            value="{{ session('page_name') == 'Bottom' ? old('email') : '' }}" required>
                                        @if ($errors->has('email') && session('page_name') == 'Bottom')
                                            <div class="text-danger  mb-3">
                                                <p> {{ $errors->first('email') }} </p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control phone-input" placeholder="Enter Mobile Number"
                                            name="phone" id="qMobileNo3" minlength="10" maxlength="10"
                                            value="{{ session('page_name') == 'Bottom' ? old('phone') : '' }}" required>
                                        @if ($errors->has('phone') && session('page_name') == 'Bottom')
                                            <div class="text-danger  mb-3">
                                                <p> {{ $errors->first('phone') }} </p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <select name="configuration_required" id=""
                                            class="form-select form-control pt-2 Bottom keep-in-touch" required>
                                            <option value="">Select Configuration </option>
                                            <option value="2 bhk" @if (session('page_name') == 'Bottom' && old('configuration_required') == '2 bhk') selected @endif>2
                                                BHK</option>
                                            <option value="2.5 bhk" @if (session('page_name') == 'Bottom' && old('configuration_required') == '2.5 bhk') selected @endif>
                                                2.5
                                                BHK</option>
                                            <option value="3 bhk" @if (session('page_name') == 'Bottom' && old('configuration_required') == '3 bhk') selected @endif>3
                                                BHK</option>
                                        </select>
                                        @if ($errors->has('configuration_required') && session('page_name') == 'Bottom')
                                            <div class="text-danger  mb-3">
                                                <p> {{ $errors->first('configuration_required') }} </p>
                                            </div>
                                        @endif
                                    </div>

                                    @if ($errors->has('recaptcha_response') && session('page_name') == 'Bottom')
                                        <div class="text-danger  mb-3">
                                            <p> {{ $errors->first('recaptcha_response') }} </p>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <button class="btn main_button" type="submit">Submit Now </button>
                                    </div>
                                </form>
                                <div class="inp-box" style="display: flex;align-items: flex-start;">
                                    <input type="checkbox" checked="" disabled name="confirmation">
                                    <p class="inp-txt" style="margin-left: 5px; font-size: 9px; color: #fbe486;"> I give
                                        my consent to RERA-authorized real estate agent to Call, SMS, Email or WhatsApp me
                                        about the products and offers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Lodha Bhandup</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form_section">
                            <form action="{{ route('frontend.contact.submit') }}" method="post">
                                @csrf
                                <input type="hidden" name="country_code" id="countryCode"
                                    value="{{ session('page_name') == 'Pop-Up' ? old('country_code') : '' }}">
                                <input type="hidden" name="page_name" value="Pop-Up">
                                <input type="hidden" name="recaptcha_response" id="recaptchaResponsePopUp2">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                        id="qSenderName1" minlength="3" maxlength="30"
                                        value="{{ session('page_name') == 'Pop-Up' ? old('name') : '' }}" required>
                                    @if ($errors->has('name') && session('page_name') == 'Pop-Up')
                                        <div class="text-danger  mb-3">
                                            <p> {{ $errors->first('name') }} </p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email"
                                        id="qEmailID1" minlength="5" maxlength="40"
                                        value="{{ session('page_name') == 'Pop-Up' ? old('email') : '' }}" required>
                                    @if ($errors->has('email') && session('page_name') == 'Pop-Up')
                                        <div class="text-danger  mb-3">
                                            <p> {{ $errors->first('email') }} </p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input class="form-control phone-input" placeholder="Enter Mobile Number"
                                        name="phone" id="qMobileNo1" minlength="10" maxlength="10"
                                        value="{{ session('page_name') == 'Pop-Up' ? old('phone') : '' }}" required>
                                    @if ($errors->has('phone') && session('page_name') == 'Pop-Up')
                                        <div class="text-danger  mb-3">
                                            <p> {{ $errors->first('phone') }} </p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <select name="configuration_required" id=""
                                        class="form-select form-control pt-1 drodown-input" required>
                                        <option value="">Select Configuration </option>
                                        <option value="2 bhk"
                                            {{ old('configuration_required') == '2 bhk' ? 'selected' : '' }}>2 BHK
                                        </option>
                                        <option value="2.5 bhk"
                                            {{ old('configuration_required') == '2.5 bhk' ? 'selected' : '' }}>2.5
                                            BHK</option>
                                        <option value="3 bhk"
                                            {{ old('configuration_required') == '3 bhk' ? 'selected' : '' }}>3 BHK
                                        </option>
                                    </select>
                                    @if ($errors->has('configuration_required') && session('page_name') == 'Pop-Up')
                                        <div class="text-danger  mb-3">
                                            <p> {{ $errors->first('configuration_required') }} </p>
                                        </div>
                                    @endif
                                </div>
                                @if ($errors->has('recaptcha_response') && session('page_name') == 'Pop-Up')
                                    <div class="text-danger  mb-3">
                                        <p> {{ $errors->first('recaptcha_response') }} </p>
                                    </div>
                                @endif
                                <button class="btn dark_btn rounded submit_btn main_button">Submit Now
                                </button>

                                <div class="inp-box">
                                    <input type="checkbox" checked="" disabled>
                                    <p class="inp-txt" style="margin-left: 5px; color: #000;"> I give my consent to
                                        RERA-authorized real estate agent to Call, SMS, Email or WhatsApp me about the
                                        products and offers.</p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('js')
        <script>
            var AgentInfo = {
                "vAgentID": "4313",
                "vProject": "Lodha Bhandup Mumbai",
                "vURL": "http://preferred-partners.co.in/lodha/lodha-mumbai/lodha-bhandup/",
                "thankspageurl": "http://preferred-partners.co.in/lodha/lodha-mumbai/lodha-bhandup/thanks.htm",
            };
            $(document).ready(function() {

                $('.toggle-sec').addClass('d-none');
                $('.load-more').click(function() {
                    $('.toggle-sec').toggleClass('d-block');
                    if (this.innerHTML == "Show Less") {
                        this.innerHTML = "Show More"
                    } else {
                        this.innerHTML = "Show Less"
                    }
                });

                $('.phone-input').each(function() {
                    const input = this;
                    const output = $(this).siblings(".output");
                    const countryCodeInput = $(this).closest('form').find('#countryCode');

                    const iti = window.intlTelInput(input, {
                        allowDropdown: true,
                        separateDialCode: true,
                        initialCountry: 'auto',
                        geoIpLookup: callback => {
                            fetch("https://ipapi.co/json")
                                .then(res => res.json())
                                .then(data => callback(data.country_code))
                                .catch(() => callback("us"));
                        },
                        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js"
                    });

                    if (countryCodeInput.length > 0 && countryCodeInput.val()) {
                        const countryData = intlTelInputGlobals.getCountryData().find(country => country
                            .dialCode === countryCodeInput.val());
                        if (countryData) {
                            iti.setCountry(countryData.iso2);
                        }
                    }

                    const oldValue = $(input).val();
                    console.log("oldValue : ", oldValue);

                    if (oldValue) {
                        iti.setNumber(oldValue); // Set number including formatting
                    }

                    const handleChange = () => {
                        if (input.value && countryCodeInput.length > 0) {
                            // Get the dial code and update the hidden country_code input
                            const countryCode = iti.getSelectedCountryData().dialCode;
                            countryCodeInput.val(countryCode);
                        }
                    };

                    // listen to "keyup", but also "change" to update when the user selects a country
                    $(input).on('change keyup', handleChange);

                    $(input).on('countrychange', function() {
                        if (countryCodeInput.length > 0) {
                            const countryCode = iti.getSelectedCountryData().dialCode;
                            countryCodeInput.val(countryCode);
                        }
                    });
                });
            });
        </script>

        <script
            src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render={{ config('app.google_captcha_site_key') }}"
            async defer></script>
        <script>
            var onloadCallback = function() {
                // alert('hell')
                grecaptcha.ready(function() {
                    grecaptcha.execute('{{ config('app.google_captcha_site_key') }}', {
                        action: 'submit'
                    }).then(function(token) {
                        var recaptchaResponseBottom = document.getElementById(
                            'recaptchaResponseBottom');
                        var recaptchaResponseSlider = document.getElementById(
                            'recaptchaResponseSlider');
                        var recaptchaResponsePopUp2 = document.getElementById(
                            'recaptchaResponsePopUp2');
                        var recaptchaResponsePopUp = document.getElementById(
                            'recaptchaResponsePopUp');

                        if (recaptchaResponseBottom) {
                            recaptchaResponseBottom.value = token;
                        }

                        if (recaptchaResponseSlider) {
                            recaptchaResponseSlider.value = token;
                        }

                        if (recaptchaResponsePopUp) {
                            recaptchaResponsePopUp.value = token;
                        }

                        if (recaptchaResponsePopUp2) {
                            recaptchaResponsePopUp2.value = token;
                        }
                    })
                })
            }
        </script>

        <script>
            $(document).ready(function() {
                @if (count($errors) > 0)
                    @if (session('page_name') == 'modal2')
                        $('#exampleModal1').modal('show');
                    @endif
                @else
                    setTimeout(function() {
                        $('#exampleModal1').modal('show');
                    }, 5000);
                @endif
            });
        </script>
        <script>
            var mq = window.matchMedia("(min-width: 992px)");
            if (mq.matches) {

                $(function() {
                    $(window).scroll(function() {
                        if ($(this).scrollTop() > 400 && $(this).scrollTop() <= 1000) {
                            $('.first').css({
                                'font-weight': '600'
                            });
                            $('.f-img').removeClass('d-none');

                        } else {
                            $('.first').css({
                                'font-weight': ''
                            });
                            $('.f-img').addClass('d-none');
                        }
                        if ($(this).scrollTop() > 1000 && $(this).scrollTop() <= 1500) {
                            $('.second').css({
                                'font-weight': '600'
                            });
                            $('.s-img').removeClass('d-none');

                        } else {
                            $('.second').css({
                                'font-weight': ''
                            });
                            $('.s-img').addClass('d-none');
                        }


                        if ($(this).scrollTop() > 1500 && $(this).scrollTop() <= 2400) {
                            $('.third').css({
                                'font-weight': '600'
                            });
                            $('.t-img').removeClass('d-none');

                        } else {
                            $('.third').css({
                                'font-weight': ''
                            });
                            $('.t-img').addClass('d-none');
                        }

                        if ($(this).scrollTop() > 2400 && $(this).scrollTop() <= 3300) {
                            $('.four').css({
                                'font-weight': '600'
                            });
                            $('.fo-img').removeClass('d-none');

                        } else {
                            $('.four').css({
                                'font-weight': ''
                            });
                            $('.fo-img').addClass('d-none');
                        }

                        if ($(this).scrollTop() > 3300 && $(this).scrollTop() <= 3700) {
                            $('.five').css({
                                'font-weight': '600'
                            });
                            $('.fi-img').removeClass('d-none');
                        } else {
                            $('.five').css({
                                'font-weight': ''
                            });
                            $('.fi-img').addClass('d-none');
                        }

                        if ($(this).scrollTop() > 3700 && $(this).scrollTop() <= 4700) {
                            $('.six').css({
                                'font-weight': '600'
                            });
                            $('.si-img').removeClass('d-none');
                        } else {
                            $('.six').css({
                                'font-weight': ''
                            });
                            $('.si-img').addClass('d-none');
                        }


                        if ($(this).scrollTop() > 4700 && $(this).scrollTop() <= 5200) {
                            $('.seven').css({
                                'font-weight': '600'
                            });
                            $('.se-img').removeClass('d-none');
                        } else {
                            $('.seven').css({
                                'font-weight': ''
                            });
                            $('.se-img').addClass('d-none');
                        }

                        if ($(this).scrollTop() > 5200 && $(this).scrollTop() <= 5700) {
                            $('.eight').css({
                                'font-weight': '600'
                            });
                            $('.ei-img').removeClass('d-none');
                        } else {
                            $('.eight').css({
                                'font-weight': ''
                            });
                            $('.ei-img').addClass('d-none');
                        }
                    });

                });
            }
        </script>
    @endsection
