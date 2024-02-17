<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tester extends Model
{
    use HasFactory;

    protected $table = 'testers';

    protected $primarykey = 'id';

    protected $fillable = ['name',
    'position',
    'description'];
}
