<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    {{ HTML::style('css/vendor.css'); }}
    {{ HTML::style('css/main.css'); }}
</head>
<body>

    <div class="main">
        <div class="sheet clearfix">

        <!--  Nav here -->
        @include('layouts.partials.nav')

            <div class="layout-wrapper">
                <div class="content-layout">
                    <div class="content-layout-row">
                        <div class="layout-cell content">
                            <article class="post article">

                                @yield('content')

                            </article>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Footer here -->
            @include('layouts.partials.footer')

        </div>
    </div>

    {{ HTML::script('js/vendor.js'); }}
    {{ HTML::script('js/main.js'); }}
</body>
</html>
