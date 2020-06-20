<?php

require_once "DAO.php";
require_once __DIR__."\..\Models\User.php";

class UserDAO extends DAO {

    public function getUserByName(string $name)
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM pai.users WHERE name = :name
        ');
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false) {
            return null;
        }

        return new User($user["id"], $user["name"], $user["email"], $user["password"], $user["role"]);
    }

    public function getUserByEmail(string $email)
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM pai.users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false) {
            return null;
        }

        return new User($user["id"], $user["name"], $user["email"], $user["password"], $user["role"]);
    }

    public function getUsers()
    {
        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM pai.users WHERE email != :email;');
            $stmt->bindParam(':email', $_SESSION['id'], PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        }
        catch(PDOException $e) {
            die();
        }
    }

    public function delete(int $id)
    {
        try {
            $stmt = $this->database->connect()->prepare('DELETE FROM pai.users WHERE id = :id;');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }
        catch(PDOException $e) {
            die();
        }
    }
}