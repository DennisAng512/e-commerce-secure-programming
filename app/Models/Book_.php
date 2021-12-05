<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private static $contents = [
        [
            "id" => 1,
            "name" => "Wellson Leewando",
            "image" => "test.jpg"
        ],
        [
            "id" => 2,
            "name" => "Nooril",
            "image" => "test.jpg"
        ],
        [
            "id" => 3,
            "name" => "Dennis",
            "image" => "test.jpg"
        ]
    ];

    public static function getAll() {
        return collect(self::$contents);
    }

    public static function getBook($id) {
        $books = static::getAll();
        return $books->firstWhere('id', $id);
    }
}
