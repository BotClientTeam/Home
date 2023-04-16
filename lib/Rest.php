<?php
    require "definition.php";

    function get_access_token($code) {
        $data = array(
            "client_id" => CLIENT_ID,
            "client_secret" => CLIENT_SECRET,
            "grant_type" => "authorization_code",
            "code" => $code,
            "redirect_uri" => CALL_BACK_URI,
            "scope" => "identify"
        );

        $data = http_build_query($data, "", "&");

        $header = array(
            "Content-Type: application/x-www-form-urlencoded",
            "Content-Length: ".strlen($data)
        );

        $options =array(
            'http' =>array(
                'method' => 'POST',
                'header' => implode("\r\n", $header),
                'content' => $data
            )
        );

        $contents = file_get_contents(DISCORD_API_BASE_URI."/oauth2/token", false, stream_context_create($options));

        return $contents;
    };
?>