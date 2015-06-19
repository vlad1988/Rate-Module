<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Method extends Model {

    protected $fillable = ['type', 'unit'];
    protected $table = 'method';

}
