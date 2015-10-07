<?php


class RegisterView {
	
		private static $name = 'RegisterView::UserName';
		private static $password = 'RegisterView::Password';
		private static $repeatpassword = 'RegisterView::$RepeatPassword';
		private static $register = 'RegisterView::$Register';
		
	

		public function __construct(RegisterModel $regModel){
		$this->regModel = $regModel;
		}

		 
		public function response() {

			return $this->generateRegisterFormHTML();
		}
		
		public function generateRegisterFormHTML() {
		return '
			<a href="/">Take me back to login</a>
			<form method="post"> 
				<fieldset>
					<legend>Register User</legend>
				
			<br>				
			<br>		
					<label>Username :</label>
					<input type="text" id=" ' . self::$name . ' " name=" ' . self::$name . ' " value="" />
			<br>				
			<br>
					<label>Password :</label>
					<input type="password" id=" ' . self::$password . ' " name=" ' . self::$password . ' " value=""/>
			<br>				
			<br>
					<label>Repeat Password :</label>
					<input type="password" id=" ' . self::$repeatpassword . ' " name=" ' . self::$repeatpassword . ' " value=""/>
			<br>				
			<br>
					<input type="submit" name=" ' . self::$register . ' " value="Register" />
			<br>
			<br>
					
				</fieldset>
			</form>
			
		';
	}
	
	
	
	public function getUserName()
	{
		return [self::$name];
	}
	
	public function getPassword()
	{
		return [self::$password];
	}
	
	public function getrepeatPassword()
	{
		return [self::$repeatpassword];
	}
	

	
}