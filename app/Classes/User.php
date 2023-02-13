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
    static public function find_user_by_email($email){
        $sql = "SELECT * FROM users WHERE email='{$email}'";
        $result = self::$db->query($sql);
        return $result;
    }

    static public function find_user_by_id($id){
        $sql = "SELECT * FROM users WHERE id='{$id}'";
        $result = self::$db->query($sql);
        return $result;
    }

    static public function set_preference($genre_id){
        $sql = "SELECT artists.name AS artist_name, genres.name AS genre_name FROM artists JOIN genres ON artists.genre_id = genres.id WHERE genre_id='{$genre_id}'";
        // dd($sql);
        $result = self::$db->query($sql);
        return $result->fetch_assoc();
    }
    
    // Search id base on email and password?
    public function find_user_id($email){
        $sql = "SELECT id FROM users WHERE email='{$email}' LIMIT 1";
        $result = self::$db->query($sql);
        return $result->fetch_assoc();
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
        $sql = "INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)";
        $stmt = self::$db->prepare($sql);
        $stmt->bind_param('ssss', $this->name, $this->username, $this->email, password_hash($this->password, PASSWORD_DEFAULT));
        $stmt->execute();
        $result = $stmt->insert_id;
        return $result;
    }

    public function validate_password($form_password){

        return password_verify($form_password, $this->password);

    }

    // update genre_id depending on user
    public function set_genre($genre_id, $user_id){
        // dd($user_id);
        $sql = "UPDATE users SET genre_id='{$genre_id}' WHERE id='{$user_id}' LIMIT 1";
        $result = self::$db->query($sql);
        return $result;
    }

    
}