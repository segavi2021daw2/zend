<?php


$uid = $_POST["uid"];
$uo = $_POST["uo"];
$oc = $_POST["oc"];
$uidnum = $_POST["uidnum"];
$gidnum = $_POST["gidnum"];
$dirpers = $_POST["dirpers"];
$shell = $_POST["shell"];
$cn = $_POST["cn"];
$sn = $_POST["sn"];
$givenname = $_POST["givenname"];
$padress = $_POST["padress"];
$mobile = $_POST["mobile"];
$telnum = $_POST["givenname"];
$title = $_POST["title"];
$Description = $_POST["Description"];






	require 'vendor/autoload.php';
	use Laminas\Ldap\Attribute;
	use Laminas\Ldap\Ldap;
	
	ini_set('display_errors', 0);
	#
	# Entrada a esborrar: usuari 3 creat amb el projecte zendldap2
	#
	$uid = 'usr3';
	$unorg = 'usuaris';
	$dn = 'uid='.$uid.',ou='.$unorg.',dc=fjeclot,dc=net';
	#
	#Opcions de la connexió al servidor i base de dades LDAP
	$opcions = [
		'host' => 'zend-segavi.fjeclot.net',
		'username' => 'cn=admin,dc=fjeclot,dc=net',
		'password' => 'fjeclot',
		'bindRequiresDn' => true,
		'accountDomainName' => 'fjeclot.net',
		'baseDn' => 'dc=fjeclot,dc=net',		
	];
	#
	# Esborrant l'entrada
	#
	$ldap = new Ldap($opcions);
	$ldap->bind();
	if ($ldap->delete($dn))	echo "<b>Entrada esborrada</b><br>"; 
	else echo "<b>Aquesta entrada no existeix</b><br>";	
?>