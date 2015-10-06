<?php


class RegisterView {

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
					<input type="text" id="" name="UserName" value="" />
			<br>				
			<br>
					<label>Password :</label>
					<input type="password" id="" name="Password" value=""/>
			<br>				
			<br>
					<input type="submit" name="" value="Register" />
					
				</fieldset>
			</form>
		';
	}
	
	

	
}