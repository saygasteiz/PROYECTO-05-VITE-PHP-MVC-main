<?php

session_start();
session_unset();
session_destroy();

// Redirigir a la zona admin en el idioma correspondiente
if($lang == 'eu'){
    header('location:'.$_ENV["RUTA"].'/eu/admin-gunea');
}else{
    header('location:'.$_ENV["RUTA"].'/es/zona-admin');
}
die;
