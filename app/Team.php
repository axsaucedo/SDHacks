<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

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
