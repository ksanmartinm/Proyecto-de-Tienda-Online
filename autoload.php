<?php
function autocargar($classname){
    include 'controller/'. $classname .'.php';
}
spl_autoload_registrer('controllers_autoload');

?>