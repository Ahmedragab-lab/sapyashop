@extends('site.layouts.master')
@section('title') {{ $Last_event->event_title }} @endsection
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <section class="section works-list portfolio-single product-single is-clearfix">
                  <p class="heading-title-top has-text-centered pt-5">welcome logistics</p>
                  <h1 class="heading-title style-3"> Last
                      {{-- <br> difference. --}}
                      <span class="has-text-primary">event </span>
                  </h1>
                    <div class="fluid-container">
                        <div id="content-main-wrap" class="is-clearfix  m-2 p-5">
                            <div id="content-area" class="site-content-area">
                                <div id="content-area-inner" class="site-content-area-inner">
                                    <section
                                    
                                        class="section hero has-background-primary-light padding-bottom-none padding-top-none is-clearfix">
                                        <div>
                                          
                                            <div class="columns is-multiline is-variable is-8">
                                                <div class="column is-6-desktop is-12-tablet">
                                                    <figure>
                                                        <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                            src="{{ asset('uploads/event/' . $Last_event->image) }}"
                                                            class="is-block" style="height: 450px">
                                                    </figure>
                                                </div>
                                                <div class="column is-6-desktop is-12-tablet pt-5" data-aos="fade-up">
                                                    <div>
                                                        <h1 class="heading-title style-1 has-text-left">
                                                            {{ $Last_event->event_title }}</h1>
                                                        <p class="heading-title-bottom has-text-center"
                                                            style="line-height: 1.9;">
                                                            {{ $Last_event->desc }}

                                                        </p>
                                                        <a href="#order" class=" btn  btn-order  rounded-pill "> Order Now
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        </span>
                    </div>
                </section>

                {{-- ****************  Start View All *********************** --}}


                {{-- Start Asmaa section service --}}
                <section id="services" class="pt-5">
                    <div class="container">
                        <p class="heading-title-top has-text-centered pt-5">welcome logistics</p>
                        <h1 class="heading-title style-3"> Our
                            {{-- <br> difference. --}}
                            <span class="has-text-primary">Events </span>
                        </h1>
                        <div class="slider">
                            <div id="slider-service" class="owl-carousel">
                                @foreach (\App\Models\Event::orderBy('id', 'DESC')->limit(3)->get()
        as $event)
                                    <div class="slider-card">
                                        <div class="d-flex justify-content-center align-items-center mb-4"
                                            style="max-height: 350px ;">
                                            <a href="{{ route('allservices.show', $event->id) }}">
                                                <img src="{{ asset('uploads/event/' . $event->image) }}"
                                                    style="height: 300px ;border-radius:25px">
                                            </a>
                                        </div>
                                        <h2 class="mb-0 text-center"><b>{{ $event->event_title }} Event</b></h2>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>


                {{-- End Asmaa  section service --}}
            </div>
        </div>
    </div>





@endsection
