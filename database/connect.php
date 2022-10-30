<?php
$name = $_POST['name'];
$id = $_POST['id'];
$password = $_POST['password'];
$email = $_POST['email'];
$department = $_POST['department'];
$batch = $_POST['batch'];
$conn = new mysqli('localhost', 'root', '', 'course material archive');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die('connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into student(name,id,password,email,department,batch)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi", $name, $id, $password, $email, $department, $batch);
    $stmt->execute();
    $execval = $stmt->execute();
    echo $execval;
    header("Location: ../student_login.html", true, 301);
    echo "registration sucsessfully.....";
    $stmt->close();
    $conn->close();
    exit();
}