<?php

namespace App\Repositories;

use App\Models\Teller;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TellerRepository
 * @package App\Repositories
 * @version March 28, 2018, 12:29 pm UTC
 *
 * @method Teller findWithoutFail($id, $columns = ['*'])
 * @method Teller find($id, $columns = ['*'])
 * @method Teller first($columns = ['*'])
*/
class TellerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'phone_number',
        'name',
        'location',
        'status',
        'store_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Teller::class;
    }
}
