<?php

use App\Models\Setting;

function getSettingsOf() {

    $collection = Setting::all();
    $setting['setting'] = $collection->flatMap(function ($collection) {
      return [$collection->key => $collection->value];
    });
}


