<?php

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\User;

if (!function_exists('getNepaliMonth')) {
    $selected_month;
    function getNepaliMonth($month){
     if($month == '1' || $month == '01'){
       $selected_month = "Baisakh";
     }else if($month == '2' || $month == '02'){
      $selected_month = "Jestha";
     }else if($month == '3' || $month == '03'){
      $selected_month = "Ashar";
     }else if($month== '4' || $month == '04'){
        $selected_month = "Shrawan";
     }else if($month== '5' || $month == '05'){
      $selected_month = "Bhadra";
     }else if($month== '6' || $month == '06'){
      $selected_month = "Ashoj";
     }else if($month== '7' || $month == '07'){
      $selected_month = "Kartik";
     }else if($month== '8' || $month == '08'){
      $selected_month = "Mangsir";
     }else if($month== '9' || $month == '09'){
      $selected_month = "Poush";
     }else if($month== '10'){
      $selected_month = "Magh";
     }else if($month== '11' ){
      $selected_month = "Falgun";
     }else if($month== '12' ){
      $selected_month = "Chaitra";
     }
     return $selected_month;
    }
}



if (!function_exists('greeting_msg')) {
    function greeting_msg(){
        date_default_timezone_set('Asia/kathmandu');
        $hour      = date('H');
        if ($hour >= 20) {
            $greetings = "Good Night";
        } elseif ($hour > 17) {
            $greetings = "Good Evening";
        } elseif ($hour > 11) {
            $greetings = "Good Afternoon";
        } elseif ($hour < 12) {
            $greetings = "Good Morning";
        }
        return $greetings;
    }
}

if (!function_exists('get_slugs_to_disable')) {
    function get_slugs_to_disable($id){
        $disable    = [];
        $desiredMenu   = Menu::where('slug',$id)->first();
        $menuitems     = MenuItem::where('menu_id',$desiredMenu->id)->get();
        foreach ($menuitems as $items){
            array_push($disable,$items->slug);
        }
        return $disable;
    }
}

