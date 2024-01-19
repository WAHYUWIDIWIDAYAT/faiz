<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected  $table = 'purchase_orders';

    protected $fillable = [
        'user_id',
        'subtotal',
        'discount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function purchaseOrderDetail()
    {
        return $this->hasMany(PurchaseOrderDetail::class);
    }

    
    

}
