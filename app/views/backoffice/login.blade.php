<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ddr Propiedades Admin | Login</title>

    <link href="/backoffice/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/backoffice/css/animate.css" rel="stylesheet">
    <link href="/backoffice/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">
                    <img src="/images/dbr_logo.png"    />
                </h1>

            </div>
            <h3>Bienvenido a DbrPropiedades Admin</h3>

            <p>Ingreso al administrador.</p>

            @if (Session::has('mensaje_error'))
                <div class="alert alert-danger" role="alert">
                    <span>
                        {{ Session::get('mensaje_error') }}
                    </span>
                </div>
            @endif

            @if (Session::has('mensaje_success'))
                <div class="alert alert-success" role="alert">
                    <span>
                        {{ Session::get('mensaje_success') }}
                    </span>
                </div>
            @endif

            <?php $message = Session::get('message');   ?>
            <?php if(count($message) > 0){              ?>
                <div class="alert alert-danger" role="alert">
            <?php echo Session::get('message');         ?>
                </div>
            <?php }                                     ?>

            <form class="m-t" role="form" action="/login" method="POST">
                <div class="form-group">
                    <input name="username" type="email" class="form-control" placeholder="E-Mail" required="">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Contraseña" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>DbrPropiedades Admin &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/backoffice/js/jquery-1.10.2.js"></script>
    <script src="/backoffice/js/bootstrap.min.js"></script>

</body>

</html>
