<?php
    ini_set('display_errors', 1);     //Show errors for debugging
?>

$firstName = "Kate";
$lastName = "Green";
$age = 23;
$married = true;
$childrenNames = array("Crunchie", "Snickers")
$fullName = $firstName . " " . $lastName;
$dogYears = $age/7;
$isAdult = $dogYears > 4;
$isSettled = $isAdult and $married

function getFullName ($firstName, $lastName) {
    return $firstName . " " . $lastName;
}

$fullName = getFullName($firstName, $lastname);
$fullName = getFullName("Alice", "Doe");

function getIsSettled ($age, $married) {
    $dogYears = $age/7
    $isAdult = $dogYears > 4;
    $isSettled = $isAdult and $married;
    return $isSettled;
}

$isSettled = getIsSettlede($age, $married);
$isSettled = getIsSettled(5, false);

if ($isSettled) {
    echo $fullName . "is settled.";
} else {
    echo $fullName . "is not settled";
}

foreach($childrenNames as $childName) {
    echo "<l1>" . $childName . </l1>";
}

$postDetails = array('title' => 'Blog Post 1',
                    'content' => 'My first blog post',
                    'date' => '01/01/2018',
                    'author' => 'christikaes');

                    