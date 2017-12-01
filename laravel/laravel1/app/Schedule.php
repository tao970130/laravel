<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table='schedule';//表名
    public $timestamps=false;//过滤默认的字段

    public function scheAdd($data)
    {
    	$this->sche_time=strtotime($data['remindTime']);
    	$this->sche_content=$data['remindContent'];
    	$this->add_time=date('Y-m-d H:i:s');
    	return  $this->save();
    }
}
