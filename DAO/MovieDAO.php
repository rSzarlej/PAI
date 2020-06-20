<?php

require_once "DAO.php";
require_once __DIR__."\..\Models\Movie.php";

class MovieDAO extends DAO {

    public function getMovies()
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM pai.movies
        ');

        $stmt->execute();

        $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($movies == false) {
            return null;
        }

        $retVal = array();

        foreach ($movies as $mv)
            $retVal[] = new Movie($mv["movieid"], $mv["title"], $mv["image"], $mv["price"]);

        return $retVal;
    }

    public function getMovieById(int $id)
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM pai.movies WHERE movieid = :movieid
        ');
        $stmt->bindParam(':movieid', $id, PDO::PARAM_INT);
        $stmt->execute();

        $movie = $stmt->fetch(PDO::FETCH_ASSOC);

        if($movie == false) {
            return null;
        }

        return new Movie($movie["movieid"], $movie["title"], $movie["image"], $movie["price"]);
    }
}