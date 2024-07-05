<?php

use App\Models\Setting;

function getSetting(){
    $settings = Setting::all();
    return $settings;
}

function getSetByName($name){
    $setting = Setting::where('name','=',$name)->first();
    return $setting;
}

function getSetByType($type){
    $setting = Setting::where('type','=',$type)->get();
    return $setting;
}
