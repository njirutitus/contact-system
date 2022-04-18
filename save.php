<?php
 require_once 'connect.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];

    //  Validate data
    $errors = [];
    if(empty($name)){
        $errors['name'] = 'Name is required';
    }
    if(empty($email)){
        $errors['email'] = 'Email is required';
    }
    if(empty($message)){
        $errors['message'] = 'Message is required';
    }
    if(!empty($errors)){
        $_SESSION['error'] = "All fields are required";
        $_SESSION['errors'] = $errors;
        $_SESSION['old_data'] = $_POST;
        header('Location: index.php');
        exit;
    }

    //  Insert data into database
    else {
        try {
        $stmt = $db->prepare("INSERT INTO feedback (name, email, message) VALUES (?,?,?)");
        $stmt->execute([$name, $email, $message]);
        $_SESSION['success'] = 'Message sent successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
 }

 header('Location: index.php');