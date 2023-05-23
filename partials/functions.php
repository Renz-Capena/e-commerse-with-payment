<?php

    require "db.php";

    session_start();

    // REGISTER NEW ACCOUNT

    $notif = false;
    $notif_text = '';

    if(isset($_POST['registerBtn'])){
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $notif = true;

        if($firstName && $lastName && $email && $password && $confirm_password){

            if($password === $confirm_password){

                $sql='INSERT INTO users (first_name,last_name,email,password) VALUES (?,?,?,?)';
                $stmt = $con->prepare($sql);
                $stmt->execute([$firstName,$lastName,$email, password_hash($password,PASSWORD_DEFAULT)]);

                $notif_text = "<div class='alert alert-success' id='notif'>Register account successs!</div>";
            }else{
                $notif_text = "<div class='alert alert-danger' id='notif'>Password is not match!</div>";
            }
        }else{
            $notif_text = "<div class='alert alert-danger' id='notif'>Please fill up all fields!</div>";
        }

    }


    // LOGIN

    if(isset($_POST['loginBtn'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $notif = true;

        if($email && $password){
         
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = $con->prepare($sql);
            $stmt->execute([$email]);
            $fetch = $stmt->fetch();
            
            if($stmt->rowCount()){

                $db_pass = $fetch['password'];
                $_SESSION['userId'] = $fetch['id'];

                // echo $stmt->fetch()['email'];

                if(password_verify($password,$db_pass)){
                    header("location: home.php");
                    // $notif_text = "<div class='alert alert-success' id='notif'>Successs!</div>";
                }else{
                    $notif_text = "<div class='alert alert-danger' id='notif'>Wrong password!</div>";
                }
            }else{
                $notif_text = "<div class='alert alert-danger' id='notif'>There is no such account!</div>";
            }


        }else{
            $notif_text = "<div class='alert alert-danger' id='notif'>Please fill up all fields!</div>";
        }
    }

    // ADD TO CART BUTTON


    if(isset($_POST['cartBtn1']) || isset($_POST['cartBtn2']) || isset($_POST['cartBtn3'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $price = $_POST['price'];

        $sql = "INSERT INTO carts (user_id,name,description,price) VALUES (?,?,?,?)";
        $stmt = $con->prepare($sql);
        $stmt->execute([$id,$name,$desc,$price]);


        header("location: home.php");
        // header("refresh: 0");
    }

    // DELETE BTN
    // console.log(payment.value)
    if(isset($_POST['deleteBtn'])){
        $cartId = $_POST['cart_id'];

        $deleteSql = "DELETE FROM carts WHERE id = ?";
        $stmt = $con->prepare($deleteSql);
        $stmt->execute([$cartId]);

        header("location: cart.php");
    }


