<?php


$mysqli = new mysqli("10.104.0.5","strata","!@#@!strata","espdm_hasil");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

