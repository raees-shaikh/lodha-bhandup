<footer class="footer ptb-40">
    <div class="container">
        <div class="inner-footer-bottom">
            <!-- <a href="images/qr-code.png" class="with-caption image-link" title="Floor Plan">
                <img src="images/qr-code.png" style="width: 100px;">
            </a>
            <p><b>Project Rera No : </b> P51700055789  </p> -->
            <div class="box">
                <p class="btm-foot">
                    Disclaimer - The content provided on this website is for information purposes only and does not
                    constitute an offer to avail any service. The prices mentioned are subject to change without
                    prior notice, and the availability of properties mentioned is not guaranteed.
                </p>
                <div class="text-left1 text-center moretext">
                    <p class="btm-foot">
                        This is an informational portal managed by a RERA-authorized real estate agent and is not an
                        official site. The information provided does not constitute a guarantee or offer of services.
                        This website's prices and availability are subject to change without prior notice. These images
                        are for representational purposes only and may not accurately reflect the actual properties.
                        Data collected from you may be shared with RERA registered developers for processing. In
                        addition, you may receive updates and information by email or mobile phone. All rights reserved.
                        This website's content, design, and information are protected by copyright. Unauthorized use or
                        reproduction of the content is prohibited. In order to get accurate and up-to-date information
                        about services, pricing, availability, and any other details, please contact us directly using
                        the contact information provided on this website. We are glad you visited our site.<br> Agent
                        RERA Number: A51800046051</p>
                </div>
                {{-- <h6 class="moreless-button">Read More</h6> --}}
                {{-- A51800004011 --}}
                <!-- <p class="btm-foot">Digital Media Planned By:<a href="https://www.gtftechnologies.com/"> GTF
                        Technologies</a></p> -->
                        <hr>
                <p class="mt-3 pb-md-0 mb-md-0">
                    <a href="{{ route('privacy-policy') }}" class="link policy">Privacy Policy</a>
                    | Designed & Developed By
                    <a href="https://www.acetrot.com/" target="_blank" class=" footer-ace-text text-white">Acetrot.</a>

                </p>
            </div>
        </div>
    </div>
</footer>

<!-- mobile section -->
{{-- jay.jadeja@sunlinerealty.com --}}
{{-- <div class="mobile-section">
    <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal1" class="btn" title="Enquire Now">
        Enquire Now</a>
    <!-- <a href="tel:+91-7026166998" class="btn">+91 7026166998</a> -->
    <a href="tel:919920454543" class="btn">Call</a>

 <div class="d-grid">
    <img src="{{asset('frontend/images/email.png')}}" alt="">
    <a href="mailto:jay.jadeja@sunlinerealty.com" class="btn block">Email</a>
 </div> --}}

<div class="mobile-section w-100">
    <ul class="">
        <div class="row">
            <div class=" col-4 br-right pr-0">
                <li class=""> <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal1"
                        class="btn d-content p-0 pt-2" title="Enquire Now"><img class="wa-btm"
                            src="{{ asset('frontend/images/form.png') }}" width="26px" alt="An image of form icon">
                        <p class="p-fs ">Enquire Now</p>
                    </a>
                </li>
            </div>
            <div class=" col-4 br-right">
                <li class=""><a target="_blank" href="tel: 919920454543" class="d-block"><img class="mobile-btm "
                            src="{{ asset('frontend/images/mobile.png') }}" width="26px " alt="mobile icon">
                        <p class="p-fs ">Call</p>
                    </a>
                </li>
            </div>
            <div class="col-4">
                <li class=""><a href="mailto:jay.jadeja@sunlinerealty.com" class="d-block"><img class="form-btm"
                            src="{{ asset('frontend/images/email.png') }}" width="26px" alt="email icon">
                        <p class="p-fs ">Email</p>
                    </a>
                </li>
            </div>
        </div>
    </ul>
</div>

<!-- Modal -->

<button class="btn-scroll"><img src="{{ asset('frontend/images/arrow-top.png') }}" alt=""
        width="22px"></button>

<a href="https://api.whatsapp.com/send?phone=919920454543" class="float bounce" target="_blank">
    <i class="fa fa-whatsapp my-float "></i>
</a>


<!--<div class="modal fade" id="onload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 865px; width: 100%;">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="img_div col-md-6">
                        <img src="images/strip/m3m-altitude-popup.webp" alt="">
                    </div>
                    <div class="right_col col-md-6">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Lodha Bhandup</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="form_section">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Name" name="name"id="qSenderName4">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter Email" name="email" id="qEmailID4">
                            </div>
                            <div class="form-group">
                                <input  class="form-control" placeholder="Enter Mobile Number" name="number" id="qMobileNo4">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Message" name="number" id="qMessage4"/>
                            </div>
                            <button class="btn dark_btn rounded submit_btn main_button" id="SubmitQuery4">Submit Now</button>
                            <div class="inp-box">
                                <input type="checkbox" checked="">
                                <p class="inp-txt" style="margin-left: 5px;"> I authorize company representatives to Call,
                                    SMS, Email or WhatsApp me about its products and offers. This consent overrides any
                                    registration for DNC/NDNC.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>

