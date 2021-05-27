<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Setting;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function getSliders()
    {
        return Banner::where('type' , 0)->get();
    }

    public function getHomeBanners()
    {
        return Banner::where('type' , 1)->get();
    }


    public function getSettings()
    {
        $settings = Setting::get();
        $val = [];
        foreach($settings as $setting){
            $val[$setting->key] = $setting->value;
            $val[$setting->key.'_ar'] = $setting->value_ar;

           
        }
        return $val;
    }


    public function findSetting($key)
    {
        return Setting::where('key' , $key)->first();
    }
}
