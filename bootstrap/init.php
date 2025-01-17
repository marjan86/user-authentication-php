<?php
session_start();
date_default_timezone_set('Asia/Tehran');

require "constant.php";
require BASE_PATH . "vendor/autoload.php";
require "config.php";
require "mail.php";
require BASE_PATH . "libs/helpers.php";
require BASE_PATH . "libs/auth-lib.php";


try {
  $pdo = new PDO("mysql:host=$database_config->host;dbname=$database_config->dbname", 
  $database_config->user, $database_config->password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}