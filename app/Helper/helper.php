<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('getImageUrl')) {
    function getImageUrl($value): string
    {
        return Storage::disk(config('app.disk'))->url($value);
    }
}
