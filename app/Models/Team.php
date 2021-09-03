<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table ='teams';
    protected $fillable =['id','name','image','post','description','created_by','updated_by'];
}
