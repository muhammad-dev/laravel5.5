<?php

namespace App\Repositories;

use App\Models\Roles;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RolesRepository
 * @package App\Repositories
 * @version March 28, 2018, 12:40 pm UTC
 *
 * @method Roles findWithoutFail($id, $columns = ['*'])
 * @method Roles find($id, $columns = ['*'])
 * @method Roles first($columns = ['*'])
*/
class RolesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'label'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Roles::class;
    }
}
