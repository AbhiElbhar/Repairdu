<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
        
    protected $table = 'registers';

    protected $primarykey = 'id';

    protected $fillable = ['name',
    'email',
    'mobile_no',
    'package',
    'package_type',
    'password',
    'c_password'];
}
