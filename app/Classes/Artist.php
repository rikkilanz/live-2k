<?php

    class Artist {
        static protected $db;

        public $id;
        public $name;
        public $stage;
        public $genre_id;
        public $image_url;

        static public function set_db($db){
            self::$db = $db;
        }

        public function __construct($args = []){
            $this->id = $args['id'] ?? null;
            $this->name = $args['name'] ?? null;
            $this->stage = $args['stage'] ?? null;
            $this->genre_id = $args['genre_id'] ?? null;
            $this->image_url = $args['image_url'] ?? null;
        }
        
        static public function find_artist_by_genre($genre_id){
            $sql = "SELECT * FROM artists WHERE genre_id={$genre_id}";
            $result = self::$db->query($sql);
            return $result;
        }

        static public function find_artist_by_stage($stage){
            $sql = "SELECT * FROM artists WHERE stage={$stage}";
            $result = self::$db->query($sql);
            return $result;
        }

    }