<?php
require 'shared/_header.view.php';
?>

<body>
    <div class="container-fluid row">
        <div class="col-lg-4 col-md-3 col-sm-2"></div>
        <div class="col-lg-4 col-md-6 col-sm-8 align-middle margin-top-15p">
            <div class="card">
                <form name="login" class="margenFormCard" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <p><b>Bienvenido a AR Trade</b></p>
                    <div class="form-group">
                        <label for="user"><i class="fas fa-user"></i> Usuario:</label>
                        <input type="text" class="form-control" placeholder="Ingrese Usuario" id="user">
                    </div>
                    <div class="form-group">
                        <label for="pwd"><i class="fas fa-lock"></i> Contraseña:</label>
                        <input type="password" class="form-control" placeholder="Ingrese Contraseña" id="pwd">
                    </div>
                    <div class="form-group">
                        <div class="alinearIzquierda">
                            <a href="#">Olvidé mi contraseña</a>
                        </div>
                        <div class="alinearDerecha">
                            <input type="submit" class="btn btn-success" value="Iniciar sesión" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-2"></div>
    </div>
</body>