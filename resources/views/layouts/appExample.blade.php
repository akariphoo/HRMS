<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clean Architecture</title>
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 shadow p-5">
                <a href="{{ route('users.list')}}" class="text-decoration-none text-dark">
                    <div class="text-center p-3">
                        <h2><b>Laravel 8 Clean Architecture</b></h2>
                    </div>
                </a>
                @yield('content')
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <!-- script -->
    <script src="{{ asset('js/all.js') }}"></script>
    @yield('js')
     <!-- end script -->
</body>
</html>
