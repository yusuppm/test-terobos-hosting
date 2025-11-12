<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopikPembelajaran extends Model
{
    use HasFactory;

    protected $table = 'topik_pembelajaran';

    // Perbarui $fillable agar mencakup semua kolom baru
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'icon',
        'teknologi',
        'learning_outcomes',
        'untuk',
        'modul',
        'perangkat',
        'harga',
        'order',
    ];

    /**
     * Get the route key for the model.
     * (Penting untuk URL yang rapi)
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}