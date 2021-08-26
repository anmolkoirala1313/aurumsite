<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table ='sliders';
    protected $fillable =['id','heading','subheading_one','subheading_two','button_one','button_two','button_one_link','button_two_link','slider_image','status','created_by','updated_by'];

}
