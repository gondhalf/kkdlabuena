<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/registrar-estilo.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/registrar.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <div class="search-box">
                <div class="caption">
                    <h3>Formulario de registro</h3>
                </div>
                <form action="principal" class="loginForm" method="post">
                    <div class="input-group">
                        <input type="text" id="name" class="form-control" placeholder="Usuario">
                        <input type="password" id="paw" class="form-control" placeholder="Contraseña">
                        <input type="text" id="telefono" class="form-control" placeholder="Telefono">
                        <input type="text" id="email" class="form-control" placeholder="Email">
                        <input type="submit" id="submit" class="form-control" value="Registrarse">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="aro-pswd_info">
                <div id="pswd_info">
                    <h4>Requesitos de la contraseña</h4>
                    <ul>
                        <li id="letter" class="invalid">Tiene <strong>una letra</strong></li>
                        <li id="capital" class="invalid">Tiene <strong>una letra en mayuscula</strong></li>
                        <li id="number" class="invalid">Tiene <strong>un numero</strong></li>
                        <li id="length" class="invalid">Tiene minimo <strong>8 caracteres</strong></li>
                        <li id="space" class="invalid">Debe<strong> usar [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>