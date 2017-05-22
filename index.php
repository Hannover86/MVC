<?php
/**
 * Created by PhpStorm.
 * User: hannover1986
 * Date: 21/05/17
 * Time: 23:25
 * and file_exists('core/controllers/'.$_GET['view'].'Controller.php'))
 */
require ('core/core.php');

if (isset($_GET['view']))  {
    if (file_exists('core/controllers/'.strtolower($_GET['view']).'Controller.php')){
        include ('core/controllers/indexController.php');
    }else{
        include ('core/controllers/errorController.php');
    }
}
    else {
        include ('core/controllers/indexController.php');
    }
?>