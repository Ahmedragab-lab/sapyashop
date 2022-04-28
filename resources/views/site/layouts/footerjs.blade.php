{{-- <script src="{{ asset('front/js/jquery-3.6.0.min') }}"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
{{-- <script src="https://js.pusher.com/6.0/pusher.min.js"></script> --}}


{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> --}}
{{-- <script src="//js.pusher.com/3.1/pusher.min.js"></script> --}}
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}


@if (App::getLocale() == 'ar')
<script src="{{ asset('front/arabic/js/vendor.min.js?v=1557446391092') }}"></script>
<script src="{{ asset('front/arabic/js/scripts.min.js?v=1557446391092') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('front/arabic/js/custom.js?v=1557446391092') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
    <script>
          swal("{{ session('status') }}");
    </script>
@endif
@if(session('error'))
    <script>
          swal("{{ session('error') }}");
    </script>
@endif
@yield('js')

@else
<script src="{{ asset('front/english/js/vendor.min.js?v=1557446391092') }}"></script>
<script src="{{ asset('front/english/js/scripts.min.js?v=1557446391092') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('front/english/js/custom.js?v=1557446391092') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
    <script>
          swal("{{ session('status') }}");
    </script>
@endif
@if(session('error'))
    <script>
          swal("{{ session('error') }}");
    </script>
@endif
@yield('js')
@endif

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- <script src="{{ asset('front/js/owl.carousel.min') }}"></script> --}}
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
<script>
    // setInterval(function(){
    //     $('#noticount').load(window.location.href + "#noticount");
    //     $('#unread').load(window.location.href + "#unread");
    // }, 5000);
</script>


<script src="https://js.pusher.com/7.0/pusher.min.js"></script>


{{-- pusher price --}}
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    Pusher.logToConsole = true;

    var pusher = new Pusher('bb82e65c18afc6a8c12f', {

        cluster: 'mt1'
    // encrypted:false
    });
    var channel = pusher.subscribe('new_price');
    channel.bind('PriceNotification', function(data) {
    alert(JSON.stringify(data));
    });
</script>

<script src="{{ asset('js/pusherNotifications.js') }}"></script>



