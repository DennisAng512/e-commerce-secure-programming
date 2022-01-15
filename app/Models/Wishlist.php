<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'is_deleted'
    ];

    protected $table = 'wishlists';

    public function book() {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function User() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
