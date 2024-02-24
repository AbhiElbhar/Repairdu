<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    use HasFactory;

    protected $table = 'times';

    protected $primarykey = 'id';

    protected $fillable = ['time'];

    function pricing(){
        return $this->hasMany('App\models\pricing','time_id','id');
    }
}