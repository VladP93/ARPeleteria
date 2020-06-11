<?php
require 'shared/_header.view.php';
?>

<body style="height: 100%;">
    <div class="container-fluid row">
        <div class="col-4"></div>
        <div class="col-4 align-middle margin-top-15p">
            <div class="card">
                <form class="margenFormCard" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <p><b>Bienvenido a AR Trade</b></p>
                    <div class="row">
                        <div class="col-1"><i class="fas fa-user align-bottom"></i></div>
                        <div class="col-11">
                            <input class="form-control" type="text" name="usuario" placeholder="Usuario" />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-1"><i class="fas fa-lock align-bottom"></i></div>
                        <div class="col-11"></i><input class="form-control" type="password" name="contrasena" placeholder="Contraseña" /></div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="alinearIzquierda col-6">
                            <a href="#">Olvidé mi contraseña</a>
                        </div>
                        <div class="col-6 alinearDerecha">
                            <input type="submit" class="btn btn-success" value="Iniciar sesión" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</body>