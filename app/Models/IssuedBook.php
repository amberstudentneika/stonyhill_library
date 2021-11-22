<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssuedBook extends Model
{
    use HasFactory;

    protected $fillable=[
        'bookID',
        'memberID',
        'issueDate',
        'expReturnDate'
    ];

public function book(){
    return $this->belongsTo(Book::class,'bookID');
}

public function member(){
    return $this->belongsTo(Member::class,'memberID');
}
}
