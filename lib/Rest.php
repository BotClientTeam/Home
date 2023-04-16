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

        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => implode("\r\n", $header),
                'content' => $data
            )
        );

        $contents = file_get_contents(DISCORD_API_BASE_URI."/oauth2/token", false, stream_context_create($options));

        return $contents;
    };

    function Get($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = json_decode(curl_exec($ch));
        curl_close($ch);

        return $res;
    }

    function Post($url, $body){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($body));
        curl_setopt($ch,CURLOPT_HTTPHEADER, array(
            "Content-type: application/json"
        ));
        $res = json_decode(curl_exec($ch), true);
        curl_close($ch);

        return $res;
    }
?>