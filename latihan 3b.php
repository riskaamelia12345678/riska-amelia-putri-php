<?php
$var1 = "";
$var2 = "Hello";
$var3 = null;

echo "Contoh penggunaan isset() dan empty():<br><br>";

echo "isset(\$var1): " . (isset($var1) ? 'true' : 'false') . "<br>";
echo "empty(\$var1): " . (empty($var1) ? 'true' : 'false') . "<br><br>";

echo "isset(\$var2): " . (isset($var2) ? 'true' : 'false') . "<br>";
echo "empty(\$var2): " . (empty($var2) ? 'true' : 'false') . "<br><br>";

echo "isset(\$var3): " . (isset($var3) ? 'true' : 'false') . "<br>";
echo "empty(\$var3): " . (empty($var3) ? 'true' : 'false') . "<br>";
?>