<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content'
    ];

    protected $with = 'user';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
