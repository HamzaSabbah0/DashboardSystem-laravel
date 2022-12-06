@extends('cms._layout.app')

@section('content')
    <div class="row layout-top-spacing">
        <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row mb-3">
                        <div class="col-xl-3">
                            <h4>التفاصيل</h4>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-xxl-12">
                            <div class="card">
                                <img src="{{ $elevenActivity->photo }}" class="card-img-top" alt="..." height="400">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">{{ $elevenActivity->title_ar }}</h5>
                                    <p class="card-text">{!! $elevenActivity->description_ar !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">

                        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">{{ $elevenActivity->title_en }}</h5>
                                    <p class="card-text">{!! $elevenActivity->description_en !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">{{ $elevenActivity->title_tu }}</h5>
                                    <p class="card-text">{!! $elevenActivity->description_tu !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">{{ $elevenActivity->title_fr }}</h5>
                                    <p class="card-text">{!! $elevenActivity->description_fr !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
