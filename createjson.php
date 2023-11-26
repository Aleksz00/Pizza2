<?php
require("connect.php");
$sql = "SELECT * FROM kategoria";
$result = $dbconn ->query($sql);

while($pizza = $result ->fetch_assoc()){
    $kategoria[] = $pizza;
}
highlight_string("<?php" . var_export($kategoria,true) . ";?>");
$encoded_data = json_encode($kategoria, JSON_PRETTY_PRINT);
file_put_contents('pizza.json', $encoded_data);
?>