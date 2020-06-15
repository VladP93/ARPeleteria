<?php
require 'shared/_layout.view.php';
?>
<h4 class="text-light">Ingresar nuevo producto</h4><br>
<form class="container-fluid text-light">
    <div class="row"><br>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-box-open"></i> Producto:</label>
            <input type="text" class="form-control" placeholder="Producto" />
        </div>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-bars"></i> Descripcion:</label>
            <input type="text" class="form-control" placeholder="Descripción">
        </div>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-chart-line"></i> Cantidad:</label>
            <input type="text" class="form-control" placeholder="Cantidad">
        </div>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-tag"></i> Categoría:</label>
            <input type="text" class="form-control" placeholder="Categoría">
        </div>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-balance-scale"></i> Unidad de medida:</label>
            <input type="text" class="form-control" placeholder="Unidad de medida">
        </div>
        <div class="col-md-4 col-sm-6">
            <label for="user"><i class="fas fa-check"></i></label><br>
            <input type="submit" class="btn btn-primary" value="Ingresar" />
        </div>
    </div>
</form>
<br><hr>
<h4 class="text-light">Productos en existencia</h4><br>
<table class="table table-dark">
    <tr>
        <th>Producto</th>
        <th>Descripcion</th>
        <th>Cantidad disponible</th>
        <th>Categoria</th>
        <th>Unidad</th>
    </tr>
    <tr>
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
    </tr>
    <tr>
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
    </tr>
    <tr>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
        <td>asd</td>
    </tr>
</table>