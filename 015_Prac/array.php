<?php
$fruits = array("apple", "orange", "banana", "grape");
echo "I like " . $fruits[0] . ", " . $fruits[1] . ", " . $fruits[2] . " and " . $fruits[3] . ".";
echo "<br>";
$cars = ["Volvo", "BMW", "Toyota"];
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
$city = [["Dhaka", "Chittagong", "Rajshahi"], ["New York", "Los Angeles", "Chicago"]];
echo "<br>";
foreach ($city as $city1) {
    foreach ($city1 as $city2) {
        echo $city2 . "<br>";
    }
}

$company = array("Google" => "USA", "Samsung" => "Korea", "Sony" => "Japan");
echo "<br>";
echo "Google is from " . $company["Google"] . ".<br>";
echo "Samsung is from " . $company["Samsung"] . ".<br>";
echo "Sony is from " . $company["Sony"] . ".<br>";
echo "<br>";

$country = ["Bangladesh" => "Dhaka", "India" => "New Delhi", "USA" => "Washington DC"];

enum Park: string
{
    case SAFARI_PARK = 'Safari Park';
    case NATIONAL_ZOO = 'National Zoo';
    case BOTANICAL_GARDEN = 'Botanical Garden';
}

?>