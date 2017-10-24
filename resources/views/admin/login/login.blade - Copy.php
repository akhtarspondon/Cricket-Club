<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin-Login</title>

    <!-- Bootstrap Core CSS -->
   
     {!!Html::style('admin/vendor/bootstrap/css/bootstrap.min.css')!!}

    <!-- MetisMenu CSS -->
   
    {!!Html::style('admin/vendor/metisMenu/metisMenu.min.css')!!}

    <!-- Custom CSS -->
    
     {!!Html::style('admin/dist/css/sb-admin-2.css')!!}

    <!-- Custom Fonts -->
    
     {!!Html::style('admin/vendor/font-awesome/css/font-awesome.min.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ route('login') }}">
                             {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                               <div class="form-group">
                                    <input class="btn btn-success btn-block" name="btn" type="submit" value="Login">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
   
    {!!Html::style('admin/vendor/jquery/jquery.min.js')!!}

    <!-- Bootstrap Core JavaScript -->
    
     {!!Html::style('admin/vendor/bootstrap/js/bootstrap.min.js')!!}
    <!-- Metis Menu Plugin JavaScript -->
   
     {!!Html::style('admin/vendor/metisMenu/metisMenu.min.js')!!}
    <!-- Custom Theme JavaScript -->
    
     {!!Html::style('admin/dist/js/sb-admin-2.js')!!}
</body>

</html>
