<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [
        'garage_id',
        'saies_id',
        'startDate',
        'endDate',
        'costType',
        'cost',
        'status',
        'notes',
        'userName',
        'carNo',
        'idNo',
        'licenceNo',
        'phoneNo',
        'type',
        'code',
    ];
}
