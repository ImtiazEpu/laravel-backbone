<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ __('backbone.app.description') }}">
    <meta name="author" content=" Muhammad Sumon Molla Selim">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <title>{{ __('backbone.app.name') }} - {{ __('backbone.app.description') }}</title>

    <!-- Fonts -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

<section class="coming-soon-area coming-soon-two mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="coming-soon-content">
                    <div class="coming-soon-image image-one d-none d-md-block">
                        <img src="{{ asset('assets/images/landing-image-1.png') }}" alt="{{ __('backbone.app.name') }}">
                    </div>

                    <div class="coming-soon-image image-two">
                        <img src="{{ asset('assets/images/landing-image-2.png') }}" alt="{{ __('backbone.app.name') }}">
                    </div>

                    <div class="coming-soon-image image-three d-none d-md-block">
                        <img src="{{ asset('assets/images/landing-image-3.png') }}" alt="{{ __('backbone.app.name') }}">
                    </div>

                    <div class="coming-soon-content-wrapper text-center">
                        <h3 class="coming-soon-title">
                            {{ __('backbone.app.name') }}
                        </h3>

                        <p class="text">
                            {{ __('backbone.landing.text1') }}
                            <br/>
                            {{ __('backbone.landing.text2') }}
                        </p>

                        <div class="coming-soon-newsletter" id="app">
                            <subscription-form></subscription-form>
                        </div>

                        <p class="subscribe-text">
                            {{ __('backbone.landing.subscribe-text') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
