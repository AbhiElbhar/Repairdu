<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class base extends Model
{
    use HasFactory;
    
    protected $table = 'bases';

    protected $primarykey = 'id';

    protected $fillable = ['title',
    'description',
    'meta_title',
    'meta_keyword',
    'meta_description'];
}
