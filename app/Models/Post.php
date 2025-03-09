<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'text', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
