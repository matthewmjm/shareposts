<?php
    /*
    * App Core Class
    * Creates URL & loads core controller
    * URL FORMAT - /controller/method/params
    */

    class Core {
        // set default values
        protected $currentController = 'Pages';
        protected $currenMethod = 'index';
        protected $params = [];

        public function __construct() {
            // print_r($this->getUrl());
            $url = $this->getUrl();
            // Look in controllers for first value
            if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
                // If exists, sets as controller
                $this->currentController = ucwords($url[0]);
                // Unset 0 Index
                unset($url[0]);
            }

            // Require the controller
            require_once '../app/controllers/' . $this->currentController . '.php';

            // Instantiate controller class
            $this->currentController = new $this->currentController;
        }

        public function getUrl() {
            // echo $_GET['url'];
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }

    /*
    Notice: Trying to access array offset on value of type null in /Users/matthewmalecki/Development/php/brad-traversy/www/shareposts/app/libraries/Core.php on line 18
    */
?>