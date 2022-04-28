@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.table_event') }}</h4>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('events.create') }}"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i> {{ __('site.add_event') }}</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('site.event_title') }}</th>
                                <th>{{ __('site.event_limit') }}</th>
                                <th>{{ __('site.description') }}</th>
                                <th>{{ __('site.image') }}</th>
                                <th>{{ __('site.status') }}</th>
                                <th>{{ __('site.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $events as $index=>$event )
                            <tr>
                                <th scope="row">{{ $index +1 }}</th>
                                <td>{{ $event->event_title }}</td>
                                <td>{{ $event->limit }}</td>
                                <td>{{ $event->desc }}</td>
                                <td>
                                    <img src="{{ asset('uploads/event/'.$event->image) }}" class="img-thumbnail" width="70" alt="">
                                </td>
                                <td>
                                    {{ $event->status ==1 ?  __('site.Avilable'): __('site.Unavilable') }}

                                </td>


                            <td>

                                <td>
                                    <form action="{{ route('events.destroy', $event->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-info">{{ __('site.edit') }}</a>
                                        <button type="button" class="btn btn-danger"
                                        onclick="confirm('{{ __('site.Warning') }}') ? this.parentElement.submit() : ''">
                                        {{ __('site.delete') }}
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
