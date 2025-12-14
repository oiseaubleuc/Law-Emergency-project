<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
use HasFactory;

protected $fillable = [
    'title',
    'image_file',
    'content',
    'user_id',
];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
