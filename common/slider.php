<?php
    function slider($dir, $num)
    {
        echo '<div id="myCarousel'.$num.'" class="carousel slide" data-ride="carousel">';
        echo '<div class="carousel-inner" role="listbox">';

        $files = glob(DOCROOT.$dir.'/*.*');

        for ($i=0; $i<count($files); $i++) {
            $image = str_replace(DOCROOT, '', $files[$i]);

            if($i==0){
                echo '<div class="item active">';
            } else {
                echo '<div class="item">';
            }
            echo '<img class="center" src="'.$image .'" oncontextmenu="return false;"> </div>';
        } 
        echo '</div>';
        echo '<a class="left carousel-control" href="#myCarousel'.$num.'" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>';
        echo '<a class="right carousel-control" href="#myCarousel'.$num.'" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>';
        echo '</div>';      
    }
?>