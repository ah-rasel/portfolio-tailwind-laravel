<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'message',
        'read_status',
    ];
    public function getDateToDisplayAttribute()
    {
        return $this->updated_at->format('M d \a\t g:i A');
    }
}
