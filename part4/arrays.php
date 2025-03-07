<?php

// Arrays
// Numeric
$studentNames = ["joe", "mike", "carl"];
$studentNumbers = [100, 120, 130];

echo "Array item count : " . count($studentNames) . "<br>";
echo $studentNames[0] . "<br>";
echo $studentNames[1] . "<br>";
echo $studentNumbers[0] . "<br>";
echo $studentNumbers[1] . "<br>";

// Associative 
$students = [
    [
        "name" => "Ali",
        "age" => "44",
        "number" => "100",
    ],
    [
        "name" => "veli",
        "age" => "21",
        "number" => "120",
    ],
    [
        "name" => "küpeli",
        "age" => "33",
        "number" => "130",
    ],
];

foreach ($students as $student) {
    echo "student : " . $student["name"] . " " . $student["number"] . "<br>";
}
;

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}
;
$a = 10;
do {
    switch ($a) {
        case 3:
            echo "value of a : $a ";
            echo "a = 3";
            break;

        default:
            echo "loop works";
            break;
    }
    if ($a == 0) {
        echo "<br><br>" . "this is last step" . "<br>";
    } elseif ($a == 1) {
        echo "<br>" . "we are a step far from last step" . "<br>";
    }

    echo "<br>" . "do while loop finished" . "<br>";
    $a--;

} while ($a >= 0);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>