<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderProduct
 * @package App\Models
 * @property int id
 * @property integer order_id
 * @property integer product_id
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class OrderProduct extends Model
{
    public $fillable = [
        'order_id',
        'product_id'
    ];

    public $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|Order
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|Product[]
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
