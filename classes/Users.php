<?php
require_once "Database.php";

class User extends Database
{
    public function store($request) // $request comes from $_POST inside register-action.php
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = password_hash($request['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (first_name, last_name, username, password)
                VALUES ('$first_name', '$last_name', '$username', '$password')";

        if($this->conn->query($sql)){
            header('location: ../views/dashbord.php'); // redirect to index.php
            exit;
        } else {
            die("ERROR in creating the user: " . $this->conn->error);
        }
    }

    public function login($request)
    {
        $username = $request['username'];
        $password = $request['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            # CHECK THE PASSWORD
            $user = $result->fetch_assoc();

            if(password_verify($password, $user['password'])){
                # CREATE THE SESSION
                session_start();

                $_SESSION['id']         = $user['id'];
                $_SESSION['username']   = $user['username'];
                $_SESSION['full_name']  = $user['first_name'] . " " . $user['last_name'];
                header("location: ../views/dashbord.php");
                exit;
            } else {
                die("PASSWORD IS INCORRECT");
            }
        } else {
            die("USERNAME NOT FOUND");
        }
    }

    public function logout()
{
    // セッション開始
session_start();

// セッションデータをクリア
session_unset();

// セッションを破棄
session_destroy();

// ユーザーをログインページにリダイレクト
header("Location: login.php");
exit();

}

public function getAllProducts()
{
    $sql = "SELECT * FROM products";

    if($result = $this->conn->query($sql)){
        return $result;
    } else {
        die("ERROR in retrieving all the users: " . $this->conn->error);
    }
}


    }






?>