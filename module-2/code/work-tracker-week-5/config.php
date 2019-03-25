<?php

/**
 * Database config
 */

$host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "ben_test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
