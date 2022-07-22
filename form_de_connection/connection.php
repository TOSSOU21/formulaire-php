<?php

    // session_start();
    // require_once 'config.php';
    // if(isset($_POST['email']) && isset($_POST['password']))
    // {
    //     $email = htmlspecialchars($_POST['email']);
    //     $password = htmlspecialchars($_POST['password']);

    //     $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
    //     $check->execute(array($email));
    //     $data = $check->fetch();
    //     $row = $check->rowCount();
    //     if($row == 1)
    //     {
    //         if(filter_var($email, FILTER_VALIDATE_EMAIL))
    //         {
    //             $password = hash('sha256', $password);
    //             if($data['password'] === $password)
    //             {
    //                 $_SESSION['user'] = $data['pseudo'];
    //                 header('location:langind.php');
    //             }else header('location:index.php?login_err=password');
    //         }else header('location:index.php?login_err=email');
    //     }else header('location:index.php?login_err=already');

    // }else header('location:index.php');










    // $servername = "localhost";
    // $username = "root";
    // $password = "root";
    
    // try {
    //   $conn = new PDO("mysql:host=$servername;dbname=form_de _connection", $username, $password);
    //   // set the PDO error mode to exception
    //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
    // } catch(PDOException $e) {
    //   echo "Connection failed: " . $e->getMessage();
    // }

    // echo 'email : '.$_POST["email"].'<br>';
    // echo 'password : ' .$_POST["password"].'<br>';

    $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "form_de _connection";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO utilisateurs (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>    