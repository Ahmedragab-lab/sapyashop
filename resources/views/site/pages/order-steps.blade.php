@extends('site.layouts.master')
@section('title') order steps @endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('front/star.css') }}">
@endsection
@section('content')
    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <!-- #content-main-wrap -->
                <section id="tracking-steps" class="section tracking-steps-section is-clearfix">
                    <div class="container">
                        <p class="heading-title-top has-text-centered">tracking</p>
                        <h1 class="heading-title style-3">how we work</h1>
                        <br>
                        <br>
                        <div class="steps" data-aos="fade-right">
                            <div class="step-item {{ $order_step->step == 1 ? 'active' : '' }}" data-step-id="0">
                                <div class="step-marker"> 1 </div>
                                <div class="step-details">
                                    <p class="step-title">تم تجهيز الشحنه</p>
                                    <p>هذه الخطوه يتم تجهيز وسيله النقل وترتيبات النقل.</p>
                                </div>
                            </div>
                            <div class="step-item  {{ $order_step->step == 2 ? 'active' : '' }}" data-step-id="1">
                                <div class="step-marker">2</div>
                                <div class="step-details">
                                    <p class="step-title">تم التعقيم والتغليف</p>
                                    <p>الان يتم عمليه تعقيم وتغليف الشحنه بعنايه لتسليمها اليكم بجوده عاليه.</p>
                                </div>
                            </div>
                            <div class="step-item {{ $order_step->step == 3 ? 'active' : '' }}" data-step-id="2">
                                <div class="step-marker">3</div>
                                <div class="step-details">
                                    <p class="step-title">عمليه المتابعه</p>
                                    <p>تم التحرك ومتابعه عمليه سير الشحنه.</p>
                                </div>
                            </div>
                            <div class="step-item {{ $order_step->step == 4 ? 'active' : '' }}" data-step-id="3">
                                <div class="step-marker"> 4 </div>
                                <div class="step-details">
                                    <p class="step-title">التسليم النهائى</p>
                                    <p>الان تم استلام الشحنه يرجى تقييمكم للخدمه شكرا لكم مع تحيات مورا سوفت للنقل والشحن.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                {{-- feed back --}}
                <section class="section  is-clearfix">
                    <div class="container">
                        <h1 class="heading-title style-1">we intersting in your feedback thank you</h1>
                        <div class="has-text-centered">
                            <div class="show-modal has-text-left">
                                <button class="button launch-modal rounded-pill">
                                    <span style="font-size:22px;"> Leave a rating to
                                        {{ $order_step->order->service->serve_name }} service </span>
                                </button>
                                <form action="{{ route('addrate') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $order_step->order->user->id }}" name="user_id">
                                    <input type="hidden" value="{{ $order_step->order->service->id }}" name="service_id">
                                    <div class="modal">
                                        <div class="modal-background shadow"></div>
                                        <div class="modal-content ">
                                            <div class="p-4">
                                                <article class="media ">
                                                    <div class="media-content m-auto text-center  m-2"
                                                        style="height:200px ;width:100px;">
                                                        <div class="text-center m-auto">
                                                            {{-- <strong>{{ $order_step->order->user->fname }}{{ $order_step->order->user->lname }} </strong> --}}
                                                            {{-- <div>{{ $order_step->order->user->email }}</div> --}}
                                                            <strong class="rext-center fs-2"> How would you rate this
                                                                Service?</strong>
                                                            <p class="text-center fs-5">Select Rating</p>
                                                            <div class="rate m-auto text-center" dir="rtl">
                                                                <input type="radio" id="star5" name="rate" value="5" />
                                                                <label for="star5" title="text">5 stars</label>
                                                                <input type="radio" id="star4" name="rate" value="4" />
                                                                <label for="star4" title="text">4 stars</label>
                                                                <input type="radio" id="star3" name="rate" value="3" />
                                                                <label for="star3" title="text">3 stars</label>
                                                                <input type="radio" id="star2" name="rate" value="2" />
                                                                <label for="star2" title="text">2 stars</label>
                                                                <input type="radio" id="star1" name="rate" value="1" />
                                                                <label for="star1" title="text">1 star</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <div class="m-auto text-center">
                                                    <span id='errorLastRadio'></span>
                                                </div>
                                                {{-- <input type="text" name="order_id" value=""> --}}
                                                <div class="control is-expanded m-2">
                                                    <textarea class="textarea" name="sms" placeholder="Message" required="" > </textarea>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="button is-success rounded-pill" onclick="validateRating()">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="modal-close is-large" aria-label="close"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- End feed back --}}
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function validateRating() {
            if (!(document.getElementById("star1").checked == true ||document.getElementById("star2").checked == true|| document.getElementById("star3").checked == true||document.getElementById("star4").checked == true||))

                document.getElementById("errorLastRadio").innerHTML = "You must be selected at least 1 choice"
            else
                document.getElementById("errorLastRadio").innerHTML = ""


        }


    </script>
@endsection
