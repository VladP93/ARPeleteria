<?php
require 'shared/_layout.view.php';
?>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3 text-white bg-dark mb-3 centrarTxt">
            <br>
            <a href="usuario.php" class="stretched-link text-warning text-warning"><h2 class="centrarTxt">Usuario</h2></a>
            <br>
            <i class="fas fa-user centrarTxt h3"></i>
            <br>
            <br>
            <p style="text-align: justify;">Administración de usuarios. Ver, registrar o modificar acceso de usuarios.</p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 text-white bg-secondary mb-3 centrarTxt">
            <br>
            <a href="roles.php" class="stretched-link text-warning"><h2 class="centrarTxt">Roles</h2></a>
            <br>
            <i class="fas fa-user-tag centrarTxt h3"></i>
            <br>
            <br>
            <p style="text-align: justify;">Administración de roles de usuario, permite agrega, modificar o eliminar roles.</p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 text-white bg-dark mb-3 centrarTxt">
            <br>
            <a href="tiposfactura.php" class="stretched-link text-warning"><h2 class="centrarTxt">Tipos de factura</h2></a>
            <br>
            <i class="fas fa-file-invoice centrarTxt h3"></i>
            <br>
            <br>
            <p style="text-align: justify;">Administración de giro de factura (Consumidor final/Crédito fiscal). Permite modificar o registrar nuevos tipos de factura.</p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 text-white bg-secondary mb-3 centrarTxt">
            <br>
            <a href="categorias.php" class="stretched-link text-warning"><h2 class="centrarTxt">Categorías</h2></a>
            <br>
            <i class="fas fa-tag centrarTxt h3"></i>
            <br>
            <br>
            <p style="text-align: justify;">Administración de las categorías de productos. Permite consultar, agregar, modificar y eliminar categorías.</p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 text-white bg-secondary mb-3 centrarTxt">
            <br>
            <a href="unidadesmedida.php" class="stretched-link text-warning"><h2 class="centrarTxt">Unidades de medida</h2></a>
            <br>
            <i class="fas fa-balance-scale centrarTxt h3"></i>
            <br>
            <br>
            <p style="text-align: justify;">Administración de las unidades de medida de productos. Permite consultar, agregar, modificar y eliminar las unidades de medida.</p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 text-white bg-dark mb-3 centrarTxt">
            <br>
            <a href="conversiones.php" class="stretched-link text-warning"><h2 class="centrarTxt">Conversiones de unidad</h2></a>
            <br>
            <i class="fas fa-exchange-alt centrarTxt h3"></i>
            <br>
            <br>
            <p style="text-align: justify;">Acceso directo al listado de proveedores, permite registrar nuevos proveedores o modificar los existentes.</p>
        </div>
    </div>
</div>
</body>