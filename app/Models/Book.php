<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'tag_id',
        'slug',
        'description',
        'author'
    ];

    protected $with = [
        'tag'
    ];

    public function tag() {
        return $this->belongsTo(Tag::class);
    }
}