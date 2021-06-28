<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $fillable=[
        'reply',
        'comment_id',
        'user_id',
    ];
    public function getDateToDisplayAttribute()
    {
        return $this->created_at->format('M d \a\t g:i A');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
