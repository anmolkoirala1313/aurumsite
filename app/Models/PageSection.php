<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    use HasFactory;
    protected $table ='page_sections';
    protected $fillable =['id','section_name','section_slug','list_number_1','list_number_2','list_number_3','page_id','created_by','updated_by'];

    public function page()
    {
        return $this->belongsTo('App\Models\Page');
    }
}
