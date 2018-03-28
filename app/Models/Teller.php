<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Teller
 * @package App\Models
 * @version March 28, 2018, 12:29 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property string phone_number
 * @property string name
 * @property string location
 * @property integer status
 * @property integer store_id
 */
class Teller extends Model
{
    use SoftDeletes;

    public $table = 'tbl_teller';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'phone_number',
        'name',
        'location',
        'status',
        'store_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'phone_number' => 'string',
        'name' => 'string',
        'location' => 'string',
        'status' => 'integer',
        'store_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
