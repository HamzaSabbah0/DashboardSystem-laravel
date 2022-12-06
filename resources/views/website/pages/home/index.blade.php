@extends('website._layout.app')

@section('title', __('frontend.home'))

@section('content')

    <div class="home_page">

        {{-- slider --}}
        @include('website.pages.home._slider')

        {{-- about --}}
        @if ($about)
            @include('website.pages.home._about')
        @endif

        {{-- manager --}}
        @if ($manager_word)
            @include('website.pages.home._manager')
        @endif

        {{-- services --}}
        @include('website.pages.home._services')

        {{-- customers --}}
        @include('website.pages.home._customers')

        {{-- testimonials --}}
        @if (count($testimonials))
            @include('website.pages.home._testimonials')
        @endif

    </div>

@endsection

@push('scripts')
    @if (app()->getLocale() == 'ar')
        <script>
            $(document).ready(function() {
                $('.home_page .home_slider .owl-carousel').owlCarousel({
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

                $('.home_page .testimonials.owl-carousel').owlCarousel({
                    rtl: true,
                    loop: false,
                    margin: 10,
                    nav: true,
                    dots: false,
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
                $('.home_page .home_slider .owl-carousel').owlCarousel({
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

                $('.home_page .testimonials.owl-carousel').owlCarousel({
                    rtl: false,
                    loop: false,
                    margin: 10,
                    nav: true,
                    dots: false,
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
