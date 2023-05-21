<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'address1',
        'address2',
        'address3',
        'town',
        'county',
        'country',
        'postcode',
        'agent_id',
        'landlord_id',
    ];
}
