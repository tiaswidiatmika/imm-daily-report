<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'category', 'path'];

    public function post($id)
    {
        return $this->belongsTo(Post::class);
    }
}
