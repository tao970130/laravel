<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class LoginController extends Controller
{
    /**
     * 登录页面
     */
    public function index()
    {
    	return view('login/index');
    }

    /**
     * 执行登录
     */
    public function login()
    {
    	$user=new User;
    	$userInfo=$user->getOne($_POST);
    	$userInfo=json_decode($userInfo,true);
    	if($userInfo[0]['user_pwd'] == $_POST['password'])
    	{
            session(['user_id'=>$userInfo[0]['user_id']]);
    		return redirect('schedule/index');
    	}
    	else
    	{
    		return redirect('login/index');
    	}
    }
}
