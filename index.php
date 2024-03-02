<?php
    $request_uri = $_SERVER['REQUEST_URI'];
    echo $request_uri;
    
    if ($request_uri == '/admin') {
        header("Location: https://staging.pathgriho.org/public/admin/");
        exit();
    } elseif ($request_uri == '/') {
        header("Location: https://staging.pathgriho.org/public/");
        exit();
    }
?>
