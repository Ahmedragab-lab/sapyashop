@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.settings') }}</h4>

                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('site.comp_name') }}</th>
                                <th>{{ __('site.about') }}</th>
                                <th>{{ __('site.phone1') }}</th>
                                <th>{{ __('site.phone2') }}</th>
                                <th>{{ __('site.country') }}</th>
                                <th>{{ __('site.city') }}</th>
                                <th>{{ __('site.email') }}</th>
                                <th>{{ __('site.websiteLink') }}</th>
                                <th>{{ __('site.FBLink') }}</th>
                                <th>{{ __('site.LinLink') }}</th>
                                <th>{{ __('site.YoutubeLink') }}</th>
                                <th>{{ __('site.map') }}</th>
                                <th>{{ __('site.logo') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $settings as $index=>$Setting )
                            <tr>
                                <th scope="row">{{ $index +1 }}</th>
                                <td>{{ $Setting->comp_name }}</td>
                                <td>{{ Str::limit($Setting->about,10) }}</td>
                                <td>{{ $Setting->phone1 }}</td>
                                <td>{{ $Setting->phone2 }}</td>
                                <td>{{ $Setting->country }}</td>
                                <td>{{  Str::limit($Setting->city,10) }}</td>
                                <td>{{ $Setting->email }}</td>
                                <td>{{ $Setting->websiteLink }}</td>
                                <td>{{ $Setting->FBLink }}</td>
                                <td>{{ $Setting->LinLink }}</td>
                                <td>{{ $Setting->YoutubeLink }}</td>
                                <td>{{ Str::limit($Setting->map,20) }}</td>
                                <td>
                                    <img src="{{ asset('uploads/settings/'.$Setting->image) }}" class="img-thumbnail" width="70" alt="">
                                </td>
                                <td>
                                     {{-- <form action="{{ route('agreements.destroy', $agreement->id) }}" method="post"> --}}
                                        @csrf
                                       {{-- @method('delete') --}}
                             <a href="{{ route('settings.edit', $Setting->id) }}" class="btn btn-info">{{ __('site.edit') }}</a>
                                        {{-- <button type="button" class="btn btn-danger"
                                        onclick="confirm('{{ __('site.Warning') }}') ? this.parentElement.submit() : ''">
                                            {{ __('Delete') }}
                                        </button>
                                    </form>  --}}
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
