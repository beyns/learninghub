@extends('master.index') @section('content')
<section class="slice slice-lg pt-8 pb-11 pt-md-9 pb-md-12 py-lg-14 bg-light bg-between">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7 text-center aos-init aos-animate" data-aos="fade-up">
                <!-- Image (mobile) -->
                <img src="assets/img/illustrations/illustration-8.png" alt="..." class="img-fluid mb-6 d-lg-none" />

                <!-- Heading -->
                <h1 class=" font-weight-bold">
                    Share your work
                </h1>

                <!-- Text -->
                <p class="font-size-lg text-muted mb-6 mb-md-8">
                    Each month, over 50 million developers come to Stack
                    Overflow to learn, share their knowledge, and build their
                    careers
                </p>

                <!-- Button -->
                <a href="{{ route('ask') }}" class="btn btn-primary mr-1 lift">
                    Share my work
                </a>
                <a href="#!" class="btn btn-primary-soft lift">
                    Learn more
                </a>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>
<section class="slice slice-lg">
    <div class="container">
        <div class="row justify-content-center mb-6">
            <div class="col-lg-8 ">
                <div class="media">
                    <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-website-ui-kit-v2.0.0/assets/img/theme/light/team-1-800x800.jpg" width="45" class="avatar avatar-lg rounded-circle mr-4">
                    <div class="media-body">
                        <p class="font-weight-bold">The Luxury Garafe</p>
                        <p> I have created a luxury car rental web application using react and node.js
                            <a href=""> https://the-luxury-garage-by-aditya.herokuapp.com/#0</a>
                            this is the link to my project. Please provide your kind feedback.
                            Any suggestions for improvement are most welcome and also let me know if u find any glitch in the app. Please use my app and provide your feedback it'll help me a lot</p>

                        <small class="text-muted mt-4">Bettie Mavis — Web Designer at Webpixels</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-4">
                <div class="media">
                    <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-website-ui-kit-v2.0.0/assets/img/theme/light/team-1-800x800.jpg" width="45" class="avatar avatar-lg rounded-circle mr-4">
                    <div class="media-body">
                        <p class="font-weight-bold">The Luxury Garafe</p>
                        <p> I have created a luxury car rental web application using react and node.js
                            <a href=""> https://the-luxury-garage-by-aditya.herokuapp.com/#0</a>
                            this is the link to my project. Please provide your kind feedback.
                            Any suggestions for improvement are most welcome and also let me know if u find any glitch in the app. Please use my app and provide your feedback it'll help me a lot</p>

                        <small class="text-muted mt-4">Bettie Mavis — Web Designer at Webpixels</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection