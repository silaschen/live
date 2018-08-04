 var ws = new WebSocket("ws://127.0.0.1:8800");
                
               ws.onopen = function()
               {
			console.log('connected')
                  // Web Socket 已连接
               };
                
               ws.onmessage = function (evt) 
               { 
                  var data = evt.data;
		data = JSON.parse(data);
		console.log(data.time);
                  var con=`<div class="frame-item">
						<span class="frame-dot"></span>
						<div class="frame-item-author">
							silas
						</div>
						<p>`+data.time+`&nbsp`+ data.con+`</p>
						
					</div>`;
		
		$("#con").prepend(con);


               };
                
               ws.onclose = function()
               { 
                  // 关闭 websocket
               //   alert("连接已关闭..."); 
               };
