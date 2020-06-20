<?php


require_once 'AppController.php';
require_once __DIR__.'\..\DAO\MovieDAO.php';

class BookController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectmovie()
    {
        if (!isset($_SESSION["id"]))
        {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=login");
            exit();
        }

        $movieDAO = new MovieDAO();
        $movies = $movieDAO->getMovies();


        if ($this->isPost())
        {
            $id = null;
            if (isset($_POST["id"]))
            {
                $id = $_POST['id'];
            }

            if($id)
            {
                $_SESSION["movieId"] = $id;

                $url = "http://$_SERVER[HTTP_HOST]/";
                header("Location: {$url}?page=dateandtime");
                exit();

            }
        }
        $this->render("selectmovie", ["movies" => $movies]);
    }

    public function dateandtime()
    {
        if (!isset($_SESSION["id"]))
        {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=login");
            exit();
        }

        if ($this->isPost())
        {
            $movieDate = null;
            $movieTime = null;
            if (isset($_POST["radiodate"]) && isset($_POST["radiotime"]))
            {
                $movieDate = $_POST['radiodate'];
                $movieTime = $_POST['radiotime'];
            }

            if($movieDate && $movieTime)
            {
                $_SESSION["movieDate"] = $movieDate;
                $_SESSION["movieTime"] = $movieTime;

                $url = "http://$_SERVER[HTTP_HOST]/";
                header("Location: {$url}?page=seats");
                exit();
            }
        }

        $this->render("dateandtime");
    }

    public function seats()
    {
        if (!isset($_SESSION["id"]))
        {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=login");
            exit();
        }

        if($this->isPost())
        {
            $seats = null;
            if(isset($_POST['seats']))
                $seats = $_POST['seats'];

            if($seats)
            {
                $movieDAO = new MovieDAO();
                $movie = $movieDAO->getMovieById($_SESSION["movieId"]);

                $_SESSION["seats"] = $seats;

                $size = sizeof($seats);
                $price = (int)$size * (int)$movie->getPrice();
                $title = $movie->getTitle();
                $date = $_SESSION["movieDate"];
                $time = $_SESSION["movieTime"];

                $url = "http://$_SERVER[HTTP_HOST]/";
                header("Location: {$url}?page=podsuma&size={$size}&price=$price&title=$title&date=$date&time=$time");
                exit();
            }

        }

        $this->render("seats");
    }

    public function podsuma()
    {
        if (!isset($_SESSION["id"]))
        {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=login");
            exit();
        }

        if($this->isPost())
        {
            //tutaj operacja dodania do bazy


            $_SESSION["movieId"] = null;
            $_SESSION["seats"] = null;
            $_SESSION["movieDate"] = null;
            $_SESSION["movieTime"] = null;

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=selectmovie");
            exit();
        }

        $this->render("podsuma");
    }
}