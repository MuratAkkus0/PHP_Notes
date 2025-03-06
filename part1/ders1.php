<?php

$isAuth = true;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo and Print</title>
</head>

<body>

    <?php

    $name = "Murat";

    echo "Username : $name"; #or
    echo "</br></br>";
    echo "Username : " . $name; # both are same  
    echo "hallo $name";

    $msg = "User is ";
    if ($isAuth) {
        echo $msg . "Authenticated";
    } else {
        print $msg . "not Authenticated";
    }

    # Echo ve Print Arasindaki Fark Echo geriye true veya false olarak bir deger döndürmez fakat print geriye true veya false olarak bir deger döner ve bu kosullu ifadelerde kullanilabilir.
# Ayni zamanda echo virgül ile ayrilarak birden fazla deger ekrana basabilir fakat print bunu yapamaz . Bu denendiginde syntax hatasi alinir.
    
    #print "hallo","hi"; // ===> Syntax Error 
    

    ?>

    <button type="button">change</button>

</body>

</html>