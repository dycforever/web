<?php

function parseRequestHeaders() {
    $headers = array();
    foreach($_SERVER as $key => $value) {
        if (substr($key, 0, 5) <> 'HTTP_') {
            continue;
        }
        $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
        $headers[$header] = $value;
    }
    return $headers;
}

    $headers = parseRequestHeaders();
    $str = "str:";
    $str .= $headers["Cookie"];
    $str .= "  ".$headers["User-Agent"];
    $str .= "\n";

    $str = "cookie-cname: ".$_COOKIE["cname"];
    $str .= "<br> urlparam: ".$_GET["urlparam"];

    print_r($str);
    print_r("<br>");

    $fp = fopen("record.txt", "w");
    print_r($fp);
    print_r("<br>");

    $ret = fwrite($fp ,$str);
    print_r($ret);
    print_r("<br>");

    $ret = fclose($fp);
    print_r($ret);
    print_r("<br>");

?>