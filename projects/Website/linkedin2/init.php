<?php
//session_start();

require 'vendor/autoload.php';
require 'LinkedIn.php';

use myPHPNotes\LinkedIn;

$app_id = '77n0mxulrhsbf0';
$app_secret = '7HDIeM7FUpGCy5i1';
$app_callback = 'http://localhost/apa/projects/website/linkedin2/callback.php';
$app_scopes = 'r_basicprofile r_emailaddress w_member_social rw_company_admin w_share r_liteprofile';

$ssl = false; //always true when we go live
$linkedin = new LinkedIn($app_id, $app_secret, $app_callback, $app_scopes, $ssl);


?>
