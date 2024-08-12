<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="https://dev.megabots.app/cmspromo/assets/img/fav.png">
        <title>Mobil Promo CMS</title>
        <link href="https://dev.megabots.app/cmspromo/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link href="https://dev.megabots.app/cmspromo/assets/css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <body style="background-color: #4723d9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <a href="http://mymegamobile.com/" targe="_blank">
                                                <img src="https://dev.megabots.app/cmspromo/assets/img/logo.png" width="100%" class="mb-3">
                                            </a>
                                            <h1 class="h4 text-gray-900 mb-4">Mobil Promo CMS</h1>
                                        </div>
                                        <form data-toggle="validator" class="user" method="post" action="{{ route('cms/login') }}">      
                                            @csrf
                                                          
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user"
                                                    placeholder="Email"
                                                    name="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    placeholder="Password"
                                                    name="password">
                                            </div>
                                            
                                            <button class="btn btn-primary btn-user btn-block">
                                                LOGIN
                                            </button>    
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://dev.megabots.app/cmspromo/assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://dev.megabots.app/cmspromo/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://dev.megabots.app/cmspromo/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://dev.megabots.app/cmspromo/assets/js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>    
</html>