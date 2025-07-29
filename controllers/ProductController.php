<?php
require_once 'models/Product.php';

class ProductController {
    private $product;

    public function __construct() {
        $this->product = new Product();
    }

    // Display all products
    public function index() {
        $stmt = $this->product->read();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $title = "Products Management";
        include 'views/products/index.php';
    }

    // Show create form
    public function showCreateForm() {
        $title = "Create New Product";
        include 'views/products/create.php';
    }

    // Create new product
    public function create() {
        if($_POST) {
            $this->product->name = $_POST['name'];
            $this->product->description = $_POST['description'];
            $this->product->price = $_POST['price'];
            $this->product->category = $_POST['category'];

            if($this->product->create()) {
                header("Location: /products?message=Product created successfully");
                exit();
            } else {
                $error = "Unable to create product.";
                $title = "Create New Product";
                include 'views/products/create.php';
            }
        }
    }

    // API endpoints
    public function apiIndex() {
        $stmt = $this->product->read();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($products);
    }

    public function apiCreate() {
        $data = json_decode(file_get_contents("php://input"));
        
        if($data && !empty($data->name) && !empty($data->price)) {
            $this->product->name = $data->name;
            $this->product->description = $data->description ?? '';
            $this->product->price = $data->price;
            $this->product->category = $data->category ?? '';

            if($this->product->create()) {
                http_response_code(201);
                echo json_encode(array("message" => "Product was created."));
            } else {
                http_response_code(503);
                echo json_encode(array("message" => "Unable to create product."));
            }
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Unable to create product. Data is incomplete."));
        }
    }
}
?>