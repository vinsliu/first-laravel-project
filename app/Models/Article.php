<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['title', 'description'];
    protected $guarded = ['id'];
    protected $casts = [
        'title'       => 'string',
        'description' => 'string',
        'is_active'   => 'boolean'
    ];
    protected $hidden = ['ceated_at', 'updated_at'];
    protected $visible = ['title', 'description'];
    protected $attributes = ['is_active' => true];
}
