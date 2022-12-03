<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>لوحة الإدارة</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('cms/src/assets/img/favicon.ico') }}" />
    <link href="{{ asset('cms/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cms/layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('cms/layouts/vertical-light-menu/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('cms/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cms/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('cms/layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN FILE UPLOAD -->
    <link rel="stylesheet" href="{{ asset('cms/src/plugins/src/file-upload/file-upload-with-preview.min.css') }}">
    <!-- END FILE UPLOAD -->

    {{-- summernote --}}
    <link rel="stylesheet" href="{{ asset('cms/src/plugins/src/summernote/summernote-bs5.css') }}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('cms/src/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/src/assets/css/fontawesome.min.css') }}">

    {{-- Custom --}}
    <link rel="stylesheet" href="{{ asset('cms/src/assets/css/custom.css') }}">

    @stack('styles')

</head>

<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    @include('cms._includes._loader')
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('cms._includes._header')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('cms._includes._sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content p-0">
                    @yield('content')
                </div>
            </div>
            <!--  BEGIN FOOTER  -->
            @include('cms._includes._footer')
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('cms/src/assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('cms/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cms/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('cms/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('cms/layouts/vertical-light-menu/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN FILE UPLOAD -->
    <script src="{{ asset('cms/src/plugins/src/file-upload/file-upload-with-preview.min.js') }}"></script>
    {{-- <script src="{{ asset('cms/src/plugins/src/filepond/custom-filepond.js') }}"></script> --}}
    <!-- END FILE UPLOAD -->

    {{-- summernote --}}
    <script src="{{ asset('cms/src/plugins/src/summernote/summernote-bs5.js') }}"></script>
    <script src="{{ asset('cms/src/plugins/src/summernote/lang/summernote-ar-AR.js') }}"></script>
    <script src="{{ asset('cms/src/plugins/src/summernote/lang/summernote-en-US.js') }}"></script>

    <script src="{{ asset('cms/src/assets/js/all.min.js') }}"></script>
    <script src="{{ asset('cms/src/assets/js/fontawesome.min.js') }}"></script>

    @stack('scripts')

</body>

</html>
