<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The database connection used
     *
     */
    protected $connection = 'mysql';

    /**
     * The table properties
     *
     */
    protected $table = 'roles';
    protected $primaryKey = 'role_id';
    public $incrementing = true;

    /**
     * Toggle timestamps
     *
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
