<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KBBT | Kitchen Management</title>

    <!-- Favicon -->

    <link rel="shortcut icon" href="<?= url('images/favicon.ico') ?>">
    <link rel="stylesheet" href="<?= url('css/backend-plugin.min.css') ?>">
    <link rel="stylesheet" href="<?= url('css/backend.css?v=1.0.0') ?>">
    <link rel="stylesheet" href="<?= url('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= url('vendor/remixicon/fonts/remixicon.css') ?>">

    <link rel="stylesheet" href="<?= url('vendor/tui-calendar/tui-calendar/dist/tui-calendar.css') ?>">
    <link rel="stylesheet" href="<?= url('vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css') ?>">
    <link rel="stylesheet" href="<?= url('vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css') ?>">
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        {{-- Include Side Bar --}}
        @include('layout/sidebar')

        {{-- Include Topbar --}}
        @include('layout/topbar')

        {{-- Include Content --}}
        @yield('content')
    </div>
    <!-- Wrapper End-->

    {{-- Footer --}}
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1">
                        <script>
                            document.write(new Date().getFullYear())
                        </script>©
                    </span> <a href="/" class="">Kue Basah Bang Thoyib</a>.
                </div>
            </div>
        </div>
    </footer>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <!-- Backend Bundle JavaScript -->
    <script src="<?= url('js/backend-bundle.min.js') ?>"></script>

    <!-- Table Treeview JavaScript -->
    <script src="<?= url('js/table-treeview.js') ?>"></script>

    <!-- Chart Custom JavaScript -->
    <script src="<?= url('js/customizer.js') ?>"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="<?= url('js/chart-custom.js') ?>"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="<?= url('js/slider.js') ?>"></script>

    <!-- app JavaScript -->
    <script src="<?= url('js/app.js') ?>"></script>

    <script src="<?= url('vendor/moment.min.js') ?>"></script>
</body>

</html>
