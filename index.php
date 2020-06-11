<?php

require './views/index.view.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: inicio.php');
}