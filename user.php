<?php
class User {

	private $id, $email, $fname, $lname, $phone, $birthday, $gender, $password;

	public function __construct ($id, $email, $fname, $lname, $phone, $birthday, $gender, $password) {
		$this->id = $id;
		$this->email = $email;
		$this->fname = $fname;
		$this->lname = $lname;
		$this->phone = $phone;
		$this->birthday = $birthday;
		$this->gender = $gender;
		$this->password = $password;
	}

	public function getID() {
		return $this->id;
	}
	public function setID($value) {
		$this->id = $value;
	}

	public function getEmail() {
		return $this->email;
	}
	public function setEmail($value) {
		$this->email = $value;
	}

	public function getFname() {
		return $this->fname;
	}
	public function setFname ($value) {
		$this->fname = $value;
	}

	public function getLname() {
		return $this->lname;
	}
	public function setLname ($value) {
		$this->lname = $value;
	}

	public function getPhone() {
		return $this->phone;
	}
	public function setPhone ($value) {
		$this->phone = $value;
	}

	public function getBirthday() {
		return $this->birthday;
	}
	public function setBirthday ($value) {
		$this->birthday = $value;
	}

	public function getGender() {
		return $this->gender;
	}
	public function setGender ($value) {
		$this->gender = $value;
	}

	public function getPassword() {
		return $this->password;
	}
	public function setPassword ($value) {
		$this->passsword = $value;
	}

	public function displayUserRow() { ?>
		<tr>
			<td><?php echo $this->getID(); ?></td>
			<td><?php echo $this->getEmail(); ?></td>
			<td><?php echo $this->getFname(); ?></td>
			<td><?php echo $this->getLname(); ?></td>
			<td><?php echo $this->getPhone(); ?></td>
			<td><?php echo $this->getBirthday(); ?></td>
			<td><?php echo $this->getGender(); ?></td>
			<td><?php echo $this->getPassword(); ?></td>
		</tr>
<?php	}
}
?>
