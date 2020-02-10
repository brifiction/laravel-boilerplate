<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Administrator extends Authenticatable
{
    use Notifiable;

    /**
     * The database connection used
     *
     */
    protected $connection = 'mysql';

    /**
     * The table properties
     *
     */
    protected $table = 'administrators';
    protected $primaryKey = 'id';
    public $incrementing = true;

    /**
     * Toggle timestamps
     *
     */
    public $timestamps = true;

    /**
     * Define guard
     *
     */
    protected $guard = 'administrator';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function account() {
        return $this->hasOne('App\Account', 'user_id','id');
    }
}
