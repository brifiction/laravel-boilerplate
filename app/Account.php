<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
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
    protected $table = 'accounts';
    protected $primaryKey = 'account_id';
    public $incrementing = true;

    /**
     * Toggle timestamps
     *
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User', 'account_id','user_id');
    }
}
