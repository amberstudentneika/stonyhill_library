<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

protected $fillable =[
    'title',
    'author',
    'isbn',
    'quantity',
    'publisher',
    'pubDate',
    'condition'
];

public function issuedBooks(){
    return $this->hasMany(IssuedBook::class,'bookID');
}

}
