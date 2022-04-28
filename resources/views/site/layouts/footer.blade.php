<!-- #content-main-wrap -->
<div id="footer-top-wrap" class="is-clearfix mt-5">
    <div id="footer-top" class="site-footer-top">
      {{-- <div id="footer-top-inner" class="site-footer-top-inner ">
        <section class="hero clients-section is-clearfix">
          <div class="container">
            <div class="columns is-variable is-4 is-multiline">
              <div class="column is-2-desktop is-12-tablet">
                <h1 class="heading-title style-3 has-text-left">our partners</h1>
              </div>
              <div class="column is-10-desktop is-12-tablet">
                <nav class="clients-list level  owl-carousel no-dots carousel-items-5">
                  <div class="client-item has-text-centered level-item">
                    <a href="#" target="_blank">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/clients/7.png') }}">
                    </a>
                  </div>
                  <div class="client-item has-text-centered level-item">
                    <a href="#" target="_blank">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/clients/8.png') }}">
                    </a>
                  </div>
                  <div class="client-item has-text-centered level-item">
                    <a href="#" target="_blank">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/clients/9.png') }}" ></a>
                  </div>
                  <div class="client-item has-text-centered level-item">
                    <a href="#" target="_blank">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/clients/7.png') }}">
                    </a>
                  </div>
                  <div class="client-item has-text-centered level-item">
                    <a href="#" target="_blank">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/clients/8.png') }}"> </a>
                  </div>
                  <div class="client-item has-text-centered level-item">
                    <a href="#" target="_blank">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/clients/9.png') }}"> </a>
                  </div>
                  <div class="client-item has-text-centered level-item">
                    <a href="#" target="_blank">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/clients/7.png') }}"> </a>
                  </div>
                  <div class="client-item has-text-centered level-item">
                    <a href="#" target="_blank">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/clients/8.png') }}"> </a>
                  </div>
                  <div class="client-item has-text-centered level-item">
                    <a href="#" target="_blank">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/clients/9.png') }}"> </a>
                  </div>
                  <div class="client-item has-text-centered level-item">
                    <a href="#" target="_blank">
                      <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/clients/7.png') }}"> </a>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </section>
      </div> --}}
      <!-- #footer-top-inner -->
    </div>
    <!-- #footer-top -->
  </div>
  <!-- #footer-top-wrap -->

  <div id="footer-wrap" class="is-clearfix">
    <footer id="footer" class="site-footer">
      <div id="footer-inner" class="site-footer-inner container">
        <div class="columns is-variable is-6 is-multiline">
            @foreach (\App\Models\Setting::get() as $settings )
          <div class="column is-4">
            <div class="widget widget-html">
              <div class="textwidget">
                <div id="footer-logo" class="site-logo ">
                  <a href="{{ route('front.index') }}">
                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('uploads/settings/'.$settings->image) }}">

                    <span class="logo-text">حول الشركة</span>
                  </a>
                </div>
                <!-- #footer-logo -->
                <br>

                {{-- <p>شركة مورا سوفت لخدمات النقل والشحن بمختلف الطرق ..
                    تعمل الشركة على خدمتك على مدار الساعة ونقل شحناتك وتوصيلها عبر أأمن الطرق وافضل الاسعار
                </p> --}}

                <p>{{ $settings->about }}</p>

                <div class="footer-social-links ">
                  <ul>
                    <li>
                      <a href="{{ $settings->FBLink }}" target="_blank">
                        <span class="icon">
                          <i class="fab fa-facebook-f"></i>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ $settings->LinLink }}" target="_blank">
                        <span class="icon">
                          <i class="fab fa-linkedin"></i>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ $settings->YoutubeLink }}" target="_blank">
                        <span class="icon">
                          <i class="fab fa-youtube"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- .textwidget -->
            </div>
          </div>
          <!-- .column -->

          <div class="column">
            <div class="widget widget-links" >
              <h3  class="widget-title ">{{ __('front.services') }}</h3>
                <ul list-style: none>

                    <li >
                        @foreach (\App\Models\Service::where('status','1')->get() as $service)

                        <li ><a href="{{ route('allservices.show',$service->id) }}"> {{$service->serve_name }} </a></li>

                        @endforeach
                    </li>
                </ul>

              </h3>

            </div>
            <!-- .widget -->
          </div>
          <!-- .column -->
          <div class="column">
            <div class="widget widget-links">
              <h3 class="widget-title ">{{ __('front.sections') }}</h3>
              <ul>
                <li list-style:none>
                    @foreach (\App\Models\Section::where('status','1')->get() as $section)
                        <li ><a href="{{ route('allsections.show',$section->id) }}"> {{$section->section_name}} </a></li>
                    @endforeach
                </li>
                     {{-- <li>
                    <a href="./index.html">التخزين</a>
                    </li>
                    <li>
                    <a href="./index.html">الشحن البحري</a>
                    </li>
                    <li>
                    <a href="./index.html">الشحن الجوي</a>
                    </li>
                    <li>
                    <a href="./index.html">النقل البري</a>
                    </li>
                    <li>
                    <a href="./index.html"> بضائع وحدات</a>
                    </li>  --}}
              </ul>
            </div>
            <!-- .widget -->
          </div>
             <!-- .column -->

            {{--
          <li class="has-dropdown">
            <a href="#"> {{ __('front.sections') }}</a>
            <ul class="dropdown">
                @foreach (\App\Models\Section::where('status','1')->get() as $section)
                <li><a href="{{ route('allsections.show',$section->id) }}">{{$section->section_name}}</a></li>
                @endforeach
            </ul>
            </li> --}}



            {{-- <p> {{ \App\Models\setting->city }} --}}




          <div class="column is-4">
            <div class="widget widget-form">

            <p>  contact us</p>

              <p>{{ $settings->city }}</p>

              <p>{{ $settings->country }}</p>



                {{-- <p> {{ $settings->city }}

                <br> {{ $settings->country }}</p> --}}

              {{-- <div class="media-content"> --}}
                <p>{{ __('site.phone1') }} :  {{ $settings->phone1 }}</p>
                <p>{{ __('site.phone2') }} :  {{ $settings->phone2 }}</p>
                {{-- <p>{{ $settings->phone1 }}
                  <br> {{ $settings->phone2 }}</p> --}}
            </div>


                <p>{{ $settings->email }}</p>

              {{-- <p>{{ $settings->email }}
                <br>{{ $settings->websiteLink }}</p> --}}
              {{-- <p></p> --}}
              {{-- <br> --}}
              {{-- <form>
                <div class="field">
                  <div class="control is-expanded">
                    <input class="input" type="text" placeholder="your@email.com">
                    <button type="submit" class="button is-radiusless">
                      <span class="icon">
                        <i class="ion-ios-arrow-round-forward-outline"></i>
                      </span>
                    </button>
                  </div>
                </div>
              </form> --}}
            {{-- </div> --}}
          </div>
          <!-- .column -->
          @endforeach
        </div>
        <!-- .columns -->
      </div>
      <!-- #footer-inner -->
    </footer>
    <!-- #footer -->
  </div>
  <!-- #footer-wrap -->
  <div id="footer-bottom-wrap" class="is-clearfix">
    <div id="footer-bottom" class="site-footer-bottom">
      <div id="footer-bottom-inner" class="site-footer-bottom-inner ">
        <section class="section footer-bottom-content">
          <div class="container">
            <h2 class="display-none">footer</h2>
            <div class="level">
              <div class="level-left">
                <span class="footer-copyright">
                  <a href='/'></a> ©
                  <span class='current-year'></span>.{{ __('front.copyright') }} . </span>
              </div>
              <!-- .level-left -->
              <div class="level-right">
                <div class="nav-wrap">
                  <nav class="main-navigation right">
                    <ul class="menu">
                      {{-- <li>
                        <a href="./pages/about.html">من نحن</a>
                      </li> --}}
                      <li>
                        <a href="{{ route('allproducts.index') }}">{{ __('front.products') }}</a>
                      </li>
                       <li>
                        <a href="{{ route('allservices.index') }}">{{ __('front.services') }}</a>
                      </li>
                       {{-- <li>
                        <a href="{{ route('allsections.index') }}">allsections</a>
                      </li> --}}
                      {{-- <li>
                        <a href="./pages/contact.html">اتصل بنا</a>
                      </li> --}}
                    </ul>
                  </nav>
                  <!-- #site-navigation -->
                </div>
                <!-- #nav-wrap -->
              </div>
              <!-- .level-right -->
            </div>
            <!-- .level -->
          </div>
        </section>
        <!-- .footer-bottom-content -->
      </div>
      <!-- #footer-bottom-inner -->
    </div>
    <!-- #footer-bottom -->
  </div>
  <!-- #footer-bottom-wrap -->
  <!-- show floating buttons -->
  <div class="floating_buttons is-animate">
    <a href="javascript:void(0);" class="float" id="menu-share">
      <span class="icon">
        <i class="icon-settings"></i>
      </span>
    </a>
    <ul>
      <li>
        <a href="https://1.envato.market/Jozoor" target="_blank" class="tooltip is-tooltip-right" data-tooltip="شراء الآن">
          <span class="icon">
            <i class="icon-bag"></i>
          </span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0);" class="tooltip is-tooltip-right" data-tooltip="القوالب المتاحة" data-show="quickview" data-target="quickviewDemos">
          <span class="icon">
            <i class="icon-screen-desktop"></i>
          </span>
        </a>
      </li>
      <li>
        <a href="https://themes.jozoor.com/html/joo/corporate/03/" target="_blank" class="tooltip is-tooltip-right" data-tooltip="النسخة الإنجليزية">
          <span class="icon">
            <i class="icon-refresh"></i>
          </span>
        </a>
      </li>
      <li>
        <a href="https://t.me/jozor" target="_blank" class="tooltip is-tooltip-right" data-tooltip="دردشة مباشرة">
          <span class="icon">
            <i class="icon-paper-plane"></i>
          </span>
        </a>
      </li>
    </ul>
  </div>
  <div id="quickviewDemos" class="quickview">
    <div class="quickview-header">
      <p class="title">القوالب المتاحة</p>
      <span class="delete" data-dismiss="quickview"></span>
    </div>
    <div class="quickview-body">
      <div class="quickview-block">
        <div class="image-hover effect-5">
          <div class="columns is-variable is-multiline is-2">
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/portfolio//demos/creative-1.png') }}"> --}}
                <figcaption>
                  <h5>إبداعى 01</h5>
                  {{-- <a href="https://themes.jozoor.com/html/joo/creative/01/rtl/" target="_blank">View more</a> --}}
                </figcaption>
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/portfolio//demos/corporate-1.png') }}"> --}}
                <figcaption>
                  <h5>شركات 01</h5>
                  {{-- <a href="https://themes.jozoor.com/html/joo/corporate/01/rtl/" target="_blank">View more</a> --}}
                </figcaption>
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{ asset('front/images/portfolio//demos/entertainment-2.png') }}"> --}}
                <figcaption>
                  <h5>مطعم برجر</h5>
                  {{-- <a href="https://themes.jozoor.com/html/joo/entertainment/02/rtl/" target="_blank">View more</a> --}}
                </figcaption>
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/wedding-1.png"> --}}
                <figcaption>
                  <h5>حفل زفاف</h5>
                  {{-- <a href="https://themes.jozoor.com/html/joo/wedding/01/rtl/" target="_blank">View more</a> --}}
                </figcaption>
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/corporate-2.png"> --}}
                <figcaption>
                  <h5>شركات 02</h5>
                  {{-- <a href="https://themes.jozoor.com/html/joo/corporate/02/rtl/" target="_blank">View more</a> --}}
                </figcaption>
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/entertainment-3.png"> --}}
                <figcaption>
                  <h5>صالون حلاقة</h5>
                  {{-- <a href="https://themes.jozoor.com/html/joo/entertainment/03/rtl/" target="_blank">View more</a> --}}
                </figcaption>
              </figure>
            </div>
            <div class="column is-6 is-active">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/corporate-3.png"> --}}
                <span class="tag menu-mark is-primary">مفعل</span>
                <figcaption>
                  <h5>شركة شحن</h5>
                </figcaption>
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/entertainment-1.png"> --}}
                <figcaption>
                  <h5>مطعم 01</h5>
                  {{-- <a href="https://themes.jozoor.com/html/joo/entertainment/01/rtl/" target="_blank">View more</a> --}}
                </figcaption>
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/wedding-2.png"> --}}
                <figcaption>
                  <h5>منظم حفلات</h5>
                  {{-- <a href="https://themes.jozoor.com/html/joo/wedding/02/rtl/" target="_blank">View more</a> --}}
                </figcaption>
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/corporate-4.png"> --}}
                <figcaption>
                  <h5>شركة شحن 02</h5>
                  {{-- <a href="https://themes.jozoor.com/html/joo/corporate/04/rtl/" target="_blank">View more</a> --}}
                </figcaption>
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/creative-2.png">
                <figcaption>
                  <h5>إبداعى 02</h5>
                  <a href="https://themes.jozoor.com/html/joo/creative/02/rtl/" target="_blank">View more</a>
                </figcaption> --}}
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/wedding-3.png">
                <figcaption>
                  <h5>فساتين الزفاف</h5>
                  <a href="https://themes.jozoor.com/html/joo/wedding/03/rtl/" target="_blank">View more</a>
                </figcaption> --}}
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/specialty-1.png"> --}}
                <figcaption>
                  <h5>تحت الإنشاء</h5>
                  <a href="https://themes.jozoor.com/html/joo/specialty/01/rtl/" target="_blank">View more</a>
                </figcaption>
              </figure>
            </div>
            <div class="column is-6">
              <figure>
                {{-- <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/creative-3.png"> --}}
                <figcaption>
                  <h5>إبداعى 03</h5>
                  <a href="https://themes.jozoor.com/html/joo/creative/03/rtl/" target="_blank">View more</a>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
