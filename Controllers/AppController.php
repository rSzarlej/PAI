<?php

class AppController
{
    private $request = null;

    function __construct()
    {
        $this->request = strtolower($_SERVER['REQUEST_METHOD']);
        session_start();//inicjalizacja mechanizmu sesji
    }

    function isGet()
    {
        return $this->request === 'get';
    }
    function isPost()
    {
        return $this->request === 'post';
    }

    protected function render(string $filename, array $variables = [])
    {
        $path = dirname(__DIR__).'\Views\\'.get_class($this).'\\'.$filename.'.php';
        $output = "File not  found";

        if(file_exists($path)) {
            extract($variables);

            ob_start();
            include $path;
            $output = ob_get_clean();
        }

        echo $output;
    }
}

/*sesion*/

//$_SESSION["movieId"]
//$_SESSION["seats"]
//$_SESSION["movieDate"]
//$_SESSION["movieTime"]
//$_SESSION["id"]
//$_SESSION["role"]