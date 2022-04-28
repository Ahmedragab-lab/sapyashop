@extends('Admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-9">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">update tracking_steps</h4>
                    <a class="btn btn-primary btn-sm" style="margin: 10px;" href="{{ route('tracking_steps.index') }}">رجوع</a>
                    <form class="" action="{{ route('tracking_steps.update',$tracking_steps->id) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputName" class="control-label">order_no </label>
                            <input type="text" class="form-control"  readonly id="inputName" name="track_no"
                                   value="{{$tracking_steps->track_no}}">
                        </div>

                        <div class="form-group">
                            <label>track_name</label>
                            <input type="text" class="form-control" required placeholder="Enter track_name  " name="track_name"
                                   value="{{$tracking_steps->track_name }}"/>
                        </div>

                        <div class="form-group">
                            <label for="title">date</label>
                            <input class="form-control" type="text"  id="datepicker-action"
                                   name="date" data-date-format="yyyy-mm-dd"  value="{{$tracking_steps->date }}">
                              <br><br>
                              
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Save
                                    </button>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
        @endsection

