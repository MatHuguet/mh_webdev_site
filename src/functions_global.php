<?php

function dd($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

    die();
}

function abort($errorCode = 404) {

    http_response_code($errorCode);

    require base_path('views/error_pages/_404.php');

    die();

}

function getHttpResponseCode() {
    return $code = http_response_code();

}

function base_path($path) {

    return BASE_PATH . $path;
}

function view($path) {
    return base_path('views/' . $path);
}

function partialsToView($path) {
    return base_path('src/partials/' . $path);
}

function imgPath($path) {
    return base_path('src/images/' . $path);
}