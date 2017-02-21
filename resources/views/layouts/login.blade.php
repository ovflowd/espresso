<!DOCTYPE html>
<html lang="en">
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Housekeeping: Sign in</title>

        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

        <!-- Vendors -->

        <!-- Animate CSS -->
        <link href="/css/animate.min.css" rel="stylesheet">

        <!-- Material Design Icons -->
        <link href="/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- Site CSS -->
        <link href="/css/app-1.min.css" rel="stylesheet">
    </head>

    <body>

    @yield('content')

    <!-- Older IE Warning -->
    <!--[if lt IE 9]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="ie-warning__container">
            <ul class="ie-warning__download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="/img/browsers/chrome.png" alt="">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="/img/browsers/firefox.png" alt="">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="/img/browsers/opera.png" alt="">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="/img/browsers/safari.png" alt="">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="/img/browsers/ie.png" alt="">
                        <div>IE (New)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->


    <!-- Javascript Libraries -->

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
    <script src="/js/jquery.placeholder.min.js"></script>
    <![endif]-->

    <!-- Site Functions & Actions -->
    <script src="/js/app.min.js"></script>
    <script src="/js/bootstrap-notify.min.js"></script>

    @if(Session::has('error'))
        <script>
            $.notify({
                message: 'Wrong username/password combination'
            },{
                type: 'danger',
                allow_dismiss: true,
                placement: {
                    from: 'top',
                    align: 'right'
                },
                delay: 2500,
                animate: {
                    enter: 'animated fadeInUp',
                    exit: 'animated fadeOutDown'
                },
                offset: {
                    x: 30,
                    y: 30
                }
            });
        </script>
    @endif
    @if(Session::has('logged_out'))
        <script>
            $.notify({
                message: 'You logged out of your account successfully'
            },{
                type: 'success',
                allow_dismiss: true,
                placement: {
                    from: 'top',
                    align: 'right'
                },
                delay: 2500,
                animate: {
                    enter: 'animated fadeInUp',
                    exit: 'animated fadeOutDown'
                },
                offset: {
                    x: 30,
                    y: 30
                }
            });
        </script>
    @endif
    </body>
</html>