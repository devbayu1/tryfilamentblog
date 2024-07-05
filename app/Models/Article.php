<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','title','slug','image','short_desc','desc','status'];

    public function category() : HasOne {
        return $this->hasOne(Category::class, 'id','category_id');
    }
}
