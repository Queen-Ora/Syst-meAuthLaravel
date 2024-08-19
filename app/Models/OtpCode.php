<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpCode extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */

     protected $fillable = [
        'email',
        'code',
    ];

    /**
     * Get the attributes that should be cast.
     * 
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'code' => 'hashed',
        ];
    }
}