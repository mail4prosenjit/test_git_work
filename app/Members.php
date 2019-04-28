<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    //
    protected $fillable = ['frist_name','last_name','designation','email','contact_no','description', 'fees','image'];
}
