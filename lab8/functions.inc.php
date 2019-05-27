<?php

    function outputOrderRow($file, $title, $quantity, $price) {
        echo "<tr><td><img src=images/books/tinysquare/$file>
          <td class=\"mdl-data-table__cell--non-numeric\">$title</td>
                                <td>$quantity</td>
                                <td>$price</td>
                                <td>$quantity*$price</td>
                                
       </tr>";
    }
?>