<?php
class HomeController {
    public function index() {
        $title = "Welcome to MVC Website";
        $message = "This is a PHP MVC application with PostgreSQL database";
        include 'views/home.php';
    }
}
?>