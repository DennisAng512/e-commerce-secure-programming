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

    public function scopeSearch($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query
                ->where('title', 'like', '%'.$search.'%')
                ->orWhere('author', 'like', '%'.$search.'%')
                ->orWhereHas('tag', function($query) use ($search) {
                    $query->where('name', 'like', '%'.$search.'%');
                });
        });
    }

    public function tag() {
        return $this->belongsTo(Tag::class);
    }
}