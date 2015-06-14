<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public static function boot()
    {
        parent::boot();

        static::saving(function($instance) {
            $instance->code = strtoupper(str_random(6));
        });
    }

    /**
     * Returns the team's members
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function members()
    {
        return $this->hasMany('App\User');
    }

}
