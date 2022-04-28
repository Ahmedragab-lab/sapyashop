<title>@yield('title')</title>

<link rel="shortcut icon" href="{{ URL::asset('admin/ar/assets/images/favicon.ico')}}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"> -->


<!-- morris css -->
<link rel="stylesheet" href="../plugins/morris/morris.css">

@if (App::getLocale() == 'ar')
     <link href="{{ URL::asset('admin/ar/assets/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ URL::asset('admin/ar/assets/css/icons.css') }}" rel="stylesheet">
     <link href="{{ URL::asset('admin/ar/assets/css/style.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('admin/en/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/en/assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/en/assets/css/style.css') }}" rel="stylesheet">
@endif

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> --}}



@toastr_css
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<script>
     $.ajaxSetup({
                cache:false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            $( document ).ajaxSuccess((e,res)=>console.log((res.responseJSON && res.responseJSON) || res));
            $( document ).ajaxError(function( event, res ) {
                console.log(res.responseJSON.errors || res);
            });
     function toaster(icon, message){
                Toast.fire({
                    icon: icon,
                    title: message,
                })
            }
</script>
@yield('css')
<link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />


