<?php
require 'shared/_layout.view.php';
?>

<h4 class="text-light">Ingresar nueva categoría</h4><br>
<form class="container-fluid text-light">
    <div class="row"><br>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-id-badge"></i> ID:</label>
            <input type="text" class="form-control" placeholder="#"  disabled />
        </div>
        <div class="col-md-4 col-sm-6">
        <label for="user"><i class="fas fa-tag"></i> Categoría:</label>
            <input type="text" class="form-control" placeholder="Categoría">
        </div>
        <div class="col-md-4 col-sm-6">
            <label for="user"><i class="fas fa-check"></i></label><br>
            <input type="submit" class="btn btn-primary" value="Ingresar" />
        </div>
    </div>
</form>
<br><hr>
<h4 class="text-light">Categorías existentes</h4><br>
<table class="table table-dark">
    <tr>
        <th>ID</th>
        <th>Categoría</th>
    </tr>
    <tr>
        <td>1</td>
        <td>asd</td>
    </tr>
    <tr>
        <td>2</td>
        <td>asd</td>
    </tr>
    <tr>
        <td>3</td>
        <td>asd</td>
    </tr>
    <tr>
        <td>4</td>
        <td>asd</td>
    </tr>
    <tr>
        <td>5</td>
        <td>asd</td>
    </tr>
</table>