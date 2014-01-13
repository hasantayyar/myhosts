#!/usr/bin/env php
<?php
define("DEFAULT_IP_ADDRESS","127.0.0.1");

$params = $argv;
if(!isset($params[1])){
	echo "Usage myhosts <hostname> [<ip>]\n";
	die();
}
$hostname = $params[1];
$ip = isset($params[2])?$params[2]:DEFAULT_IP_ADDRESS;

print_r($params);
