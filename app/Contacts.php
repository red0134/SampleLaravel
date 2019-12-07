<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    //i'restrict kuno ang id field para dili ma input
    protected $guarded = [
        'id',
    ];
}
