<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table ='settings';
    protected $fillable =['id','website_name','logo','favicon','website_description','logo_white','phone','mobile','whatsapp','viber','facebook','youtube','instagram','address','email','google_analytics','created_by','updated_by'];

}
