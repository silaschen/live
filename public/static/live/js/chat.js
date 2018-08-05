 var ws = new WebSocket("ws://127.0.0.1:8900");
                
               ws.onopen = function()
               {
			console.log('chat connected')
                  // Web Socket 已连接
               };
                
               ws.onmessage = function (evt) 
               { 
                  var data = evt.data;
		data = JSON.parse(data);
		console.log(data);
               };
                
               ws.onclose = function()
               { 
                  // 关闭 websocket
               //   alert("连接已关闭..."); 
               };
