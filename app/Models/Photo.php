<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['album_id', 'id', 'title', 'url', 'thumbnail'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}