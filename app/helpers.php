<?php
use App\Models\AppSetting;
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

function show_username($email)
{
    $position = strpos($email, "@");
    return substr_replace($email, '', $position);
}
