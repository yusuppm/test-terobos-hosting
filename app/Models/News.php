<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tanggal',
        'customer_id',     
        'title',
        'slug',
        'kategory',
        'description',
        'thumbnail',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal' => 'date',
    ];

    /**
     * Get the customer (author) that owns the news
     */
    public function author()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    /**
     * Get the route key for the model.
     * (Penting untuk /news/{slug})
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}