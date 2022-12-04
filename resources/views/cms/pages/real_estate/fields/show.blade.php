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
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">{{ $elevenField->title_ar }}</h5>
                                <p class="card-text">{!! $elevenField->description_ar !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">

                    <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">{{ $elevenField->title_en }}</h5>
                                <p class="card-text">{!! $elevenField->description_en !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">{{ $elevenField->title_tu }}</h5>
                                <p class="card-text">{!! $elevenField->description_tu !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">{{ $elevenField->title_fr }}</h5>
                                <p class="card-text">{!! $elevenField->description_fr !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
