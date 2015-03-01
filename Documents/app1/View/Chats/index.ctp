<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>PHP Login Session</h1>
<div id="login">
<h2>Login Form</h2>
<form action="/chats/login" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value="login">
</form>
<a href="/chats/signup">Sign Up!</a> 
</form>
</div>
</div>
</body>
</html>
