<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckKodam extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','response','result'];
}
