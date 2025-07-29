<?php
require_once 'models/User.php';

class UserController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    // Display all users
    public function index() {
        $stmt = $this->user->read();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $title = "Users Management";
        include 'views/users/index.php';
    }

    // Show create form
    public function showCreateForm() {
        $title = "Create New User";
        include 'views/users/create.php';
    }

    // Create new user
    public function create() {
        if($_POST) {
            $this->user->name = $_POST['name'];
            $this->user->email = $_POST['email'];

            if($this->user->create()) {
                header("Location: /users?message=User created successfully");
                exit();
            } else {
                $error = "Unable to create user.";
                $title = "Create New User";
                include 'views/users/create.php';
            }
        }
    }

    // API endpoints
    public function apiIndex() {
        $stmt = $this->user->read();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($users);
    }

    public function apiCreate() {
        $data = json_decode(file_get_contents("php://input"));
        
        if($data && !empty($data->name) && !empty($data->email)) {
            $this->user->name = $data->name;
            $this->user->email = $data->email;

            if($this->user->create()) {
                http_response_code(201);
                echo json_encode(array("message" => "User was created."));
            } else {
                http_response_code(503);
                echo json_encode(array("message" => "Unable to create user."));
            }
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Unable to create user. Data is incomplete."));
        }
    }
}
?>