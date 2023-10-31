
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>SISTEM PENERIMAAN LAPORAN NOTARIS </title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="{{ asset('template/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{ asset('template/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset('template/css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />

        <style>
            /* CSS untuk mengatur logo di tengah */
            .login-logo {
                text-align: center;
            }
        </style>
    </head>
    <body class="bg-black" >
  
        <div class="form-box" id="login-box">
        <div class="login-logo">
            <img src="{{asset ('template/img/Logopengayoman.png')}}" class="brand-image evevation-1" style="opacity: .9" width="150">
         </div>
            <div class="login-logo">
            <div class="header"> Pelayanan Hukum</div>
            <form action="{{url ('post-login')}}" method="post">
            {{csrf_field()}}
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="User ID"/>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>  

                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>

                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block"> Login </button>  
                    <a href="{{url ('register')}}" class="text-center">Register</a>  
                </div>
            </form>
        </div>

        
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('templatejs/bootstrap.min.js')}}" type="text/javascript"></script>        

    </body>
</html>