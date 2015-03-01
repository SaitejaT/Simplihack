<?php
	Router::connect('/chats/index', array('controller' => 'chats','action'=>'index'));
	Router::connect('/chats/profile', array('controller' => 'chats','action'=>'profile'));
	Router::connect('/chats/signup', array('controller' => 'chats','action'=>'signup'));
	Router::connect('/chats/groups', array('controller' => 'chats','action'=>'groups'));
	Router::connect('/chats/profile/*', array('controller' => 'chats','action'=>'profile'));
	Router::connect('/chats/login', array('controller' => 'chats','action'=>'login'));
	Router::connect('/chats/logout', array('controller' => 'chats','action'=>'logout'));
	Router::connect('/chats/session', array('controller' => 'chats','action'=>'session'));
	Router::connect('/chats/*', array('controller' => 'chats','action'=>'index'));
	
	Router::connect('/messages/send', array('controller' => 'messages','action'=>'send'));
	Router::connect('/messages/groups', array('controller' => 'messages','action'=>'groups'));
	CakePlugin::routes();
	require CAKE . 'Config' . DS . 'routes.php';
