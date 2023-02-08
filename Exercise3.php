<?php

// Valid Integer.
function myFunction($nb) {
    if(is_int($nb)) {
        echo "$nb is a valid integer.";
    } else {
        echo "$nb is not a valid integer.";
    }
}

try {
    // verif is integer 
    myFunction(2.5);
} catch (Exception $ex) {
    echo $ex->getMessage();
} finally {
    echo "<br/> Validation Complete";
}