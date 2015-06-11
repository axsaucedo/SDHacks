<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {

    protected $table = 'applications';

    protected $guarded = ['id', 'event_id'];

}
