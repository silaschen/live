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
		/**if($redis->get(self::getverikey($phone))){
			echo json_encode(['msg'=>'please wait to retry']);
			return;
		}
		$code = self::getSmsCode($phone);
		$res = Help::sendSms($phone,$code);
		if($res->Code === 'OK'){
			
			\redisObj\redisTool::getRedis()->setkey("verify_".$phone,60*2,$code);
		}**/
			

	}

	public function verify(){
		$code=$_GET['code'];
		$phone = $_GET['phone_num'];
		$value = \redisObj\redisTool::getRedis()->get(self::getverikey($phone));
		if(!$value){
			echo json_encode(['msg'=>'waste time,please reget code']);
		return;
		}


		echo json_encode(['res'=>$value === $code]);
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
