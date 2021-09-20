<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table ='settings';
    protected $fillable =['id','website_name','logo','favicon','website_description','logo_white','phone','mobile','whatsapp','viber','facebook','youtube','instagram','address','email','google_analytics','intro_heading','intro_subheading','intro_description','intro_image','intro_button','intro_button_link','customer_served','visa_approved','success_stories','happy_customers','created_by','updated_by'];

}
