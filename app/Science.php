<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Science extends Model {

    protected $fillable = ['type', 'unit'];
    protected $table = 'science';
}
