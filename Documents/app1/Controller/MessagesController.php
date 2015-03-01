<?php
class MessagesController extends AppController
{
	public function groups()
	{
		session_start(); // Starting Session

	}
	
	public function send()
	{
		$dom = new DOMDocument;
		$dom->loadHTMLfile("/var/www/app/View/Messages/send.ctp");
		$divs = $dom->getElementsByTagName("div");
		foreach ($divs as $div)
			$text="<div>".$div->nodeValue."</div>" ;
		//$this->set('text',$div->nodeValue);

		/*$msg=isset($this->request->data['msg']) ;//? $_POST['msg'] : "";
		$ip=isset($_POST['ip']) ;//? $_POST['ip'] : "";
		$query = $this->Message->query("insert into messages (msg,ip) values ('$msg','$ip')");
		$query1 = $this->Message->query("select * from messages");
		debug($query1);
		 $this->set('mess','$query1');*/
	}
}
