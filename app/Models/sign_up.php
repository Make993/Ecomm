<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sign_up extends Model
{
    use HasFactory;

    protected $fillable=[
        'First Name',
        'Last Name',
        'Email'
        ];
}
