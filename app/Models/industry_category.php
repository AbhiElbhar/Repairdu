<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class industry_category extends Model
{
    use HasFactory;
    
    protected $table = 'industry_categories';

    protected $primarykey = 'id';

    protected $fillable = ['name'];

    function Industry(){
        return $this->hasMany('App\models\industry','category_id','id');
    }
}
