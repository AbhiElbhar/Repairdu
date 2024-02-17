<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class industry extends Model
{
    use HasFactory;

    protected $table = 'industries';

    protected $primarykey = 'id';

    protected $fillable = ['title',
    'image',
    'category_id',
    'description',
    'meta_title',
    'meta_keyword',
    'meta_description'];
}
