@extends('website._layout.app')

@section('title', __('frontend.sport'))

@section('content')

    <section class="show_activity">
        <div class="banner">
            <img src="{{ asset('website/assets/images/carusel.png') }}" alt="cover" id="cover">
            <div class="content">
                <div class="title">
                    <h3 class="main-title">{{ __('frontend.sport') }}</h3>
                </div>
            </div>
        </div>
        <div class="activity">
            <article>
                <div class="activity-details">
                    <h2>{{ $activity['title_' . app()->getLocale()] }}</h2>
                    <p>
                        {!! $activity['description_' . app()->getLocale()] !!}
                    </p>
                </div>
                <div class="activity-image">
                    <img src="{{ $activity->photo }}" alt="activity">
                </div>
            </article>
        </div>
    </section>

@endsection
