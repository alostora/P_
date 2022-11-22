<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [

        'clientName',

        'clientCarNumber',

        'clientIdentificationNumber',

        'licenceNumber',

        'clientPhone',

        'costType',

        'cost',

        'status',

        'type',

        'code',

        'notes',

        'starts_at',

        'ends_at',

        'accountantsStatus',

        'garage_id',

        'saies_id',
    ];

    protected $casts = [
        'starts_at' => 'datetime:Y-m-d H:00',

        'ends_at' => 'datetime:Y-m-d H:00',
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
