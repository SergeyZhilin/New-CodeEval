<?php 

	namespace models;

	use libs\DbConnect;

class User extends Model
{
	public $id;
    public $username = '';
    public $email = '';
    public $password = '';

    public function create()
    {
        $sql = "INSERT INTO user(username, email, password) VALUES ('name', 'email', 'password')";
        $this->connection->prepare($sql)->execute();

        $this->id = $this->connection->lastInsertId();

        return $this;
    }
}

?>