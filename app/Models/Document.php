<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_number',
        'title',
        'holder_name',
        'file_path',
        'status',
        'remarks',
        'uploaded_by',
        'verified_by',
        'verified_at',
        'signed_by',
        'signed_at',
        'qr_code_path',
    ];

    protected function casts(): array
    {
        return [
            'verified_at' => 'datetime',
            'signed_at' => 'datetime',
        ];
    }

    public function uploadedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    public function verifiedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    public function signedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'signed_by');
    }

    public function isVerified(): bool
    {
        return $this->status === 'verified';
    }

    public function isSigned(): bool
    {
        return ! is_null($this->signed_at);
    }

    public function statusLabel(): string
    {
        return match ($this->status) {
            'verified' => 'प्रमाणित (Verified)',
            'rejected' => 'अस्वीकृत (Rejected)',
            default => 'प्रक्रियामा (Pending)',
        };
    }

    /**
     * Auto-generate a unique document number: EV-2026-XXXXXX
     */
    public static function generateDocumentNumber(): string
    {
        do {
            $number = 'EV-'.date('Y').'-'.str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        } while (self::where('document_number', $number)->exists());

        return $number;
    }
}