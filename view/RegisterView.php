<?php


class RegisterView {
	private static $name = 'RegisterView::UserName';
	private static $password = 'RegisterView::Password';
	private static $messageId = 'RegisterView::Message';


	
		private function generateRegisterFormHTML($message) {
		return '
			<form method="post" > 
				<fieldset>
					<legend>Register User</legend>
					<p id="">' . $message . '</p>
					
					<label for="' . self::$name . '">Username :</label>
					<input type="text" id="" name="" value="" />

					<label for="' . self::$password . '">Password :</label>
					<input type="password" id="" name="" />

					<input type="submit" name="" value="Register" />
					
				</fieldset>
			</form>
		';
	}
	
	

	
}