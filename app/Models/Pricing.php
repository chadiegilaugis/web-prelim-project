<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pricing
 * @package App\Models
 * @version October 3, 2021, 12:06 pm UTC
 *
 * @property string $Product_name
 * @property string $Brand
 * @property string $Supplier
 * @property integer $Price
 */
class Pricing extends Model
{
    // use SoftDeletes; 

    use HasFactory;

    public $table = 'pricing';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product_name',
        'Brand',
        'Supplier',
        'Price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product_name' => 'string',
        'Brand' => 'string',
        'Supplier' => 'string',
        'Price' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product_name' => 'required|string|max:255',
        'Brand' => 'required|string|max:255',
        'Supplier' => 'required|string|max:255',
        'Price' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
