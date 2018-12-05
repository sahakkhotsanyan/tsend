<?php
class Bot{
	private $token = "";
	private $url = "https://api.telegram.org/bot";
	public function __construct($token){
		$this->token = $token;
	}
	public function sendMessage($id,$text,$callback = null){
		$data = file_get_contents("$this->url$this->token/sendMessage?chat_id=$id&text=".rawurlencode($text));
		if($callback !== null) $callback(json_decode($data,true));
	}
	public function sendDocument($id,$path,$caption = null,$callback = null){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"$this->url$this->token/sendDocument");
		curl_setopt($ch, CURLOPT_POST, 1);
		$fields = [
    	'document' => new \CurlFile($path, mime_content_type($path), pathinfo($path)['basename']),
			'chat_id' => $id,
		];
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$data = curl_exec($ch);
		curl_close ($ch);
		if($callback !== null) $callback(json_decode($data,true));
	}
}
?>
