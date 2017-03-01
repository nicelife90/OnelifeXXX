<?php
$bdd_host = "";
$bdd_username = "";
$bdd_pass = "";
$bdd_port = "";
$bdd_name = "";


$_DB = new mysqli($bdd_host, $bdd_username, $bdd_pass, $bdd_name, $bdd_port);
if ($_DB->connect_errno) {
    echo "MySQL : (" . $_DB->connect_errno . ") " . $_DB->connect_error;
}
$_DB->query("SET NAMES UTF8");
$_DB->set_charset('utf8');