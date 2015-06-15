<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {

    protected $table = 'applications';

    protected $guarded = ['id', 'event_id'];

    /**
     * Returns the user the application belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

}
