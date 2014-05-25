<?php
if(!$HW){
	die("Hack try.");
}

class Player
{
	private $_hash;
	private $_nick;
	private $_ip;
	private static $salt = '2b2HG9069926uzx21';
	
	public function __construct($hash){
		$user_object = Base::query("SELECT * FROM `hw_players` WHERE `hash` = '{$hash}' LIMIT 1");
		$user_array = $user_object->fetch_assoc();
		
		$this->_hash = $user_array['hash'];
		$this->_nick = $user_array['nick'];
		$this->_ip = $user_array['ip'];
		
	}
	
	public function getNick(){
		return $this->_nick;
	}
	
	public function getIp(){
		return $this->_ip;
	}
	
	public static function registerNewUser($nick, $pass, $mail = NULL){
		$hash = sha1(sha1($nick.$pass).self::$salt);
		/*$to      = $mail;
		$subject = 'the subject';
		$message = 'hello';
		$headers = 'From: webmaster@example.com' . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		*/
		if(Base::query("INSERT INTO `hw_players` (`nick`, `pass`, `hash`) VALUES ('{$nick}', '{$pass}', '{$hash}')")){
			/*if(mail($to, $subject, $message, $headers);){
				return true;
			}else{
				return false;
			}*/
			return true;
		}else{
			return false;
		}
	}
	
	public static function loginUser($nick, $pass){
		$hash = sha1(sha1($nick.$pass).self::$salt);
		$user_object = Base::query("SELECT * FROM `hw_players` WHERE `hash` = '{$hash}' LIMIT 1") or die("1");
		if($user_object->num_rows == 0){
			return false;
		}
		if($user_object->num_rows == 1){
			setCookie("sw_hash", $hash, time()+3600);
			Base::query("UPDATE `hw_players` SET `logged` = 1, `ip` = '{$_SERVER['REMOTE_ADDR']}' WHERE `hash` = '{$hash}' LIMIT 1") or die("2");
			return true;
		}
	}
	public function logoutUser(){
		Base::query("UPDATE `hw_players` SET `logged` = 0 WHERE `hash` = '{$hash}' LIMIT 1") or die("3");
		setCookie("sw_hash", "0", time()-100);
	}
}

?>