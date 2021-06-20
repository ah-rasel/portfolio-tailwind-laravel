<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'slug',
        'content',
        'category_id',
        'user_id',
    ];

    public function getDateToDisplayAttribute()
    {
        return $this->created_at->format('M d, Y \a\t g:i A');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
