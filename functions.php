<?php 

function get_url($path = "/") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . $path;
}

function get_path($path = "/") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return PROJECT_ROOT . $path;
}

// function get_sub_path($path = )
//     if($path)
?>