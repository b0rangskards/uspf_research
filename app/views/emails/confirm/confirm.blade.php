<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify Your Email Address</h2>

        <div>
            Thanks for creating an account with USPF Center for Research.
            Please follow the link below to activate your account
            {{ URL::to('admin/register/verify/' . $activation_code) }}.<br/>
        </div>

    </body>
</html>