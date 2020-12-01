<?php 

function windTurbine() {
    // loop through items 1 to 100.
    foreach (range(1, 100) as $item) {

        // if item can be divided by both 3 and 5, coating damage and lightning strike.
        if ($item % 3 == 0 && $item % 5 == 0) {
            echo nl2br("Oh no! We have coating damage and a lightning strike! \n");
        } 

        // if item can be divided by 3, coating damage.
        elseif ($item % 3 == 0) {
            echo nl2br("Coating damage! \n");
        }

        // if item can be divided by 5, lightning stike.
        elseif ($item % 5 == 0) {
            echo nl2br("Lightning strike! \n");
        }

        // else just print the item.
        else {
            echo nl2br($item . "\n");
        }
    }
}

windTurbine();