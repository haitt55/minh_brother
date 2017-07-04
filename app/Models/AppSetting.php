<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    protected $table = 'app_settings';

    public function scopeByKey($query, $key)
    {
        return $query->whereKey($key);
    }

    public function settings()
    {
        $settings = [];
        $appSettings = $this->all();
        foreach ($appSettings as $appSetting) {
            $settings[$appSetting->key] = $appSetting->value;
        }

        return $settings;
    }
    
    public static function companyName()
    {
        $appSetting = new AppSetting;
        $settings = $appSetting->settings();
        return !empty($settings['company']) ? $settings['company'] : null;
    }
}