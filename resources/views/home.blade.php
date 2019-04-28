@extends('master.index') @section('content')
<section class="slice slice-lg pt-8 pb-11 pt-md-9 pb-md-12 py-lg-14 bg-light bg-between">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7 text-center aos-init aos-animate" data-aos="fade-up">
        <!-- Image (mobile) -->
        <img src="assets/img/illustrations/illustration-8.png" alt="..." class="img-fluid mb-6 d-lg-none" />

        <!-- Heading -->
        <h1 class=" font-weight-bold">
          Ask, Learn, Share, Build
        </h1>

        <!-- Text -->
        <p class="font-size-lg text-muted mb-6 mb-md-8">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem libero adipisci odit, iure quibusdam veniam eius perferendis numquam cumque repudiandae, quisquam veritatis mollitia.
        </p>

        <!-- Button -->
        <a href="{{ route('ask') }}" class="btn btn-primary mr-1 lift">
          Ask Question
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
    <div class="row mb-6">
      <!-- <div class="media mt-4">

          <div class="media-body">
            <div class="row align-items-center no-gutters mb-4">
              <div class="col-auto">

                <div class="mr-2">
                  <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-website-ui-kit-v2.0.0/assets/img/theme/light/team-1-800x800.jpg" width="45" class="avatar avatar-lg rounded-circle mr-4">
                </div>

              </div>
              <div class="col">
                <p class="mb-0 text-xs text-muted">
                  by <strong class="text-body">John Doe</strong> 5 hours ago
                </p>
              </div>
            </div>
            <a class="d-flex align-items-center text-reset text-decoration-none collapsed" data-toggle="collapse" href="#helpOne" role="button" aria-expanded="false" aria-controls="helpOne">

           
              <span class="mr-4">
                How to fix “pgadmin4-apache2” error in Ubuntu 18.04 command line installation
              </span>

              <div class="text-muted ml-2 ml-auto">

                <span class="font-size-sm mr-4 d-none d-md-inline">
                  <i class="far fa-heart"></i> 10
                </span>
                <span class="font-size-xs mr-4 d-none d-md-inline">
                  <i class="far fa-comment"></i> 1
                </span>
                <span class="font-size-sm mr-4 d-none d-md-inline">
                  <i class="far fa-eye"></i> 0
                </span>

                <span class="collapse-chevron text-muted">
                  <i class="fe fe-lg fe-chevron-down"></i>
                </span>

              </div>

            </a>
            <small class="text-muted mt-4">Bettie Mavis — Web Designer at Webpixels</small>
          </div>
        </div> -->

      <div class="col-lg-8 mt-4">
        <div class="media mt-4">
          <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-website-ui-kit-v2.0.0/assets/img/theme/light/team-1-800x800.jpg" width="45" class="avatar avatar-lg rounded-circle mr-4">
          <div class="media-body">
            <a class="d-flex align-items-center text-reset text-decoration-none collapsed" data-toggle="collapse" href="#helpOne" role="button" aria-expanded="false" aria-controls="helpOne">

              <!-- Title -->
              <span class="mr-4">
                How to fix “pgadmin4-apache2” error in Ubuntu 18.04 command line installation
              </span>

              <!-- Metadata -->
              <div class="text-muted ml-2 ml-auto">

                <!-- Text -->
                <span class="font-size-sm mr-4 d-none d-md-inline">
                  <i class="far fa-heart"></i> 10
                </span>
                <span class="font-size-xs mr-4 d-none d-md-inline">
                  <i class="far fa-comment"></i> 1
                </span>
                <span class="font-size-sm mr-4 d-none d-md-inline">
                  <i class="far fa-eye"></i> 0
                </span>

                <!-- Chevron -->
                <span class="collapse-chevron text-muted">
                  <i class="fe fe-lg fe-chevron-down"></i>
                </span>

              </div>

            </a>
            <small class="text-muted mt-4">Bettie Mavis — Web Designer at Webpixels</small>
          </div>
        </div>
        <div class="media mt-4">
          <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-website-ui-kit-v2.0.0/assets/img/theme/light/team-4-800x800.jpg" width="45" class="avatar avatar-lg rounded-circle mr-4">
          <div class="media-body">
            <a class="d-flex align-items-center text-reset text-decoration-none collapsed" data-toggle="collapse" href="#helpOne" role="button" aria-expanded="false" aria-controls="helpOne">

              <!-- Title -->
              <span class="mr-4">
                What is the most adequate environment to run Reinforcement Learning Code
              </span>

              <!-- Metadata -->
              <div class="text-muted ml-2 ml-auto">

                <!-- Text -->
                <span class="font-size-sm mr-4 d-none d-md-inline">
                  <i class="far fa-heart"></i> 10
                </span>
                <span class="font-size-xs mr-4 d-none d-md-inline">
                  <i class="far fa-comment"></i> 1
                </span>
                <span class="font-size-sm mr-4 d-none d-md-inline">
                  <i class="far fa-eye"></i> 0
                </span>

                <!-- Chevron -->
                <span class="collapse-chevron text-muted">
                  <i class="fe fe-lg fe-chevron-down"></i>
                </span>

              </div>

            </a>
            <small class="text-muted mt-4">Bettie Mavis — Web Designer at Webpixels</small>
          </div>
        </div>
        <div class="media mt-4">
          <img alt="Image placeholder" src="https://i.stack.imgur.com/2iaF1.jpg" width="45" class="avatar avatar-lg rounded-circle mr-4">
          <div class="media-body">
            <a class="d-flex align-items-center text-reset text-decoration-none collapsed" data-toggle="collapse" href="#helpOne" role="button" aria-expanded="false" aria-controls="helpOne">

              <!-- Title -->
              <span class="mr-4">
                How can I show more anchors on nav and username when user is logged in?
              </span>

              <!-- Metadata -->
              <div class="text-muted ml-2 ml-auto">

                <!-- Text -->
                <span class="font-size-sm mr-4 d-none d-md-inline">
                  <i class="far fa-heart"></i> 10
                </span>
                <span class="font-size-xs mr-4 d-none d-md-inline">
                  <i class="far fa-comment"></i> 1
                </span>
                <span class="font-size-sm mr-4 d-none d-md-inline">
                  <i class="far fa-eye"></i> 0
                </span>

                <!-- Chevron -->
                <span class="collapse-chevron text-muted">
                  <i class="fe fe-lg fe-chevron-down"></i>
                </span>

              </div>

            </a>
            <small class="text-muted mt-4">Bettie Mavis — Web Designer at Webpixels</small>
          </div>
        </div>
        <div class="media mt-4">
          <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-website-ui-kit-v2.0.0/assets/img/theme/light/team-3-800x800.jpg" width="45" class="avatar avatar-lg rounded-circle mr-4">
          <div class="media-body">
            <a class="d-flex align-items-center text-reset text-decoration-none collapsed" data-toggle="collapse" href="#helpOne" role="button" aria-expanded="false" aria-controls="helpOne">

              <!-- Title -->
              <span class="mr-4">
                How to fix “pgadmin4-apache2” error in Ubuntu 18.04 command line installation
              </span>

              <!-- Metadata -->
              <div class="text-muted ml-2 ml-auto">

                <!-- Text -->
                <span class="font-size-sm mr-4 d-none d-md-inline">
                  <i class="far fa-heart"></i> 10
                </span>
                <span class="font-size-xs mr-4 d-none d-md-inline">
                  <i class="far fa-comment"></i> 1
                </span>
                <span class="font-size-sm mr-4 d-none d-md-inline">
                  <i class="far fa-eye"></i> 0
                </span>

                <!-- Chevron -->
                <span class="collapse-chevron text-muted">
                  <i class="fe fe-lg fe-chevron-down"></i>
                </span>

              </div>

            </a>
            <small class="text-muted mt-4">Bettie Mavis — Web Designer at Webpixels</small>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">

        <!-- Card -->
        <div class="card shadow-light-lg mb-5">
          <div class="card-body">

            <!-- Heading -->
            <h4>
              Need help?
            </h4>

            <!-- Text -->
            <p class="font-size-sm text-gray-800 mb-5">
              Not sure exactly what we’re looking for or just want clarification? We’d be happy to chat with you and clear things up for you. Anytime!
            </p>

            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700 mb-2">
              Call anytime
            </h6>

            <!-- Text -->
            <p class="font-size-sm mb-5">
              <a href="tel:555-123-4567" class="text-reset">(555) 123-4567</a>
            </p>

            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700 mb-2">
              Email us
            </h6>

            <!-- Text -->
            <p class="font-size-sm mb-0">
              <a href="mailto:support@goodthemes.co" class="text-reset">support@goodthemes.co</a>
            </p>

          </div>
        </div>

        <!-- Card -->
        <div class="card shadow-light-lg">
          <div class="card-body">

            <!-- Heading -->
            <h4>
              Don't see a job for you?
            </h4>

            <!-- Text -->
            <p class="font-size-sm text-gray-800">
              Do you feel like you belong working with Good Themes, but we just don’t have your dream job posted? No problem, just reach out.
            </p>

            <!-- Heading -->
            <a href="#!" class="font-weight-bold font-size-sm text-decoration-none">
              Let us know <i class="fe fe-arrow-right ml-3"></i>
            </a>

          </div>
        </div>

      </div>
    </div>

  </div>
</section>
@endsection