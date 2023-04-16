<?php
const CALL_BACK_URI = "http://localhost:8000/callback.php";
const API_BASE_URI = "https://api.gakerbot.net";
const DISCORD_API_BASE_URI = "https://discord.com/api";

const CLIENT_ID = "1096009872262320149";
const CLIENT_SECRET = "aSsGkiUcjYkb42mufO1rC_waz2OLVnS1";

$urlOpt = array(
    'client_id' => CLIENT_ID,
    'redirect_uri' => CALL_BACK_URI,
    'permissions' => '0',
    'response_type' => 'code',
    'scope' => 'identify'
);

$query = http_build_query($urlOpt);

define("INVITE", "https://discord.com/api/oauth2/authorize?" . $query);