<!-- jQuery  -->
<script src="{{ URL::asset('admin/en/assets/js/jquery.min.js')}}"></script>

{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
<script src="{{ URL::asset('admin/en/assets/js/bootstrap.bundle.min.js')}}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<script src="{{ URL::asset('admin/en/assets/js/detect.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/fastclick.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/waves.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.scrollTo.min.js')}}"></script>

@yield('js')

<!--Morris Chart-->
<script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>

<!-- dashboard js -->
<script src="{{ URL::asset('admin/en/assets/pages/dashboard.int.js')}}"></script>
<!-- App js -->
<script src="{{ URL::asset('admin/en/assets/js/app.js')}}"></script>
@toastr_js
@toastr_render

{{-- image preview --}}
<script>
    $(".img").change(function(){
        if(this.files && this.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".img-preview").attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
{{-- end image preview --}}

<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('admin/en/assets/pages/datatables.init.js')}}"></script>
<!-- App js -->
{{-- <script src="{{ URL::asset('admin/en/assets/js/app.js')}}"></script> --}}
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;


    var pusher = new Pusher('bb82e65c18afc6a8c12f', {

        cluster: 'mt1'
    });

    var channel = pusher.subscribe('new_email');
    channel.bind('EmailNotification', function(data) {
        alert(JSON.stringify(data));
    });
</script>
<script src="{{ asset('js/pusherEmail.js') }}"></script>
    {{-- <script type="text/javascript">
        var notificationsWrapper   = $('.dropdown-notifications');
        var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('span[data-count]');
        var notificationsCount     = parseInt(notificationsCountElem.data('count'));
        var notifications          = notificationsWrapper.find('div.wolf');

        if (notificationsCount <= 0) {
          notificationsWrapper.hide();
        }

        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;

        var pusher = new Pusher('bb82e65c18afc6a8c12f', {
            // cluster: 'mt1'
          encrypted: true
        });

        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('new_email');

        // Bind a function to a Event (the full Laravel class)
        channel.bind('App\\Events\\EmailNotification', function(data) {
          var existingNotifications = notifications.html();
          var newNotificationHtml =
            `<a href="" class="dropdown-item notify-item active">
                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                <p class="notify-details">
                    <b></b>
                    <span class="text-muted">`+data.sms+`</span>
                </p>
            </a>`;
          notifications.html(newNotificationHtml + existingNotifications);
          notificationsCount += 1;
          notificationsCountElem.attr('data-count', notificationsCount);
          notificationsWrapper.find('.notif-count').text(notificationsCount);
          notificationsWrapper.show();
        });
    </script> --}}
