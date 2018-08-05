<?php
class Ws {

    CONST HOST = "0.0.0.0";
    CONST PORT = 8800;

    public $ws = null;
    public function __construct() {
        $this->ws = new swoole_websocket_server(self::HOST, self::PORT);
	$this->ws->listen('0.0.0.0',8900,SWOOLE_SOCK_TCP);
	$this->ws->listen('0.0.0.0',9900,SWOOLE_SOCK_TCP);
        $this->ws->set(
            [
                'enable_static_handler' => true,
                'document_root' => "/var/www/movie/public/static",
                "worker_num"=>4,
		"task_worker_num"=>2
		
            ]
        );
        $this->ws->on('workerstart',[$this,'OnWorkStart']);
        $this->ws->on('request',[$this,'OnRequest']);
        $this->ws->on("open", [$this, 'onOpen']);
        $this->ws->on("message", [$this, 'onMessage']);
        $this->ws->on("task", [$this, 'onTask']);
        $this->ws->on("finish", [$this, 'onFinish']);
        $this->ws->on("close", [$this, 'onClose']);
        $this->ws->start();
    }


    function OnWorkStart($ws,$workid){
        define("APP_PATH",'/var/www/movie/application/');
        require "/var/www/movie/thinkphp/start.php";
	\redisObj\redisTool::getRedis()->callAction('delete',['LIVE_USER']);
	
    }


    function OnRequest($request, $response){
        $_SERVER = [];
	#var_dump($request->server);
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
		$_POST['server'] = $this->ws;
         if(isset($request->post)){
                    foreach($request->post as $k=>$v){
                                    $_POST[$k] = $v;
                            }
            }
        ob_start();
       think\App::run()->send();
        $res=ob_get_contents();
        ob_end_clean();
        $response->end($res);
    }
    /**
     * 监听ws连接事件
     * @param $ws
     * @param $request
     */
    public function onOpen($ws, $request) {
       // var_dump($ws);
	//redisObj\redisTool::getRedis()->callAction('sAdd',['LIVE_USER',$request->fd]);
    }

    /**
     * 监听ws消息事件
     * @param $ws
     * @param $frame
     */
    public function onMessage($ws, $frame) {
        echo "ser-push-message:{$frame->data}\n";
        // todo 10s
        $data = [
            'task' => 1,
            'fd' => $frame->fd,
        ];
        //$ws->task($data);

        swoole_timer_after(5000, function() use($ws, $frame) {
            echo "5s-after\n";
            $ws->push($frame->fd, "server-time-after:");
        });
        $ws->push($frame->fd, "server-push:".date("Y-m-d H:i:s"));
    }

    /**
     * @param $serv
     * @param $taskId
     * @param $workerId
     * @param $data
     */
    public function onTask($serv, $taskId, $workerId, $data) {
        $phone = $data['phone'];
	$code=$data['code'];
                $code = \app\index\controller\Index::getSmsCode($phone);
                $res =\app\index\controller\Help::sendSms($phone,$code);
                if($res->Code === 'OK'){
                        
                        \redisObj\redisTool::getRedis()->setkey("verify_".$phone,60*2,$code);
                }

        return "on task finish"; // 告诉worker
    }

    /**
     * @param $serv
     * @param $taskId
     * @param $data
     */
    public function onFinish($serv, $taskId, $data) {
        echo "taskId:{$taskId}\n";
        echo "finish-data-sucess:{$data}\n";
    }

    /**
     * close
     * @param $ws
     * @param $fd
     */
    public function onClose($ws, $fd) {
        echo "clientid:{$fd}\n";
	 redisObj\redisTool::getRedis()->callAction('sRem',['LIVE_USER',$fd]);

    }
}

$obj = new Ws();
