@extends('Admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <div class="col-md-6 mb-3">
                        <a href="{{ route('tracking_steps.create') }}"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i> Add tracking_steps</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th> track_no</th>
                                <th>track_name </th>
                                <th> date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tracking_steps as $tracking_step)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$tracking_step->track_no}}</td>
                                    <td>{{$tracking_step->track_name}}</td>
                                    <td>{{$tracking_step->date}}</td>
                                    <td>
                                        <form action="{{ route('tracking_steps.destroy', $tracking_step->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('tracking_steps.edit', $tracking_step->id) }}" class="btn btn-info">{{ __('Edit') }}</a>
                                            <button type="button" class="btn btn-danger"
                                                    onclick="confirm('{{ __('site.Warning') }}') ? this.parentElement.submit() : ''">
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
@endsection
