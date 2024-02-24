<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class knowledge_base extends Model
{
    use HasFactory;
        
    protected $table = 'knowledge_bases';

    protected $primarykey = 'id';

    protected $fillable = ['title',
    'description',
    'meta_title',
    'meta_keyword',
    'meta_description'];
}
