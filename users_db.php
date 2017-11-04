<?php
class UsersDB {

	private function __construct() {}

	public static function getUsers() {

		$query = "SELECT * FROM accounts";
		$statement = Database::getDB()->prepare($query); 
		$statement->execute();
		$accounts = $statement->fetchAll();
		$usersArray = array();

		foreach ($accounts as $account) {
				
			$usersArray[] = new User($account['id'], $account['email'], $account['fname'], $account['lname'], $account['phone'], 
				$account['birthday'], $account['gender'], $account['password']);

		}

		return $usersArray;
	
	}

	public static function insertUser($email, $fname, $lname, $phone, $birthday, $gender, $password) {

		$query = "INSERT INTO accounts (email, fname, lname, phone, birthday, gender, password)
					VALUES ('$email', '$fname', '$lname', '$phone', '$birthday', '$gender', '$password')";
		$statement = Database::getDB()->prepare($query); 
		$statement->execute();

	}

	public static function updateUserPassword($id, $password) {

		$query = "UPDATE accounts SET password = '$password' WHERE id = '$id'";
		$statement = Database::getDB()->prepare($query); 
		$statement->execute();

	}

	public static function deleteUser($id) {

		$query = "DELETE FROM accounts WHERE id = '$id'";
		$statement = Database::getDB()->prepare($query); 
		$statement->execute();

	}
}
?>