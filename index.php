<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

print("<pre>");

$arejus = array(

"Tomas" => "75",
"Antanas" => "85",
"Jonas" => "35",
"Petras" => "120",
"Tadas" => "92"
);

print($arejus['Tomas'] .  "  aš");

print("<br>");

print(min($arejus). "  lengviausias");

print("<br>");

print(max($arejus). "  sunkiausias");

print("<br>");

if(array_sum($arejus) <500)
print(array_sum($arejus). "  tinkamas svoris tilpti i lifta");
else if (print("Svoris per didelis"));

print("<br>");



arsort($arejus);

print_r ($arejus);

print("<br>");



rsort($arejus);

print_r ($arejus);

print("<br>");



asort($arejus);

print_r ($arejus);

print("<br>");


ksort($arejus);

print_r ($arejus);

print("<br>");

print("</pre>");

?>

</body>
</html>