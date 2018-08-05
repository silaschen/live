$(function(){
$("#chat").keyup(function(event){
	var keycode = event.which;
	if(keycode == 13){
			

		var val = $(this).val();
		$.post("http://127.0.0.1:8810/index/index/chat",{'cont':val},function(data){


			


},'JSON');




	}



});
});
