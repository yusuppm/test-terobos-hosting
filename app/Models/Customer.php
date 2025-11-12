<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Log;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'birth_date',
        'gender',
        'avatar',
        'is_active',
    ];


    protected $casts = [
        'birth_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function getAvatarUrlAttribute()
    {
        if ($this->avatar && file_exists(public_path('storage/avatars/' . $this->avatar))) {
            return asset('storage/avatars/' . $this->avatar);
        }
        
        // Default avatar berdasarkan gender
        $defaultAvatar = $this->gender === 'female' ? 'default-female.png' : 'default-male.png';
        return asset('images/avatars/' . $defaultAvatar);
    }

    public function getFirstNameAttribute()
    {
        return explode(' ', $this->name)[0];
    }
}