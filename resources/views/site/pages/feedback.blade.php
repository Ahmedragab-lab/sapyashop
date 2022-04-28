@extends('site.layouts.master')

@section('content')

  


  <!-- start feedbacl page -->

    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
          <div id="header-bottom-inner" class="site-header-bottom-inner ">
            <section class="hero page-title is-medium has-text-centered about">
              <div class="hero-body">
                <div class="container">
                  <h1>testimonials</h1>
                  <h3>Break Through Self Doubt And Fear</h3>
                </div>
                <!-- .hero-body -->
              </div>
              <!-- .container -->
            </section>
            <!-- .page-title -->
          </div>
          <!-- #header-bottom-inner -->
        </div>
        <!-- #header-bottom -->
      </div>
      <!-- #header-bottom-wrap -->
      <!-- import content layouts and modules -->
      <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
          <div id="content-area-inner" class="site-content-area-inner">
            <section class="section hero has-background-primary-light is-clearfix">
              <div class="container">
                <p class="heading-title-top has-text-centered">app feedback</p>
                <h1 class="heading-title style-3">all reviews</h1>
                <div class="testimonials   columns-style-1 columns is-variable is-4 is-multiline">
                  @foreach($feedbacks as $feedback) 
                  <div class="column is-4">
                    <div class="testimonials-item">
                      <h2>{{$feedback->services->serve_name}}</h2>
                      <div class="testimonials-stars">
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                        <span class="icon">
                          <i class="ion-md-star"></i>
                        </span>
                      </div>
                      <p>{{ $feedback->feedback }}</p>
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src={{asset('uploads/user-img/' .$feedback->users->image )}}>
                      <h3>{{ $feedback->users->name  }}
                        <br>
                        <span>CEO & stylist</span>
                      </h3>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </section>
         
          </div>
          <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
      </div>
      <!-- #content-main-wrap -->
@endsection

