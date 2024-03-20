<?php


$publishedCountUrl = "https://docs.google.com/spreadsheets/d/e/2PACX-1vSXWkaChEr728hjswIvBszOHoTbYdktnaty6XzD-bsijz0j7zhUDoaal9bEqeZOAxLEkHywY_xRcsB5/pub?gid=1348698130&single=true&output=csv";


$htmlContent = file_get_contents($publishedCountUrl);


if (preg_match('/Number of Responses: (\d+)/', $htmlContent, $matches)) {
    $responseCount = $matches[1];
    echo "Number of Responses: " . $responseCount;
} else {
    echo "Error: Count not found.";
}
?>
