<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id','order_id', 
        'quantity','lot', 'note',
        
    ];
}
