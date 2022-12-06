@extends('website._layout.app')

@section('title', __('frontend.who_are_we'))

@section('content')

    <section class="show_activity">
        <div class="banner">
            <img src="{{ asset('website/assets/images/carusel.png') }}" alt="cover" id="cover">
            <div class="content">
                <div class="title">
                    <h3 class="main-title">{{ __('frontend.who_are_we') }}</h3>
                </div>
            </div>
        </div>
        <div class="activity">
            <article>
                <div class="activity-details">
                    <h2>{{ $about['title_' . app()->getLocale()] }}</h2>
                    <br>
                    <p>
                        {!! $about['description_' . app()->getLocale()] !!}
                    </p>
                </div>
                <div class="activity-image">
                    <img src="{{ $about->photo }}" alt="about">
                </div>
            </article>
        </div>
    </section>

@endsection
