<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$name = "Murat";
$age = 12;
$isAuth = true;
$price = 3.99;

#Arraydaki elemanlara index degeri atlatip istedigin yerden devam ettirebilirsin 20=>"Ali" örneginde oldugu gibi.
$nameArr = array("Murat",20=>"Ali","Veli",array(12,3,4,4));

# var_dump() fonksiyonu verulen degerleri console.log gibi ekrana basar ama daha detayli olarak ekrana basar.
# console.log un kullanim amaciyla ayni amaca hiymet eder.
var_dump($name, $age, $isAuth,$price);
echo "</br>";
var_dump($nameArr)


?>


</body>
</html>