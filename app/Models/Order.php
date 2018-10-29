<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App\Models
 * @property integer id
 * @property integer user_id
 * @property string order_number
 * @property User user
 * @property Product[] products
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Order extends Model
{
    public $fillable = [
        'user_id',
        'order_number'
    ];

    public $dates = [
        'created_at',
        'updated_at'
    ];

    public $with = [
        'user',
        'products'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class, OrderProduct::class, 'order_id', 'id', 'id', 'id');
    }

}
