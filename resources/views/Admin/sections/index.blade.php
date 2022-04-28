@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
   <div class="row">

        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{ __('site.sections') }}</h4>
                    <div class="col-md-6 mb-3">
                        <a href="{{ route('sections.create') }}"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i> {{ __('site.add_section') }}</a>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('site.section_name') }}</th>
                                    <th>{{ __('site.image') }}</th>
                                    <th>{{ __('site.status') }}</th>
                                    <th>{{ __('site.description') }}</th>
                                    <th>{{ __('site.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $sections as $index=>$section )
                                <tr>
                                    <th scope="row">{{ $index +1 }}</th>
                                    <td>{{ $section->section_name }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/section/'.$section->image) }}" class="img-thumbnail" width="70" alt="">
                                    </td>
                                    <td>
                                        {{ $section->status ==1 ?  __('site.Avilable'): __('site.Unavilable') }}
                                    </td>
                                    <td>{{ $section->desc }}</td>
                                    <td>
                                        <form action="{{ route('sections.destroy', $section->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('sections.edit', $section->id) }}" class="btn btn-info">{{ __('site.edit') }}</a>
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



        {{-- {!! $dataTable->table() !!} --}}
    {{-- {!! $dataTable->scripts() !!} --}}
@endsection
@section('js')
@endsection
