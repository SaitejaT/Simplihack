<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome <?php if (isset($_SESSION['login_user'])) echo $login_session;?> </b><br><br>
<div id="tags">
<form action="/messages/groups" method="GET">
<button id=1>java</button>
<button id=2>php</button>
<button id=3>python</button>
<button id=4>ruby</button>
<button id=5>javascript</button>
<button id=6>asp.net</button>
<button id=7>django</button>
<button id=8>mysql</button>
<button id=9>html</button>
<button id=9>css</button>
</form>
</div>

<b id="logout"><a href="/chats/logout">Log Out</a></b>
</div>
</body>
</html>
