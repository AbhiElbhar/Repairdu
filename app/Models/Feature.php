<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = 'features';

    protected $primarykey = 'id';

    protected $fillable = ['title',
    'heading',
    'image',
    'description',
    'meta_title',
    'meta_keyword',
    'meta_description'];
}
