<?php

require_once 'AppController.php';
require_once __DIR__.'\..\DAO\UserDAO.php';

class BoardController extends AppController
{
    public function board() {
        $userDAO = new UserDAO();
        $user = $userDAO->getUserByName("Barbara");

        $this->render("board", ["user" => $user]);
    }
}