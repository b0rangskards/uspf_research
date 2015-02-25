<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    {{ HTML::style('css/admin-vendor.css'); }}
    {{ HTML::style('css/admin.css'); }}
</head>
<body class="login-body">

    <div class="container">

      {{ Form::open(['route' => 'login', 'class' => 'form-signin']) }}

        <h2 class="form-signin-heading">USPF Research Center <br/><small>Sign in now</small></h2>

        <div class="login-wrap">
            <div class="user-login-info">

                {{-- Display Errors Here --}}
                @include('layouts.partials.errors')

                {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => 'autofocus']) }}
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
            </div>

            {{ Form::submit('Sign in', ['class' => 'btn btn-lg btn-login btn-block']) }}
        </div>

      {{ Form::close() }}

    </div>

    {{ HTML::script('js/admin-vendor.js'); }}
</body>
</html>
