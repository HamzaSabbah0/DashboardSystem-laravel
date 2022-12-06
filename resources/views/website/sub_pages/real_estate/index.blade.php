@extends('website._layout.sub')

@section('title', __('frontend.real_estate'))

@section('content')

    <div class="real_estate_page">

        {{-- slider --}}
        @include('website.pages.real_estate._slider')

        {{-- about --}}
        @if ($about)
            @include('website.pages.real_estate._about')
        @endif

        {{-- activities --}}
        @include('website.pages.real_estate._fields')

        {{-- partnerships --}}
        @include('website.pages.real_estate._partnerships')

    </div>

@endsection

@push('scripts')
    @if (app()->getLocale() == 'ar')
        <script>
            $(document).ready(function() {
                $('.real_estate_page .main_slider .owl-carousel').owlCarousel({
                    loop: true,
                    rtl: true,
                    margin: 10,
                    nav: true,
                    dots: true,
                    items: 1,
                    navText: [
                        '<i class="fa-solid fa-chevron-right"></i>',
                        '<i class="fa-solid fa-chevron-left"></i>'
                    ],
                });
            });
        </script>
    @else
        <script>
            $(document).ready(function() {
                $('.real_estate_page .main_slider .owl-carousel').owlCarousel({
                    loop: true,
                    rtl: false,
                    margin: 10,
                    nav: true,
                    dots: true,
                    items: 1,
                    navText: [
                        '<i class="fa-solid fa-chevron-left"></i>',
                        '<i class="fa-solid fa-chevron-right"></i>'
                    ],
                });
            });
        </script>
    @endif
@endpush
