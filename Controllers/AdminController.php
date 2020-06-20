<?php

require_once 'AppController.php';
require_once __DIR__.'\..\DAO\UserDAO.php';

class AdminController extends AppController
{
    public function admin()
    {
        if($_SESSION["role"] !== "admin")
        {
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=selectmovie");
            exit();
        }

        $userDAO = new UserDAO();
        $user = $userDAO->getUserByEmail($_SESSION["id"]);

        $this->render("admin", ["user" => $user]);
    }

    public function users()
    {
        $user = new UserDAO();
        header('Content-type: application/json');
        http_response_code(200);
        echo $user->getUsers() ? json_encode($user->getUsers()) : '';
    }

    public function userDelete()
    {
        if (!isset($_POST['id'])) {
            http_response_code(404);
            return;
        }
        $user = new UserDAO();
        $user->delete((int)$_POST['id']);
        http_response_code(200);
    }

}