<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models
 * @property integer id
 * @property string title
 * @property string description
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Product extends Model
{
    public $fillable = [
        'title',
        'description'
    ];

    public $dates = [
        'created_at',
        'updated_at'
    ];
}
