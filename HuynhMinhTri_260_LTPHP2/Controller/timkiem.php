<?php
    $action="timsp";
    if(isset($_GET['act']))
    {
        $action=$_GET['act'];
    }
switch($action)
{
    case "timkiem":
        include "View/timsp.php";
        break;
}
?>