<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version September 26, 2021, 12:33 pm UTC
 *
 * @property string $Product_name
 * @property string $Description
 * @property number $Price
 * @property string $Manufacturer
 * @property string $Date_manufactured
 */
class Product extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'product';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product_name',
        'Description',
        'Price',
        'Manufacturer',
        'Date_manufactured'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product_name' => 'string',
        'Description' => 'string',
        'Price' => 'decimal:2',
        'Manufacturer' => 'string',
        'Date_manufactured' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product_name' => 'required|string|max:255',
        'Description' => 'required|string|max:255',
        'Price' => 'required|numeric',
        'Manufacturer' => 'required|string|max:255',
        'Date_manufactured' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
