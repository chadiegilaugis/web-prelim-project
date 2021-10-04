<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sales
 * @package App\Models
 * @version October 3, 2021, 11:38 am UTC
 *
 * @property string $Product
 * @property string $Brand
 * @property integer $Number_of_items_sold
 */
class Sales extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'sales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'Brand',
        'Number_of_items_sold'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product' => 'string',
        'Brand' => 'string',
        'Number_of_items_sold' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product' => 'required|string|max:255',
        'Brand' => 'required|string|max:255',
        'Number_of_items_sold' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
