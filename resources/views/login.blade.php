<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Miminium Admin Template v.1">
    <meta name="author" content="Isna Nur Azis">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('constant.title')}}</title>
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css" />
    <link href="asset/css/style.css" rel="stylesheet">
    <!-- end: Css -->
    <link rel="shortcut icon" href="asset/img/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="mimin" class="dashboard form-signin-wrapper">
    <div class="container" style="display: flex; justify-content: center;align-items: center;height: 100vh">
        <form class="form-signin" action="login" method="post">
            @csrf
            <div class="panel periodic-login">
                <div class="panel-body text-center">
                    <h1 class="atomic-symbol">L<span style="font-size: 8rem;">ogin</span></h1>
                    <i class="icons icon-arrow-down"></i>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" name="email" required="">
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" class="form-text" name="password" required="">
                        <span class="bar"></span>
                        <label>Password</label>
                    </div>
                    {{session('resp')}}
                    <input type="submit" class="btn col-md-12" value="Log In" />
                </div>
            </div>
        </form>
    </div>
    <!-- end: Content -->
    <!-- start: Javascript -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/plugins/moment.min.js"></script>
    <script src="asset/js/plugins/icheck.min.js"></script>
    <!-- custom -->
    <script src="asset/js/main.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_flat-aero',
            radioClass: 'iradio_flat-aero'
        });
    });

    </script>
    <!-- end: Javascript -->
</body>

</html>
