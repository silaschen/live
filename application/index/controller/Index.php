<?php
namespace app\index\controller;
use think\Db;
use think;
use think\Request;
use app\index\controller\Common;
ini_set('display_errors','On');
class Index extends Common
{
		function index(){

			return ;
		}

	public function test(){
		$phone =$_GET['phone'];
		if(!preg_match('/^1(3|5|8)\d{9}$/',$phone)){
			echo json_encode(['msg'=>'error fomat phone number']);
			return;
		}
		$redis=\redisObj\redisTool::getRedis();
		$_POST['server']->task(['code'=>$code,'phone'=>$phone]);
		Help::show(['code'=>HELP::SUCCESS_CODE,'msg'=>'the msg has send.']);

	}

	public function verify(){
		$code=$_GET['code'];
		$phone = $_GET['phone_num'];
		$value = \redisObj\redisTool::getRedis()->get(self::getverikey($phone));
		if(!$value){
			echo json_encode(['msg'=>'waste time,please reget code']);
		        return;
		}
		echo json_encode(['code'=>$value === $code]);
		return;		
	}	


	
	static function getSmsCode($phone)
	{
		$code = mb_substr($phone,2,1);
		$code.=rand(1000,9999);	
		return $code;	
	}

	static function getverikey($phone){

		return 'verify_'.$phone;
	}

}
