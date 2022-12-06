@extends('website._layout.sub')

@section('title', __('frontend.programming'))

@section('content')

    <div class="programming_page">

        {{-- slider --}}
        @include('website.pages.programming._slider')

        {{-- about --}}
        @include('website.pages.programming._about')

        {{-- services --}}
        @include('website.pages.programming._services')

    </div>

@endsection

@push('scripts')
    @if (app()->getLocale() == 'ar')
        <script>
            $(document).ready(function() {
                $('.programming_page .main_slider .owl-carousel').owlCarousel({
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
                $('.programming_page .main_slider .owl-carousel').owlCarousel({
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
