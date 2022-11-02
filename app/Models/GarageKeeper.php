<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GarageKeeper extends Model
{
    use HasFactory;

    protected $fillable = [
        'saies_id',
        'garage_id',
    ];

    public function saies() : BelongsTo
    {
        return $this->belongsTo(User::class,'saies_id');
    }
    
    public function garage() : BelongsTo
    {
        return $this->belongsTo(Garage::class,'garage_id');
    }
    
}
