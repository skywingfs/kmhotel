<?php

function  deeploop(&$i=1){
    echo $i;
    $i++;
    if($i<10){
        deeploop($i);
    }

}