<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'description',
        'parent_id',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function subcategory()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
    public function getDateToDisplayAttribute()
    {
        return $this->updated_at->format('M d, Y \a\t g:i A');
    }
}
