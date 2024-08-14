<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    //Protection des champs 
    protected $fillable=['title', 'state' , 'description'];
    
    public function user(): BelongsTo
    {
    return $this->belongsTo(User::class);
    }
}

