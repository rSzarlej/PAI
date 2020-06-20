<?php

require_once 'AppController.php';
require_once __DIR__.'\..\Models\User.php';
require_once __DIR__.'\..\DAO\UserDAO.php';

class DefaultController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->render("index");
    }

    public function back() {
        $id = null;
        if ($this->isPost()) {
            if (isset($_POST["id"]))
            {
                $id = $_POST['id'];
            }

            if ($id == 1) {//back z dateandtime
                $_SESSION["movieId"] = null;
                $_SESSION["seats"] = null;
                $_SESSION["movieDate"] = null;
                $_SESSION["movieTime"] = null;

                $url = "http://$_SERVER[HTTP_HOST]/";
                header("Location: {$url}?page=selectmovie");
                exit();
            }

            if ($id == 2) {//back z seats
                $_SESSION["seats"] = null;

                $url = "http://$_SERVER[HTTP_HOST]/";
                header("Location: {$url}?page=dateandtime");
                exit();
            }

            if ($id == 3) {//back z podsuma
                $url = "http://$_SERVER[HTTP_HOST]/";
                header("Location: {$url}?page=seats");
                exit();
            }
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        $this->render('login', ['message' => ['You have been successfully logged out!']]);
    }

    public function login() {
        if (isset($_SESSION["id"]) && isset($_SESSION["role"]))
        {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=selectmovie");
            exit();
        }

        $user = null;

        if ($this->isPost())
        {
            $email = null;
            $password = null;

            if(isset($_POST['email']) && isset($_POST['password']))
            {
                $email = $_POST['email'];
            }

            $userDAO = new UserDAO();
            $user = $userDAO->getUserByEmail($email);

            if(!$user) {
                return $this->render('login', ['message' => ['Email not recognized!']]);
            }

            if (md5($user->getPassword()) !== md5($_POST['password'])) {
                return $this->render('login', ['message' => ['Wrong password!']]);
            } else {
                $_SESSION["id"] = $user->getEmail();
                $_SESSION["role"] = $user->getRole();
                $url = "http://$_SERVER[HTTP_HOST]/";
                header("Location: {$url}?page=selectmovie");
                exit();
            }
        }

        $this->render("login");
    }
}