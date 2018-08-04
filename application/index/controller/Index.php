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
		Help::show(['code'=>1,'msg'=>'the msg has send.']);

	}

	public function verify(){
		$code=$_GET['code'];
		$phone = $_GET['phone_num'];
		$value = \redisObj\redisTool::getRedis()->get(self::getverikey($phone));
		if(!$value){
			echo json_encode(['msg'=>'waste time,please reget code']);
		        return;
		}
		//header("Content-Type:application/json");
		\redisObj\redisTool::getRedis()->callAction('delete',[self::getverikey($phone)]);
		echo json_encode(['code'=>$code===$value]);
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
	


	public function push(){

		$msg = $_GET['content'];
		$data = [
			'time'=>date('H:i:s',time()),
			'con'=>$msg

			];
		$users=  \redisObj\redisTool::getRedis()->callAction('sMembers',['LIVE_USER']);
var_dump($users);
		foreach($users as $v){


			$_POST['server']->push($v,json_encode($data));
		}




	}





}
