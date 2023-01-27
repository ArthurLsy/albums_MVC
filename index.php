<?php

include_once("libraries/utility.php");
utility\includeAll("libraries/");
utility\includeAll("models/");

database\connect("localhost","root","","albums");

if (file_exists("controllers/c_".router\controller().".php")) {
    include("controllers/c_".router\controller().".php");
    $action="ctrl\\".router\controller()."\\".router\action();
    if(function_exists($action)){
        count(router\param())>0 ? call_user_func_array($action, router\param()) : $action(null);
    } else {
        echo "ERREUR : ce controleur n'existe pas";
    }
} else {
    echo "ERREUR : ce controleur n'existe pas";
}

?>
