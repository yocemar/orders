<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    //name default *s and *_id
    //
    protected $fillable = [
        'number', 'user_id','customer_id', 
        'shipment','type', 'detail_id',
        'invoice', 'value'
    ];
}
