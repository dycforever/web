<?php
#phpinfo();
printl("=========  php start  =========");

class MyObject {
    protected $name = 'an instance of MyObject';
    protected $gender;
    public function __toString() {
        return "I am {$this->name}\n";
    }
}

function printl($string) {
    $str .= "<br><br>";
    $str .= $string;
    $str .= "<br>";
    print $str;
}

# $array in "" seems strange
$arr = array('a'=>'first', 'b'=>'second', 'c'=>'third');

printl("## print_r(\$array): ");
print_r($arr);
printl("## print \$array: ");
print $arr;

printl("## print_r(\"\$array\"): ");
print_r("$arr");
printl("## print \"\$array\": ");
print "$arr" ;


printl("## print array by foreach: ");
foreach ($arr as $k => $v ) {
    echo $k, " ==> ", $arr[$k], "<br>";
    print "$k ==> $v <br>";
    print_r("$k ==> $v <br>");
    print_r('$k ==> $v <br>');
}

$obj = new MyObject;
printl("## print_r(\$object): ");
print_r($obj);
printl("## print \$object: ");
print $obj;

printl("## print_r(\"\$object\"): ");
print_r("$obj");
printl("## print \"\$object\": ");
print "$obj";

printl("## test casting \"\$object\": ");
$str = (string)$obj;
print "after casting obj to string: ".$str;

printl("=========  php over  =========");
printl("");
?>

<script>
function writel(str) {
    document.write(str + "<br>")
}
//    str = location.hash.substr(1);
    writel("=========  js start  =========");
    writel("location: " + location)
    writel("location.hash: " + location.hash)
</script>


