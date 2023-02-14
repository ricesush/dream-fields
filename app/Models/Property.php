<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = [
        'unitNumber',
        'user_id',
        'unitType',
        'unitStatus',
        'floorArea',
        'unitPrice',
        'title',
        'numBed',
        'numBaths',
        'imagePath',
        'hasParking'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
