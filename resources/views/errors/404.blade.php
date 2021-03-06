<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>@lang('main.error_404')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/public/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/public/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/public/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center my-5">
                            <h1 class="font-weight-bold text-error">4 <span class="error-text">0<img src="/public/assets/images/error-img.png" alt="" class="error-img"></span> 4</h1>
                            <h3 class="text-uppercase">@lang('main.error_404')</h3>
                            <div class="mt-5 text-center">
                                <a class="btn btn-primary waves-effect waves-light" href="{{url()->previous()}}">@lang('main.back')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="/public/assets/libs/jquery/jquery.min.js"></script>
        <script src="/public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/public/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/public/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/public/assets/libs/node-waves/waves.min.js"></script>

        <script src="/public/assets/js/app.js"></script>

    </body>
</html>
