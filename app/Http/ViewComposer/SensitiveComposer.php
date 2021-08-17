<?php


namespace App\Http\ViewComposer;

use Illuminate\View\View;
use App\Models\Setting;
use Illuminate\Support\Str;

class SensitiveComposer
{
    public function compose(View $view){
      
      
        $theme_data = Setting::first();
        $view
        ->with('setting_data', $theme_data);

    }
}
