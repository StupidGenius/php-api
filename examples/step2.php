<?php

// -------------------------------------------
// Step 2 - Process response from CORE
// -------------------------------------------

// include composer autoloader
require('vendor/autoload.php');
define('USE_EXT', 'GMP');

// API Keys
$application_id = ''; //
$public_key = '';  //
$private_key = ''; //

// Get Token from core. DO THIS WITH PROPER SECURITY WHEN DEVELOPING REAL APPLICATIONS
$token = $_GET['token'];

// API Class Setup
$api = new Brave\API('https://core.bravecollective.net/api', $application_id, $private_key, $public_key);

// Hit /info method and get data from token
$result = $api->core->info(array('token' => $token));
var_export($result);

// Make sure to save the token and setup a session to identify that user