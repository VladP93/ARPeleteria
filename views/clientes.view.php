<?php
require 'shared/_layout.view.php';
?>

<h4 class="text-light">Registro de clientes</h4><br>
<form class="container-fluid text-light">
    <div class="row"><br>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-id-card"></i> DUI:</label>
            <input type="text" class="form-control" placeholder="DUI" />
        </div>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="far fa-id-card"></i> NIT:</label>
            <input type="text" class="form-control" placeholder="NIT">
        </div>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-id-badge"></i> Nombre:</label>
            <input type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-address-card"></i> Dirección:</label>
            <input type="text" class="form-control" placeholder="Dirección">
        </div>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-phone"></i> Teléfono:</label>
            <input type="text" class="form-control" placeholder="Teléfono">
        </div>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-envelope-open-text"></i> e-mail:</label>
            <input type="text" class="form-control" placeholder="e-mail">
        </div>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-user-tag"></i> Tipo:</label>
            <input type="text" class="form-control" placeholder="Tipo de usuario">
        </div>
        <div class="col-md-4 col-sm-6">
            <label for="user"><i class="fas fa-check"></i></label><br>
            <input type="submit" class="btn btn-primary" value="Ingresar" />
        </div>
    </div>
</form>
<br><hr>
<h4 class="text-light">Clientes registrados</h4><br>
<table class="table table-dark">
    <tr>
        <th>DUI</th>
        <th>NIT</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>E-mail</th>
        <th>Tipo</th>
    </tr>
    <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
    </tr>
    <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
    </tr>
    <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
    </tr>
    <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
    </tr>
    <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
    </tr>
</table>