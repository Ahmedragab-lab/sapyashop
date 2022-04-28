@extends('Admin.layouts.master')
@section('css')
  <!-- DataTables -->
  <link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@section('title')
    empty
@stop
@endsection

@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">Navbar Data</h4>
                        </div>

                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        {{-- <h4 class="mt-0 header-title">Textual inputs</h4>
                        <p class="text-muted m-b-30 font-14">Here are examples of <code
                                class="highlighter-rouge">.form-control</code> applied to each
                            textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                    class="highlighter-rouge">type</code>.</p> --}}
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">اضافة</button>
                                       </div>
                                         <!-- sample modal content -->
                                         <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myModalLabel">اضافة صفحة</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('navbar_data.store') }}" method="post">{{ csrf_field() }}
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="">الاسم عربي</label>
                                                                <input type="text" class="form-control" name="Name" id="Name">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="">English Name</label>
                                                                <input type="text" class="form-control" name="Name_en" id="Name_en">
                                                            </div>
                                                        </div>

                                                        <label for="">لينك الصفحة</label>
                                                        <input type="text" class="form-control" name="route_name" id="route_name">
                                                        <label for="">رقم الترتيب</label>
                                                        <input type="text" class="form-control" name="number_nav" id="number_nav">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">اغلاق</button>
                                                        <button type="submit" class="btn btn-success waves-effect waves-light">حفظ</button>
                                                    </div>
                                                </form>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    <br>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>الكود</th>
                                            <th>الاسم</th>
                                            <th>عمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; ?>
                                            @foreach ($nav as $x)
                                                <?php $i++; ?>
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $x->name }}</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                        </tr>

                                        @endforeach
                                        </tbody>
                                    </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->
@endsection

@section('js')
{{-- <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script> --}}
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('admin/en/assets/pages/datatables.init.js')}}"></script>
<!-- App js -->
<script src="{{ URL::asset('admin/en/assets/js/app.js')}}"></script>
@endsection

