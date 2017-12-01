<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model
{
    protected $table='user';

    public function getOne($data)
    {
    	return $this->where('user_name',$data['username'])->get();
    }
}
