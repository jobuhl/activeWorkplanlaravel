<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * almutz
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'company';

    public function address(){

        return belongsTo('address');
    }

    public function admin(){

        return belongsTo('admin');
    }
}
