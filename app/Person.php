<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'person';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'age', 'message'];

}
