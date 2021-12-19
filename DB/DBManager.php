<?php

namespace DBManager;

use ErrorException;

use function PHPUnit\Framework\throwException;

class DBManager
{

	private	$servername = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbName = 'psw';
	private $conn = null;

	public function __construct()
	{
		$this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbName);
		if (!$this->conn) {
			$this->conn = mysqli_connect($this->servername, $this->username, $this->password);
			$this->createDB();
		}

		$sql = "CREATE TABLE Users (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			login VARCHAR(30) NOT NULL,
			password VARCHAR(255) NOT NULL,
			email VARCHAR(50) NOT NULL,
			surname VARCHAR(50) NOT NULL,
			name VARCHAR(50) NOT NULL
			)";
		mysqli_query($this->conn, $sql);
	}

	private function createDB()
	{
		$sql = "CREATE DATABASE $this->dbName";
		if (mysqli_query($this->conn, $sql)) {
			$this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbName);
		} else {
			echo mysqli_error($this->conn);
			// throw new ErrorException('Nie udalo sie polaczyc z BD');
		}
	}

	public function register($login, $password, $email, $name, $surname)
	{
		if (!$login || !$password || !$email || !$name || !$surname) {
			return "Pola nie mogą zostać puste";
		}
		if ($this->isRegistered($login, $email)) {
			return "Konto o danym loginie lub mailu jest obecnie w systemie";
		}
		$hashPassword = password_hash($password, PASSWORD_DEFAULT);
		$quoteLogin = quotemeta($login);
		if ($quoteLogin != $login) {
			return "Login zawiera niedozwolone znaki";
		}
		if (!strpos($email, '@'))
			return 'Nieprawidłowy format email';
		$sql = "INSERT INTO Users (login, password, email, name, surname)
		VALUES ('$login', '$hashPassword', '$email', '$name', '$surname');";
		$result = $this->conn->query($sql);
		if ($result)
			return "Pomyslnie dodano konto do serwisu";
		return 'Nie udalo sie zalozyc konta, sprobuj ponownie';
	}

	private function isRegistered($login, $email)
	{
		$sql = "SELECT id from Users WHERE (login='$login') 
		OR (email='$email');";
		$result = $this->conn->query($sql);
		if ($result && $result->num_rows > 0) {
			return true;
		}
		return false;
	}

	public function login($login, $password)
	{
		$sql = "SELECT * FROM Users WHERE (login='$login');";
		$result = $this->conn->query($sql);
		if ($result && $result->num_rows > 0) {
			$DBpassword = $result->fetch_assoc()['password'];
			if (password_verify($password, $DBpassword)) {
				return true;
			}
		}
		return false;
	}

	public function getData($login = null)
	{
		if (!$login) {
			$sql = "SELECT * FROM Users;";
			$result = $this->conn->query($sql);
			while ($row = $result->fetch_assoc()) {
				echo '<pre>';
				var_dump($row);
				echo '</pre>';
			}
			die();
		}
		$sql = "SELECT * FROM Users WHERE login='$login';";
		$result = $this->conn->query($sql);
		if ($result && $result->num_rows > 0) {
			return $result->fetch_assoc();
		}
		return [];
	}

	public function updateData($login, $password, $name, $surname)
	{
		if (!$password || !$name || !$surname) {
			return "Dane nie mogą być puste";
		}

		$password = password_hash($password, PASSWORD_DEFAULT);
		$sql = "UPDATE Users 
		SET name='$name', surname='$surname'
		WHERE login='$login';";
		$this->conn->query($sql);
		return 'Dane zaktualizowane pomyślnie';
	}

	public function logout()
	{
		mysqli_close($this->conn);
	}
}
