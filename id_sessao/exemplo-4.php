<?php

session_id('ofkncku49jq860tn0et5utgnkl');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>