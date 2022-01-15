<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booklist extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'is_deleted'
    ];

    protected $table = 'booklists';

    public function book() {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function User() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
