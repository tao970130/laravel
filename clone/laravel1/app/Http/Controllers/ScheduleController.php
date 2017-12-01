<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Queue;
use Illuminate\Support\Facades\Redis;
use Sensitive;
class ScheduleController extends Controller
{

	/**
	 * @蒋涛泽
	 * @DateTime  2017-11-29
	 * @copyright 首页 
	 */
    public function index()
    {
    	return view('sche/index');
    }

    /**
     * 添加
     */
    public function add()
    {

    	$schedule=new schedule;
    	$user_id=session('user_id');
    	$_POST['user_id']=$user_id;
    	$_POST['type']=1;
    	$res=$schedule->scheAdd($_POST);
    	if($res)
    	{
    		unset($_POST['_token']);
    		Redis::lpush('time',implode(',', $_POST));
    		return redirect('schedule/index');
    	}
    	else
    	{
    		return redirect('schedule/index');
    	}
    }

    /**
     * 队列中的数据写入消息表
     */
    public function queue()
    {
    	$queue=new Queue;
        $num=Redis::llen('time');
    	for($i=0;$i<$num;$i++)
    	{ 
            $arr[]=Redis::rpop('time');
    	}
        if(empty($arr))
        {
            exit;
        }
        $res=$queue->queueAdd($arr);
    	if($res)
        {
            echo 'ok';
        }
        else
        {
            echo 'false';
        }
    }
}
