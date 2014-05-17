<?php
print("Hello World");

print "print() also works without parentheses.";

print "This spans
    multiple lines. The newlines will be
    output as well";

print "This spans\nmultiple lines. The newlines will be\noutput as well.";

print "escaping characters is done \"Like this\".";

// 可以在打印语句中使用变量
$foo = "foobar";
$bar = "barbaz";

print "foo is $foo"; // foo is foobar

// 也可以使用数组
$bar = array("value" => "foo");

print "this is {$bar['value']} !"; // this is foo !

// 使用单引号将打印变量名，而不是变量的值
print 'foo is $foo'; // foo is $foo

// 如果没有使用任何其他字符，可以仅打印变量
print $foo;          // foobar

print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;
?>