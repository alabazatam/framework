<?php
define("VERSION", 1.0);
$options = array();

$options['generate-module-with-db'] = array(
	"name"=>"generate-module-with-db",
	"DB-manager"=> array('mysql','postgresql'),
	"Database"=> "",
	"Table"=> "",
	"html5"=> array("bootstrap"),
);
$options['generate-module-template'] = array(
	"name"=> "generate-module-template",
	"html5"=> array("bootstrap"),

);