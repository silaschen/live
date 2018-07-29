<?php
$http = new swoole_http_server("0.0.0.0", 9900);

$http->set(
    [
        'enable_static_handler' => true,
        'document_root' => "/var/www/movie/public/static",
        "worker_num"=>1
  ]
);

$http->on('WorkerStart',function(swoole_server $server,$workid){
	define("APP_PATH",'/var/www/movie/application/');
	require "/var/www/movie/thinkphp/base.php";
});

$http->on('request', function($request, $response) use($http){
	$_SERVER = [];
	if(isset($request->server)){
		foreach($request->server as $k=>$v){
				$_SERVER[strtoupper($k)] = $v;

			}
	}

	$_GET=[];
	if(isset($request->get)){
                foreach($request->get as $k=>$v){
                                $_GET[$k] = $v;

                        }
        }
	$_POST = [];
	 if(isset($request->post)){
                foreach($request->get as $k=>$v){
                                $_POST[$k] = $v;

                        }
        }



	ob_start();
	think\App::run()->send();
	//echo 'action----'.request()->action().PHP_EOL;
	$res=ob_get_contents();
	ob_end_clean();
	$response->end($res);
	//$http->close();
});

$http->start();
