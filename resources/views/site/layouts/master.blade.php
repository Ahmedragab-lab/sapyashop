<!DOCTYPE html >
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}"  lang="en" class="no-js no-svg ">
    <head>
        @include('site.layouts.head_css')
        <div class="pageloader is-active"></div>
        <div id="site-wrap" class="site" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
            @include('site.layouts.upperbar')
            @include('site.layouts.navbar')
            @yield('navslider')
        </div>
        <div id="content-main-wrap" class="is-clearfix">
            <div id="content-area" class="site-content-area">
              <div id="content-area-inner" class="site-content-area-inner">
                @yield('content')
              </div>
            </div>
        </div>
        @include('site.layouts.footer')
        @include('site.layouts.footerjs')
    </body>
</html>
{{-- تم تعديل تقسيم الفرونت شكراااااااااا لكم --}}
