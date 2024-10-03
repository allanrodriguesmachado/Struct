<?php

if (! function_exists('mix')) {
    function mix(string $path): string {
        $content = file_get_contents(__DIR__ . '/../public/mix-manifest.json');
        return json_decode($content, true)[$path];
    }
}

if (! function_exists('resource_path')) {
    function resource_path(string $path): string {
        return include __DIR__ . '/../resources' . DIRECTORY_SEPARATOR . $path;
    }
}