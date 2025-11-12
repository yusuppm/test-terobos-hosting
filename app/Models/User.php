<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Log;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function booted()
    {
        static::created(function ($user) {
            $user->syncToFirebase();
        });

        static::updated(function ($user) {
            $user->syncToFirebase();
        });

        static::deleted(function ($user) {
            $user->deleteFromFirebase();
        });
    }

    public function syncToFirebase()
    {
        try {
            $firebase = $this->getFirebaseDatabase();
            
            $userData = [
                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email,
                'email_verified_at' => $this->email_verified_at?->toISOString(),
                'created_at' => $this->created_at->toISOString(),
                'updated_at' => $this->updated_at->toISOString(),
            ];

            $firebase->getReference('users/' . $this->id)->set($userData);
            
            Log::info('User synced to Firebase: ' . $this->email);
        } catch (\Exception $e) {
            Log::error('Firebase sync failed for user ' . $this->email . ': ' . $e->getMessage());
        }
    }

    public function deleteFromFirebase()
    {
        try {
            $firebase = $this->getFirebaseDatabase();
            $firebase->getReference('users/' . $this->id)->remove();
            
            Log::info('User deleted from Firebase: ' . $this->email);
        } catch (\Exception $e) {
            Log::error('Firebase delete failed for user ' . $this->email . ': ' . $e->getMessage());
        }
    }

    private function getFirebaseDatabase(): Database
    {
        $factory = (new Factory)
            ->withServiceAccount(config('firebase.credentials.file'))
            ->withDatabaseUri(config('firebase.database.url'));

        return $factory->createDatabase();
    }
}
