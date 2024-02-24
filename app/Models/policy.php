<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class policy extends Model
{
    use HasFactory;

    protected $table = 'policies';

    protected $primarykey = 'id';

    protected $fillable = ['policy',
    'terms'];
}
