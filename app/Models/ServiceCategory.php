<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $table ='service_categories';
    protected $fillable =['id','name','image','short_description','list','created_by','updated_by'];

}
