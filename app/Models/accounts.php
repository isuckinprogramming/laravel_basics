<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    use HasFactory;


    protected $table = "accounts";
    protected $fillable = [
        "id",
        "name",
        "email",
        "password"
    ];

}
