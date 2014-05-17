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

function foo(&$var) { }
printl("when be referred, variable is created and assigned to null: ");
foo($a); 
$b = array();
foo($b['b']);
printl(array_key_exists('b', $b), false);

$c = new StdClass;
foo($c->d);
printl(property_exists($c, 'd'), false);



$var1 = "Example variable";
$var2 = "";

function global_references($use_globals)
{
    // global $var 可以理解为$var =&$GLOBALS['var']
    global $var1, $var2;
    if (!$use_globals) {
        $var2 =& $var1; // visible only inside the function
    } else {
        $GLOBALS["var2"] =& $var1; // visible also in global context
    }
}

global_references(false);
printl("var2 is set to '$var2'\n"); 
global_references(true);
printl("var2 is set to '$var2'\n", false);

// unset() won't destroy the value, just unbind
$aa = 1;
$bb = & $aa;
$bb = 2;
printl("aa = $aa, bb = $bb");
unset($aa);
printl("aa = $aa, bb = $bb", false);
?>