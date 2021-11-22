<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable=[
        'fName',
        'lName',
        'gender',
        'phoneNum',
        'address',
        'email'
    ];

    public function issuedBooks(){
        return $this->hasMany(IssuedBook::class,'memberID');
    }
}
