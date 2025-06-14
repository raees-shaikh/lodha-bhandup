<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title','') New Residential Project By Lodha In Bhandup, Mumbai </title>
    <meta name="description"
        content="Lodha Bhandup , Mumbai is an upcoming residential apartment project by Lodha Group, one of India's most renowned real estate developers. This project is in Bhandup, along the prime LBS Road, Bhandup, Mumbai.">
    <meta name="keywords"
        content="Lodha Bhandup, luxury real estate, exclusive properties, elevated living, luxury homes, real estate investment, 2 & 3 BHK Apartment">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet" type="text/css" href="../../../npm/slick-carousel%401.8.1/slick/slick.css">
    <link href="../../../css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('frontend/images/lodha.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="../../../npm/intl-tel-input%4018.2.1/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery-bundle.min.css"
        integrity="sha512-nUqPe0+ak577sKSMThGcKJauRI7ENhKC2FQAOOmdyCYSrUh0GnwLsZNYqwilpMmplN+3nO3zso8CWUgu33BDag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}">

    <style>
        .iti {
            width: 100%;
        }

        .contact_section .iti--separate-dial-code .iti__selected-flag {
            background-color: rgb(255 255 255) !important;
        }

        .d-view {}

        .m-view {
            display: none;
        }

        @media (max-width:767px) {
            .d-view {
                display: none;
            }

            .m-view {
                display: block;
            }
        }
    </style>
    @if (App::environment('production'))
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-THG55LVT9R"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-THG55LVT9R');
            gtag('config', 'AW-965265600');
        </script>

        @yield('gtag')

        <script>
            gtag('config', 'AW-965265600/dG3MCK6HrM4ZEMCRo8wD', {
                'phone_conversion_number': '+91-9920454543'
            });
        </script>
    @endif
</head>
