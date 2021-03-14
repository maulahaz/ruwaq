<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	//--Local pc:
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'ruwaiskita',
	// 
	//--GoDaddy Host setting:
	// 'hostname' => 'localhost',
	// 'username' => 'ruwaiskita_user',
	// 'password' => 'ruwaiskita_pwd',
	// 'database' => 'ruwaiskita',
	//
	//--Batman Host setting:
	// 'hostname' => 'localhost',
	// 'username' => 'maulahaz_ruwais',
	// 'password' => 'DtbyesI649#',
	// 'database' => 'maulahaz_ruwaiskita',
	//
	//--Domainesia Host setting:
	// 'hostname' => 'localhost',
	// 'username' => 'maulahaz_ruwais',
	// 'password' => 'DomyesI649#dbs',
	// 'database' => 'maulahaz_ruwaiskita',
	//
	//--InfinityFree Host setting:
	// 'hostname' => 'sql308.epizy.com',
	// 'username' => 'epiz_23560896',
	// 'password' => 'sZeEPjdjm0sPyg',
	// 'database' => 'epiz_23560896_ruwaiskita',
	//	
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
