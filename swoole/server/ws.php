<?php
class Ws {

    CONST HOST = "0.0.0.0";
    CONST PORT = 8812;

    public $ws = null;
    public function __construct() {
        $this->ws = new swoole_websocket_server("0.0.0.0", 8800);

        $this->ws->set(
            [
                'enable_static_handler' => true,
                'document_root' => "/var/www/movie/public/static",
                "worker_num"=>1
            ]
        );
        $this->ws->on('workstart',[$this,'OnWorkStart']);
        $this->ws->on('request',[$this,'OnWorkStart']);
        $this->ws->on("open", [$this, 'onOpen']);
        $this->ws->on("message", [$this, 'onMessage']);
        $this->ws->on("task", [$this, 'onTask']);
        $this->ws->on("finish", [$this, 'onFinish']);
        $this->ws->on("close", [$this, 'onClose']);
        $this->ws->start();
    }


    function OnWorkStart($ws,$workid){
        define("APP_PATH",'/var/www/movie/application/');
        require "/var/www/movie/thinkphp/base.php";
    }


    function OnRequest($request, $response){
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
        var_dump($request->fd);
        if($request->fd == 1) {
            // 每2秒执行
            swoole_timer_tick(2000, function($timer_id){
                echo "2s: timerId:{$timer_id}\n";
            });
        }
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
        print_r($data);
        // 耗时场景 10s
        sleep(10);
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
    }
}

$obj = new Ws();