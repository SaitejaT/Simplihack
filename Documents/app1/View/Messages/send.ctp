<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	//var text = string(("#chatline").val());
	var div = document.getElementById('chatArea');
	txt = div.innerHTML + txt;
	$('#chatArea').html(eval($text))
	
</script>
</head>  
<body>  

<div id='chatArea' style='border:1px solid #aaa; width:500px; height:400px; overflow:auto;'></div>  
<form action="/messages/send" id="fid" method="post">
<input id="chatline" type="text" value="" />  <br/>
<button id='btn'>Send</button>
</form> 
<b id="logout"><a href="/chats/logout">Log Out</a></b>
<b id="pc"><a href="/messages/groups">Chat</a></b>
</body>  
</html>

