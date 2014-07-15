<?php
include('../class/config.php');
include_once('../class/xampp.php');
$xampp = new XamppDomainAdder;
header('Content-Type: application/json');
$ip = $_GET['ip'];
$domainName = $_GET['domain'];
$addHost = $xampp->addHost($hostfileLocation,$vhostFileLocation,$ip,$domainName,$DocumentRoot,$domainName);
$array = array(
		    "output" => "Success"
		);
		echo json_encode($array);
?>