<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    {{ HTML::style('css/admin-vendor.css'); }}
    {{ HTML::style('css/admin.css'); }}
</head>
<body>

    <div id="container">

        <!--  Nav here -->
        @include('layouts.partials.admin-nav')

        <!--  Side Nav here -->
        @include('layouts.partials.admin-sidenav')

        <!-- Main content here -->
        <section id="main-content">
            <section class="wrapper">

                @yield('content')

            </section>
        </section>

    </div>

    {{ HTML::script('js/admin-vendor.js'); }}
</body>
</html>
