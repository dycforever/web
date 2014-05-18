
<?php
function printl($var, $br=true) {
    $str .= "";
    if ($br) {
        $str .= "<br><br>";
    }
    if (gettype($var) === "boolean" && $var) {
        $str .= "true";
    } else if (is_bool($var) && !$var) {
        $str .= "false";
    } else {
        $str .= $var;
    }
    $str .= "<br>";
    print $str;
}
?>