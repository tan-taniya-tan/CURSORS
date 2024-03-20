<?php
if (!function_exists('incrementVisitCount')) {
    $visitCount = 0;

    
    if (file_exists('visitcount.txt')) {
       
        $visitCount = intval(file_get_contents('visitcount.txt'));
    }

    function incrementVisitCount() {
        global $visitCount;
        $visitCount++;
        file_put_contents('visitcount.txt', $visitCount);
    }

    function getVisitCount() {
        global $visitCount;
        return $visitCount;
    }
}
?>
