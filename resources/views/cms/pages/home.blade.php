@extends('cms._layout.app')

@section('content')
    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget widget-content-area br-4">
                <div class="widget-one bg-light border-0 p-3">

                    <h6>لوحة الإدارة</h6>

                    <p class="mb-0 mt-3">يمكنك من هنا تغير المحتوى الخاص بالموقع.</p>

                    <div class="row layout-spacing mt-5 d-flex justify-content-around">
                        <div class="card component-card col-md-5 col-sm-12 mb-3">
                            <div class="card-body">
                                <h5 class="card-text mb-3">عدد زوار الموقع اليوم</h5>
                                <h6 class="rating-count">({{ $today_visits }}) زائر</h6>
                            </div>
                        </div>
                        <div class="card component-card col-md-5 col-sm-12">
                            <div class="card-body">
                                <h5 class="card-text mb-3">إجمالي عدد زوار الموقع</h5>
                                <h6 class="rating-count">({{ $visitors }}) زائر</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
