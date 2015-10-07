<?php

class LoginView {
	private static $login = 'LoginView::Login';
	private static $logout = 'LoginView::Logout';
	private static $name = 'LoginView::UserName';
	private static $password = 'LoginView::Password';
	private static $cookieName = 'LoginView::CookieName';
	private static $cookiePassword = 'LoginView::CookiePassword';
	private static $keep = 'LoginView::KeepMeLoggedIn';
	private static $messageId = 'LoginView::Message';
	private static $savedName = '';
	public function __construct(LoginModel $loginModel){
		$this->loginModel = $loginModel;
	}

	/**
	 * Create HTTP response
	 *
	 * Should be called after a login attempt has been determined
	 *
	 * @return  void BUT writes to standard output and cookies!
	 */
	 
	 
	 
	public function response() {
		$message = $this->loginModel->responseModel();
		
		
		
		if($this->loginModel->isLoggedin())
		{
			$response = $this->generateLogoutButtonHTML($message);
		}
		else
		{
			$response = $this->generateLoginFormHTML($message);
		}
		
		
		return $response;
	}
	

	
	/**
	* Generate HTML code on the output buffer for the logout button
	* @param $message, String output message
	* @return  void, BUT writes to standard output!
	*/
	private function generateLogoutButtonHTML($message) {
		return '
			<form  method="post" >
				<p id="' . self::$messageId . '">' . $message .'</p>
				<input type="submit" name="' . self::$logout . '" value="logout"/>
			</form>
		';
	}
	
	/**
	* Generate HTML code on the output buffer for the logout button
	* @param $message, String output message
	* @return  void, BUT writes to standard output!
	*/
	private function generateLoginFormHTML($message) {
		return $this->renderIsLoggedIn() . '
			<a href="?register">Register here</a>
			<form method="post" > 
				<fieldset>
					<legend>Login - enter Username and password</legend>
					<p id="' . self::$messageId . '">' . $message . '</p>
					
					<label for="' . self::$name . '">Username :</label>
					<input type="text" id="' . self::$name . '" name="' . self::$name . '" value="' . self::$savedName . '" />

					<label for="' . self::$password . '">Password :</label>
					<input type="password" id="' . self::$password . '" name="' . self::$password . '" />

					<label for="' . self::$keep . '">Keep me logged in  :</label>
					<input type="checkbox" id="' . self::$keep . '" name="' . self::$keep . '" />
					
					<input type="submit" name="' . self::$login . '" value="login" />
				</fieldset>
			</form>
		';
	}
	
	
	private function renderIsLoggedIn() {
		$isLoggedIn = $this->loginModel->isLoggedin();
		if ($isLoggedIn) {
		  return '<h2>Logged in</h2>';
		}
		else {
		  return '<h2>Not logged in</h2>';
		}
	}

	

	
	public function isPosted()
	{
		
		if(isset($_POST[self::$login]))
		{
			self::$savedName = $_POST[self::$name];
			return true;
		}
		else
		{
			return false;
		}
		
	}
	
	public function logout(){
		if(isset($_POST[self::$logout])){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function getUsername()
	{
		
		return $_POST[self::$name];
		
	}
	public function getPassword()
	{
		return $_POST[self::$password];
	}
	
	
	
	

	
}