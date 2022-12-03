@extends('cms._layout.app')

@section('content')
    <div id="tableHover" class="col-lg-12 col-12 layout-spacing layout-top-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row mb-3">
                    <div class="col-xl-3">
                        <h4>التفاصيل</h4>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-3">
                        <div class="card">
                            <img src="{{ $testimonial->photo }}" class="card-img-top" alt="..." height="200">
                            <div class="card-body">
                                <h5 class="card-title">{{ $testimonial->title_ar }}</h5>
                                <h6>{{ $testimonial->name_ar }}</h6>
                                <h6 class="mb-3">{{ $testimonial->career_title_ar }}</h6>
                                <p class="card-text">{!! $testimonial->description_ar !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">

                    <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $testimonial->title_en }}</h5>
                                <h6>{{ $testimonial->name_en }}</h6>
                                <h6 class="mb-3">{{ $testimonial->career_title_en }}</h6>
                                <p class="card-text">{!! $testimonial->description_en !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $testimonial->title_tu }}</h5>
                                <h6>{{ $testimonial->name_tu }}</h6>
                                <h6 class="mb-3">{{ $testimonial->career_title_tu }}</h6>
                                <p class="card-text">{!! $testimonial->description_tu !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $testimonial->title_fr }}</h5>
                                <h6>{{ $testimonial->name_fr }}</h6>
                                <h6 class="mb-3">{{ $testimonial->career_title_fr }}</h6>
                                <p class="card-text">{!! $testimonial->description_fr !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
