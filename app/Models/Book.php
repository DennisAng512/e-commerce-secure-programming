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
        'author',
        'price',
        'is_deleted',
    ];

    public function scopeSearch($query, array $filters) {
        $query->when($filters['tags'] ?? false, function($query, $search) {
            return $query
                ->whereHas('tag', fn($query) => 
                    $query->where('name', 'like', '%'.$search.'%')
                );
        });

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query
                ->where('title', 'like', '%'.$search.'%')
                ->orWhere('author', 'like', '%'.$search.'%')
                ->orWhereHas('tag', fn($query) => 
                    $query->where('name', 'like', '%'.$search.'%')
                );
        });
    }

    public function tag() {
        return $this->belongsToMany(Tag::class, 'book_tags', 'book_id', 'tag_id');
    }
}