@extends('site.layouts.master')
@section('css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div id="header-bottom-wrap" class="is-clearfix ">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero page-title is-medium has-text-centered services">
                    <div class=" card-service  text-white">
                        <img src="{{ asset('uploads/serv/' . $service->image) }}" class="img-fluid" width="100%"
                            alt="..." style="height: 635px">
                        <div class="card-img-overlay img-caption">
                            <h1 class="card-title">Morasoft Services</h1>
                            <p class="Services">{{ $service->serve_name }}</p>


                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div id="content-main-wrap" class="is-clearfix  m-5 p-5">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <section class="section hero has-background-primary-light padding-bottom-none padding-top-none is-clearfix">
                    <div>
                        <div class="columns is-multiline is-variable is-8">
                            <div class="column is-6-desktop is-12-tablet">
                                <figure>
                                    <img alt="Joo - Niche Multi-Purpose HTML Template"
                                        src="{{ asset('uploads/serv/' . $service->image) }}" class="is-block" style="height: 450px">
                                </figure>
                            </div>
                            <div class="column is-6-desktop is-12-tablet pt-5" data-aos="fade-up">
                                <div>
                                    <h1 class="heading-title style-1 has-text-left">{{ $service->serve_name }}</h1>
                                    <p class="heading-title-bottom has-text-center" style="line-height: 1.9;">
                                        {{ $service->desc }}

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




    {{-- Asmaa Feedback --}}
    <section class=" container">
        @if(\App\Models\UserRate::count() > 0)
        <h1 class="heading-title style-3 has-text-center"> Feedback
            <span class="has-text-primary">clients</span>
        </h1>
        <p class="heading-title-bottom text-center"> Always do our best for you thank you</p>
        <div id="feedback" class="owl-carousel owl-theme owl-loaded ">
            <div class="owl-stage-outer">
                <div class="owl-stage area-content">

                    {{-- @foreach (\App\Models\Feedback::orderBy('id', 'DESC')->limit(3)->get() as $feedback) --}}
                            @foreach (\App\Models\UserRate::where('service_id',$service->id)->get() as $feedback)
                                <div class="owl-item content">
                                    <div class="image-user-feed m-auto text-center">
                                        <img alt="no photo" class="rounded-circle"
                                            src="{{ asset('uploads/user-img/' . $feedback->users->image) }}"
                                            style="height: 100px">
                                    </div>
                                    <h2>{{ $feedback->services->serve_name }} Services</h2>
                                    <p>{{ $feedback->sms }}</p>
                                    <div class="testimonials-stars">
                                        <span class="icon " >
                                        <i class="ion-md-star {{ $feedback->star == 5 ? 'active' : '' }}" ></i>
                                        </span>
                                        <span class="icon">
                                        <i class="ion-md-star {{ $feedback->star == 4 ? 'active' : '' }}"></i>
                                        </span>
                                        <span class="icon">
                                        <i class="ion-md-star {{ $feedback->star == 3 ? 'active' : '' }}"></i>
                                        </span>
                                        <span class="icon">
                                        <i class="ion-md-star {{ $feedback->star == 2 ? 'active' : '' }}"></i>
                                        </span>
                                        <span class="icon">
                                        <i class="ion-md-star {{ $feedback->star == 1 ? 'active' : '' }}"></i>
                                        </span>
                                    </div>
                                </div>
                            @endforeach

                </div>
            </div>
            <div class="owl-dots">
              <div class="owl-dot active"><span></span></div>
              <div class="owl-dot"><span></span></div>
              <div class="owl-dot"><span></span></div>
          </div>
        </div>
        @else
        <h2>there is no feed back</h2>
        @endif
    </section>


    {{-- anthor form --}}
    <section id="order" class="section quote-section padding-bottom-none is-clearfix text-center m-auto">
        <div class="container text-center ">
            <div class="is-variable  is-multiline text-center m-auto">
                <div class=" is-6-desktop is-12-tablet">
                    <h1 class="heading-title style-3 has-text-center"> Ask for
                        <span class="has-text-primary">price</span>
                    </h1>
                    <p class="heading-title-bottom"> Always do our best for you thank you</p>
                    <!-- successful form message -->
                    <div class="overhang-message-content is-hidden success">
                        <span class="icon">
                            <i class="ion-md-notifications"></i>
                        </span> Thank You! Your message was sent successfully.
                    </div>
                    <!-- error form message -->
                    <div class="overhang-message-content is-hidden error">
                        <span class="icon">
                            <i class="ion-md-notifications"></i>
                        </span> Oops! Something went wrong, we couldn't send your message.
                    </div>
                    <!-- ajax contact form -->
                    <form accept-charset="UTF-8" id="ajaxform" class="ajax-contact-form"
                        action="https://usebasin.com/f/3587049dbc33.json" method="POST">
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <div class="select">
                                            <select name="from">
                                                <option value="" readonly> ---from ---</option>
                                                @foreach (\App\Models\Country::all() as $country)
                                                    <option value="{{ $country->id }}">{{ $country->Name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control is-expanded">
                                        <div class="select">
                                            <select name="to">
                                                <option value="" readonly> ---to ---</option>
                                                @foreach (\App\Models\Country::all() as $country)
                                                    <option value="{{ $country->id }}">{{ $country->Name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal text-center">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input type="hidden" value="{{ $service->id }}" name="serv_id">
                                        <input type="hidden" readonly value="{{ $service->serve_name }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control is-expanded">
                                <textarea class="textarea" name="sms" placeholder="Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control text-center">
                                <button class="button save-data rounded-pill" type="submit"> ارسل طلبك <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-send-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z" />
                                    </svg> </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    {{-- فورمه اجاكس --}}





@endsection
@section('js')
    <script>
        $('#feedback').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $(".save-data").click(function(e) {
                e.preventDefault();
                let from = $("select[name=from]").val();
                let to = $("select[name=to]").val();
                let serv_id = $("input[name=serv_id]").val();
                let sms = $("textarea[name=sms]").val();
                console.log(from);
                console.log(to);
                console.log(serv_id);
                console.log(sms);
                $.ajax({
                    method: "POST",
                    url: "/servrequest",
                    data: {
                        from: from,
                        to: to,
                        serv_id: serv_id,
                        sms: sms,
                    },
                    success: function(response) {
                        swal(response.status);
                        $("#ajaxform")[0].reset();
                    },
                    error: function(response) {
                        swal(response.status);
                    }
                });
            });
        });
    </script>
@endsection
