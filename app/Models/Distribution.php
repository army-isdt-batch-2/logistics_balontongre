<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;

    protected $table = 'distribution';

    protected $fillable = [
        'requestor_name',
        'requestr_contact',
        'purpose',
        'asset_id',
        'quantity',
        'status'
    ];
}
