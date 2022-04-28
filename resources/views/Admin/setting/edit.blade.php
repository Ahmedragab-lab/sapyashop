
@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-9">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.Update_Settings') }}</h4>
                {{-- <a class="btn btn-primary btn-sm" style="margin: 10px;" href="{{ route('settings.update') }}" > {{ __('site.back') }}</a> --}}

                <a class="btn btn-primary btn-sm" style="margin: 10px;" href="{{ route('settings.index') }}" > {{ __('site.back') }}</a>

                <form class="" action="{{route('settings.update',$settings->id) }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')


                    <div class="form-group">
                        <label>{{ __('site.comp_name') }}</label>
                        <input type="text" class="form-control" required name="comp_name"
                        value="{{ $settings->getTranslation('comp_name','ar')  }}" />
                    </div>

                    <div class="form-group">
                        <label>{{ __('site.comp_name_en') }}</label>
                        <input type="text" class="form-control" required name="comp_name_en"
                        value="{{ $settings->getTranslation('comp_name','en')  }}" />
                    </div>



                    <div class="form-group">
                        <label>{{ __('site.about') }}</label>
                        <div>
                            <textarea required class="form-control" rows="5" name="about">{{ $settings->getTranslation('about','ar')  }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>{{ __('site.about_en') }}</label>
                        <div>
                            <textarea required class="form-control" rows="5" name="about_en">{{ $settings->getTranslation('about','en')  }}</textarea>
                        </div>
                    </div>



                    <div class="form-group">
                        <label>{{ __('site.country') }}</label>
                        <input type="text" class="form-control" required name="country"
                       value=" {{ $settings->getTranslation('country','ar')  }}" />
                    </div>


                    <div class="form-group">
                        <label>{{ __('site.country_en') }}</label>
                        <input type="text" class="form-control" required name="country_en"
                        value=" {{ $settings->getTranslation('country','en')  }}" />
                    </div>

                    <div class="form-group">
                        <label>{{ __('site.city') }}</label>
                        <input type="text" class="form-control" required name="city"
                        value=" {{ $settings->getTranslation('city','ar')  }}" />
                    </div>

                    <div class="form-group">
                        <label>{{ __('site.city_en') }}</label>
                        <input type="text" class="form-control" required name="city_en"
                        value=" {{ $settings->getTranslation('city','en')  }}"  />
                    </div>

                    <div class="form-group">
                        <label>{{ __('site.phone1') }}</label>
                        <input type="text" class="form-control" required name="phone1"
                        value="{{ $settings->phone1 }}" />
                    </div>


                    <div class="form-group">
                        <label>{{ __('site.phone2') }}</label>
                        <input type="text" class="form-control" required name="phone2"
                        value="{{ $settings->phone2 }}" />
                    </div>


                    <div class="form-group">
                        <label>{{ __('site.email') }}</label>
                        <input type="text" class="form-control" required name="email"
                        value="{{ $settings->email }}" />
                    </div>

                    <div class="form-group">
                        <label>{{ __('site.websiteLink') }}</label>
                        <input type="text" class="form-control" required name="websiteLink"
                        value="{{ $settings->websiteLink }}" />
                    </div>


                    <div class="form-group">
                        <label>{{ __('site.FBLink') }}</label>
                        <input type="text" class="form-control" required name="FBLink"
                        value="{{ $settings->FBLink }}" />
                    </div>

                    <div class="form-group">
                        <label>{{ __('site.LinLink') }}</label>
                        <input type="text" class="form-control" required name="LinLink"
                        value="{{ $settings->LinLink }}" />
                    </div>


                    <div class="form-group">
                        <label>{{ __('site.YoutubeLink') }}</label>
                        <input type="text" class="form-control" required name="YoutubeLink"
                        value="{{ $settings->YoutubeLink }}" />
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.map') }}</label>
                        <input type="text" class="form-control" required name="map"
                        value="{{ $settings->map }}" />
                    </div>

                    <div class="form-group">
                        <label>{{ __('site.add-image') }} :</label>
                        <div>
                            <input class="form-control img" name="image"  type="file" accept="image/*">
                            <img src="{{ asset('uploads/settings/'. $settings->image) }}" class="img-thumbnail img-preview" width="100" alt="no photo">
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                {{ __('site.Save') }}
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                {{ __('site.Close') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
@endsection







