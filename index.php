<?php
        require_once 'config/config.php';
        // leer parametros
        $controlador = (!empty($_REQUEST['c']))?htmlentities($_REQUEST['c'])
        :CONTROLADOR_PRINCIPAL;
        // index
        $controlador = ucwords(strtolower($controlador))."Controller";
        //IndexController
        $funcion = (!empty($_REQUEST['f']))?htmlentities($_REQUEST['f']):FUNCION_PRINCIPAL;
        //f= index
        require_once 'controller/' . $controlador . '.php';

       /* $funcion = (!empty($_REQUEST['a']))?htmlentities($_REQUEST['a']):FUCIONIONADM;
        //f= index
        require_once 'controller/' . $controlador . '.php';*/



        $cont = new  $controlador();// creacion del objeto controlador 
        $cont->$funcion();// llamada a la funcion del controlador



