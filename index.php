<?php

require_once(__DIR__.'/vendor/autoload.php');

$folders = array_filter(scandir('./src/'), function($data) {
    return $data !== '.' && $data !== '..';
});

array_map(function($folder) {
    include __DIR__.'/src/'.$folder.'/index.php';
}, $folders);