<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
	protected $table='queue';//表名
    public $timestamps=false;//过滤默认的字段
    protected $primaryKey='queue_id';//修改默认主键

    public function queueAdd($data)
    {
    	// var_dump($data);
    	foreach($data as $k => $v)
        {
            $arr=explode(',',$data[$k]);
            $tmp[$k]['queue_time']=$arr[0];
            $tmp[$k]['queue_content']=$arr[1];
            $tmp[$k]['queue_user']=$arr[2];
            $tmp[$k]['queue_type']=$arr[3];
        }
        return $this->insert($tmp);

    }
}
