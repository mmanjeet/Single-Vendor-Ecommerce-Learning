<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <link rel="icon" href="{{ asset(config('global.roles.admin.fav_icon')) }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link href="{{ asset('backend/assets/css/toaster.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/file-uploader/css/fileinput.min.css') }}" rel="stylesheet">
    @stack('style')
</head>

<body class="">

    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    @include('backend.admin.layout.sidebar')
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    @include('backend.admin.layout.header')
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    @section('content') @show()
    <!-- [ Main Content ] end -->

    <script src="{{ asset('backend/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/dashboard-main.js') }}"></script>
    <script src="{{ asset('backend/assets/js/toaster.js') }}"></script>
    <script src="{{ asset('backend/assets/file-uploader/js/plugins/buffer.min.js') }}"></script>
    <script src="{{ asset('backend/assets/file-uploader/js/plugins/filetype.min.js') }}"></script>
    <script src="{{ asset('backend/assets/file-uploader/js/plugins/piexif.js') }}"></script>
    <script src="{{ asset('backend/assets/file-uploader/js/plugins/sortable.js') }}"></script>
    <script src="{{ asset('backend/assets/file-uploader/js/plugins/fileinput.js') }}"></script>


    @if(Session::has('msg'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
        }
    </script>
    @switch((Session::get('msg'))['code'])
    @case(200)
    <script>
        toastr.success("{{(Session::get('msg'))['message']}}")
    </script>
    @break
    @case(100)
    <script>
        toastr.info("{{(Session::get('msg'))['message']}}")
    </script>
    @break
    @case(111)
    <script>
        toastr.warning("{{(Session::get('msg'))['message']}}")
    </script>
    @break
    @case(400)
    <script>
        toastr.error("{{(Session::get('msg'))['message']}}")
    </script>
    @break
    @endswitch
    </script>
    @endif
    @stack('script')
</body>

</html>