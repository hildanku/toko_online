<?php
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
$mt = 0;
if($mt == 1) {
    die("Site under Maintenance.");
}

$config['web'] = array(
	'name' => 'Sunyoruri Store',
    'url' => 'http://localhost/toko_online/'
);	
$config['db'] = array(
	'host' => 'localhost',
    'name' => 'redirwa',
    'user' => 'root',
    'pass' => ''
);
$conn = mysqli_connect($config['db']['host'], $config['db']['user'], $config['db']['pass'], $config['db']['name']);
if(!$conn) {
	die("Koneksi Gagal : ".mysqli_connect_error());
	}
?>