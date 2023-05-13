<?php

function filter($data){
    $filter = stripslashes(strip_tags(htmlspecialchars(htmlentities($data, ENT_QUOTES))));
    return $filter;
}