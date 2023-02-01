<?php

class User {
    static protected $db;
    
    public $id;
    public $name;
    public $username;
    public $email;
    public $password;
    public $genre_id;

    static public function set_db($db) {
        self::$db = $db;
    }

    // Search user function
    public function find_user_by_email($email){
        $sql = "SELECT * FROM users WHERE email = '{$email}'";
        $result = self::$db->query($sql);
        return $result;
    }
    // Construct user when class is called
    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->name = $args['name'] ?? null;
        $this->username = $args['username'] ?? null;
        $this->email = $args['email'] ?? null;
        $this->password = $args['password'] ?? null;
        $this->genre_id = $args['genre_id'] ?? null;
    }

    // Create new user
    public function create(){
        $sql = "INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = self::$db->prepare($sql);
        $stmt->bind_param('ssss', $this->$name, $this->username, $this->email, password_hash($this->password, PASSWORD_DEFAULT));
        $stmt->execute();
        $result = $stmt->insert_id;
        return $result;
    }

    public function validate_password($form_password){

        return password_verify($form_password, $this->password);

    }

    
}