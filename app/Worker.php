<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model {
    protected $fillable = ['name', 'patronymic', 'surname', 'place'];

}
