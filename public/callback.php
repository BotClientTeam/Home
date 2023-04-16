<?php
require "../lib/Rest.php";

$code = $_GET["code"];

var_dump(get_access_token($code));