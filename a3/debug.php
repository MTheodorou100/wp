

<?php
session_start();
include ('tools.php');


preShow($_POST);
preShow($_SESSION);
$aaarg = preShow($my_bad_array, true);
echo "Why is \n $aaarg \n not working?";

printMyCode();

$pricesArrayPHP = array ();
php2js($pricesArrayPHP, 'pricesArrayJS');

styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');

?>
