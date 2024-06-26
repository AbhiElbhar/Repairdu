<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = "abouts";

    protected $primarykey = "id";

    protected $fillable = ['title',
    'mobile_no',
    'image',
    'description',
    'meta_title',
    'meta_keyword',
    'meta_description'];
}
