<?php 

class App {

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    function __construct(){
        $url = $this->parseURL();

        //mengambil controller
        //cek apakah controller yang ditulis ada didalam folder controllers
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            //hapus nama yang dimasukkan didalam array
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;




        //mengambil methods
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if(!empty($url)){
            $this->params = array_values($url);
        }

        //jalankan controller, methods, kirim params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    //methods untuk memotong url dan menulis ulang dengan rapi
    public function parseURL(){
        if (isset($_GET['url'])){

            //rtrim untuk menghilangkan "/" diakhir string
            $url = rtrim($_GET['url'], '/');

            //membersihkan $url dari string aneh(yang mungkin di heack)
            $url = filter_var($url, FILTER_SANITIZE_URL);

            //memecah $url berdasarkan "/"
            $url = explode('/', $url); 
            return $url;
        }
    }
}