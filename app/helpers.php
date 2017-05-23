<?php
use App\Models\AppSetting;
use DateTime;
// use DB;

function create_slug($string){
    $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    return $slug;
}

function app_settings($key = null)
{
    $appSettings = new AppSetting();

    return $key ? array_get($appSettings->settings(), $key) : $appSettings;
}

function get_time_from_now($time) {
    $d1 = new DateTime($time);
    $d2 = new DateTime();

    $diff = $d2->diff($d1);
    if ($diff->y >= 1) {
        return $diff->y . ' year ago';
    } else {
        return $diff->m . ' month ago';
    }
}

