@extends('master.index')

@section('content')

<div class="container">
<section class="pt-8 pb-11 pt-md-9 pb-md-12 py-lg-14 bg-light bg-between" >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center aos-init aos-animate" data-aos="fade-up">

            <!-- Image (mobile) -->
            <img src="assets/img/illustrations/illustration-8.png" alt="..." class="img-fluid mb-6 d-lg-none">
            
            <!-- Heading -->
            <h1 class="display-2 font-weight-bold">
              Designed secure. <br>
              Built for anything.
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-8">
              Forward thinking businesses use our cloud backup service to ensure data reliability and safety.
            </p>

            <!-- Button -->
            <a href="#!" class="btn btn-primary mr-1 lift">
              Get started <i class="fe fe-arrow-right ml-3"></i>
            </a>
            <a href="#!" class="btn btn-primary-soft lift">
              Learn more
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ask Something</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <a href="" data-toggle="modal" data-target="#question">What is your question?</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-body">
                <span class="badge badge-secondary">JavaScript</span>

                    <p class="font-weight-bold">
                    What are some examples of JavaScript code most of computer programmers write poorly? What is the better way of doing it?
                    </p>
                    <span class="text-muted">
                     No answer yet · Last followed 1m ago
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-body">
                    <span class="badge badge-secondary">JavaScript</span>
                    <span class="badge badge-secondary">Server-side Scripting</span>
                    <span class="badge badge-secondary">Node Js</span>
                    <p class="font-weight-bold">
                         If JavaScript is so bad, why do companies like Netflix and PayPal switch to Node.js and see massive benefits in performance?
                    </p>
                    <span class="text-muted">
                     No answer yet · Last followed 1m ago
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection