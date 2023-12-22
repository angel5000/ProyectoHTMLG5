<?php

        $titulo="MODULO CLIENTE";
        include_once '../PHPGRUPO5/plantillas/Encabezado.php';
        require_once '../PHPGRUPO5/index.html';
        if(!isset($_SESSION)){
                session_start();
        }
        if(!empty($_SESSION['rol']&&$_SESSION['rol']!=1)){
         header("Location:login.php");
         die();
        
        }
        ?>