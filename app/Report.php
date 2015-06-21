<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model {

    protected $fillable = ['title', 'type', 'status', 'expire_date', 'unit_store', 'rate', 'worker_id'];

}
