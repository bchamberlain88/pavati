<?php

/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database		= 'pavati'; 

/* End config */


$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);


function VisitorIP()
    { 
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $TheIp=$_SERVER['HTTP_X_FORWARDED_FOR'];
    else $TheIp=$_SERVER['REMOTE_ADDR'];
 
    return trim($TheIp);
    }

unset($_SESSION['cart'][0]);
	
$_SESSION['cart'][0] = array('cartNum' => '', 'skew' => '', 'product_name' => '', 'size' => '', 'quantity' => '', 'price' => '');

?>