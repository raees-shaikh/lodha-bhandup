@extends('frontend.layouts.app')
@section('title', ' ')
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card-thanks-outer">
                        <div class="greencard">
                            <div class="circle">
                                <img src="{{ asset('frontend/images/done.png') }}" alt="">
                            </div>
                            <div class="vector">
                                <h2>Thank You</h2>
                            </div>
                        </div>
                        <div class="textcard">
                            <h4 class="mt-4">Thank You For Submitting Your Details</h4>
                            <p class="mt-3">Our team will reach out to you within the next two hours.
                                We look forward to assisting you!</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        setTimeout(function() {
            window.location.href = "{{ route('index') }}";
        }, 60000);
    </script>
@endsection

@section('gtag')
    <!-- Event snippet for Lodha Bhandup - Page Load (1) conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-965265600/IcWjCM_ln84ZEMCRo8wD'
        });
    </script>
@endsection
