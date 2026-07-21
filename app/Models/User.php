<?php

namespace App\Models;

// Note: use HasFactory, Notifiable; keep any other traits/imports
// your existing User model already has (e.g. MustVerifyEmail).
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
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
        'role',
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

    /**
     * Role check helpers.
     */
    public function isSuperAdmin(): bool
    {
        return $this->role === 'superadmin';
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isStaff(): bool
    {
        return $this->role === 'staff';
    }

    /**
     * Nepali label for the role, used in views.
     */
    public function roleLabel(): string
    {
        return match ($this->role) {
            'superadmin' => 'सुपर एडमिन',
            'admin' => 'एडमिन',
            'staff' => 'कर्मचारी',
            default => $this->role,
        };
    }
}
