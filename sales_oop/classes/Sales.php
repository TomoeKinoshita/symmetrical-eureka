<?php
include 'Connection.php';

class Sales extends Connection {

    public function register($request){
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = password_hash($request['password'],PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (first_name,last_name,username,password) VALUES ('$first_name','$last_name','$username','$password')";

        if($this->conn->query($sql)){
            header('location: ../views/login.php');
        }else{
            die("ERROR: ".$this->conn->error);
        }
    }

    public function login($request){
        $username = $request['username'];
        $password = $request['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";

        if($result = $this->conn->query($sql)){
            if($result->num_rows == 1){
                $user = $result->fetch_assoc();

                if(password_verify($password,$user['password'])){
                    session_start();

                    $_SESSION['username'] = $user['username'];
                    $_SESSION['id'] = $user['id'];

                    header('location:../views/dashboard.php');
                    exit;

                }else{
                    die("ERROR: password doesn't match.");
                }
            }else{
                die("ERROR: username doesn't match.");
            }
        }
    }

    public function getUser(){
        $id = $_SESSION['id'];
        $sql = "SELECT * from Users WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("ERROR: ".$this->conn->error);
        }
    }

    public function getAllProducts(){
        $sql = "SELECT * FROM products";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('error of retrieving all products.'. $this->conn->error);
        }
    }

    public function addProduct($request){
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "INSERT INTO products (product_name,price,quantity) VALUES ('$product_name','$price','$quantity')";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
        }else{
            die("ERROR: ".$this->conn->error);
        }
    }

    public function editProduct($request){  // doesn't work??
        $id = $_SESSION['id'];

        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "UPDATE products SET product_name = '$product_name', price = '$price', quantity = '$quantity' WHERE id = '$id'";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die("ERROR: ".$this->conn->error);
        }

    }

    public function deleteProduct($id){  // this $id is user's id?

        $sql = "DELETE FROM products WHERE id = $id";

        if($this->conn->query($sql)){
            session_destroy();  // this session is user's data?

            header('location: ../views/dashboard.php');
            exit;
        }else{
            die("ERROR: ".$this->conn->error);
        }
    }

}