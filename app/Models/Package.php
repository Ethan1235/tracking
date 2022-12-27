<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;
    
    protected $fillable = ['platform', 'tracking_number', 'order_id', 'country', 'method', 'paid_date', 'shipped_month', 'shipped_week', 'shipped_date', 'amount', 'ship_fee', 'currency', 'items', 'weight', 'logistics_status', 'is_closed'];
}