<script type="text/javascript" src="../../../npm/slick-carousel%401.8.1/slick/slick.min.js"></script>
<script src="../../../npm/intl-tel-input%4018.2.1/build/js/intlTelInput.min.js"></script>


<script type="text/javascript" language="javascript">
    var versionUpdate = (new Date()).getTime();
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "https://api2.gtftech.com/scripts/queryform.min.ssl.js?v=" + versionUpdate;
    document.body.appendChild(script);
</script>

<script>
    //Needs to be duplicate in the case of multiple forms on the same page
    //--------------------------------------------------------------------------------------//
    $('#preferedtime').hide();
</script>



<script>
    $(document).ready(function() {
        $('.nav-link').on('click', function(e) {
            var target = this.hash;
            var $target = $(target);
            var targetOffset = $target.offset().top - 70;
            $('html, body').stop().animate({
                scrollTop: targetOffset
            }, 100, 'swing', function() {
                window.location.hash = target;
            });
        });
    });


    $('.amenities_wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        dots: true,
        arrows: false,
        responsive: [{
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
</script>
<script></script>
<script>
    $(document).ready(function() {
        $(".nav-item").click(function() {
            $("body").removeClass("mobile-open");
        });
    });

    $(document).ready(function() {

        $(".header-wrapper").css({
            "background-color": "#F5F5F5"
        });
        $(".header_button ").css({
            "color": "white"
        });
        $(".header_button img").css({
            "filter": "brightness(0) invert(1)"
        });


    })
</script>


<script>
    $('.navbar-brand').click(function() {
        $('.nav-link').css({
            "font-weight": "400"
        });
        $(".nav-item img").css({
            "display": "none"
        });
        $(".nav-link").css({
            "padding-bottom": ""
        });
    });
    $('.nav-link').click(function() {
        $(".nav-link").css({
            "padding-bottom": "0px"
        });
    });
    $('.linkClass').click(function() {
        $(this).find('.nav-link').css({
            "font-weight": "600"
        });
        $(this).find('img').removeClass('d-none');
        $('.linkClass2 img').addClass('d-none');
        $('.linkClass2').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass3 img').addClass('d-none');
        $('.linkClass3').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass4 img').addClass('d-none');
        $('.linkClass4').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass5 img').addClass('d-none');
        $('.linkClass5').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass6 img').addClass('d-none');
        $('.linkClass6').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass7 img').addClass('d-none');
        $('.linkClass7').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass8 img').addClass('d-none');
        $('.linkClass8').find('.nav-link').css({
            "font-weight": "400"
        });
    });
    $('.linkClass2').click(function() {
        $(this).find('.nav-link').css({
            "font-weight": "600"
        });
        $(this).find('img').removeClass('d-none');
        $('.linkClass img').addClass('d-none');
        $('.linkClass').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass3 img').addClass('d-none');
        $('.linkClass3').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass4 img').addClass('d-none');
        $('.linkClass4').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass5 img').addClass('d-none');
        $('.linkClass5').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass6 img').addClass('d-none');
        $('.linkClass6').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass7 img').addClass('d-none');
        $('.linkClass7').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass8 img').addClass('d-none');
        $('.linkClass8').find('.nav-link').css({
            "font-weight": "400"
        });
    });

    $('.linkClass3').click(function() {
        $(this).find('.nav-link').css({
            "font-weight": "600"
        });
        $(this).find('img').removeClass('d-none');
        $('.linkClass img').addClass('d-none');
        $('.linkClass').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass2 img').addClass('d-none');
        $('.linkClass2').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass4 img').addClass('d-none');
        $('.linkClass4').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass5 img').addClass('d-none');
        $('.linkClass5').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass6 img').addClass('d-none');
        $('.linkClass6').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass7 img').addClass('d-none');
        $('.linkClass7').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass8 img').addClass('d-none');
        $('.linkClass8').find('.nav-link').css({
            "font-weight": "400"
        });
    });


    $('.linkClass4').click(function() {
        $(this).find('.nav-link').css({
            "font-weight": "600"
        });
        $(this).find('img').removeClass('d-none');
        $('.linkClass img').addClass('d-none');
        $('.linkClass').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass2 img').addClass('d-none');
        $('.linkClass2').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass3 img').addClass('d-none');
        $('.linkClass3').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass5 img').addClass('d-none');
        $('.linkClass5').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass6 img').addClass('d-none');
        $('.linkClass6').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass7 img').addClass('d-none');
        $('.linkClass7').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass8 img').addClass('d-none');
        $('.linkClass8').find('.nav-link').css({
            "font-weight": "400"
        });
    });

    $('.linkClass5').click(function() {
        $(this).find('.nav-link').css({
            "font-weight": "600"
        });
        $(this).find('img').removeClass('d-none');
        $('.linkClass img').addClass('d-none');
        $('.linkClass').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass2 img').addClass('d-none');
        $('.linkClass2').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass4 img').addClass('d-none');
        $('.linkClass4').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass3 img').addClass('d-none');
        $('.linkClass3').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass6 img').addClass('d-none');
        $('.linkClass6').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass7 img').addClass('d-none');
        $('.linkClass7').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass8 img').addClass('d-none');
        $('.linkClass8').find('.nav-link').css({
            "font-weight": "400"
        });
    });

    $('.linkClass6').click(function() {
        $(this).find('.nav-link').css({
            "font-weight": "600"
        });
        $(this).find('img').removeClass('d-none');
        $('.linkClass img').addClass('d-none');
        $('.linkClass').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass2 img').addClass('d-none');
        $('.linkClass2').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass4 img').addClass('d-none');
        $('.linkClass4').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass5 img').addClass('d-none');
        $('.linkClass5').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass3 img').addClass('d-none');
        $('.linkClass3').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass7 img').addClass('d-none');
        $('.linkClass7').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass8 img').addClass('d-none');
        $('.linkClass8').find('.nav-link').css({
            "font-weight": "400"
        });
    });

    $('.linkClass7').click(function() {
        $(this).find('.nav-link').css({
            "font-weight": "600"
        });
        $(this).find('img').removeClass('d-none');
        $('.linkClass img').addClass('d-none');
        $('.linkClass').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass2 img').addClass('d-none');
        $('.linkClass2').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass4 img').addClass('d-none');
        $('.linkClass4').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass5 img').addClass('d-none');
        $('.linkClass5').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass6 img').addClass('d-none');
        $('.linkClass6').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass3 img').addClass('d-none');
        $('.linkClass3').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass8 img').addClass('d-none');
        $('.linkClass8').find('.nav-link').css({
            "font-weight": "400"
        });
    });

    $('.linkClass8').click(function() {
        $(this).find('.nav-link').css({
            "font-weight": "600"
        });
        $(this).find('img').removeClass('d-none');
        $('.linkClass img').addClass('d-none');
        $('.linkClass').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass2 img').addClass('d-none');
        $('.linkClass2').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass4 img').addClass('d-none');
        $('.linkClass4').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass5 img').addClass('d-none');
        $('.linkClass5').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass6 img').addClass('d-none');
        $('.linkClass6').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass7 img').addClass('d-none');
        $('.linkClass7').find('.nav-link').css({
            "font-weight": "400"
        });
        $('.linkClass3 img').addClass('d-none');
        $('.linkClass3').find('.nav-link').css({
            "font-weight": "400"
        });
    });
</script>

<script>
    const button = document.querySelector('.btn-scroll');

    const displayButton = () => {
        window.addEventListener('scroll', () => {
            // console.log(window.scrollY);

            if (window.scrollY > 500) {
                button.style.display = "block";
            } else {
                button.style.display = "none";
            }
        });
    };

    const scrollToTop = () => {
        button.addEventListener("click", () => {
            window.scroll({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
            // console.log(event);
        });
    };

    displayButton();
    scrollToTop();
</script>

<script src="{{ asset('plugins/notification/snackbar/snackbar.min.js') }}"></script>
<script>
    @if (Session::get('alert-type') == 'success')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#1abc9c'
            });
        @endif
    @elseif (Session::get('alert-type') == 'info')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#2196f3'
            });
        @endif
    @elseif (Session::get('alert-type') == 'error')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#e7515a'
            });
        @endif
    @else
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#3b3f5c'
            });
        @endif
    @endif
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
    integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.umd.min.js"
    integrity="sha512-OUF2jbRheQR5yXPCvXN71udWa5cvwPf+shcXM+5GrW1vtNurTn7az8LCP3hS50gm17ULXdh3cdkhiPa0Qqyczw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.umd.min.js"
    integrity="sha512-dc8xJSGs0ib9uo0fLT/v4wp2LG7+4OSzc+UpFiIKiv6QP/e4hZH/S8manUCTtO3tNVGzcje8uJjSdL+NH29blQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.umd.min.js"
    integrity="sha512-VOQBxCIgNssJrB8+irZF7L8MvfpAshegc36C3H5QD7vmibXM4uCNaqJIaSNatD2z2ZQQJSx0k+q+m+xsSPp4Xw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</script>

<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        licenseKey: 'your_license_key',
        speed: 500,
        selector: 'a',
        // ... other settings
    });
</script>
