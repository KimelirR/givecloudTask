#!/usr/bin/php 
<?php

require_once('src/rest.inc.php');
require_once('src/config.php');
require_once('src/functions.php');
require_once('src/function.find_date.php');

//Add to array
$ReceiverEmails = ['kimeliryans@gmail.com'];
$company_name = 'Givecloud';

//sets timezone
date_default_timezone_set("Africa/Nairobi");

$page = 1; //we are starting from the first page

$URL = "https://utcatholic.givecloud.co/admin/api/v2/contributions?page={$page}";
$Headers = array('Accept: application/json', 'Content-Type: application/json', "Authorization: Bearer $Token");
// GET
$response = RestCurl::get($URL, $Headers);
$data = $response['data']->data; 

// Lets get total pages from meta
$total_pages = $response['data']->meta->last_page;

$contributions = saveContributions($total_pages, $page, $Headers, $conn, $mail, $ReceiverEmails, $mail_password, $SMTP_username, $company_name);




