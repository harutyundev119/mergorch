<?php

    function show($x) {

        if (isset($x)) {

            if($x) {

                echo '
                        <i class="fa-li fa fa-trophy text-warning dip_ser"></i>
                        <span class="d_s">
                    ';
                echo $x;
                echo '</span>';
                
            }

        } else {

        }

    }

?>