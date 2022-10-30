<?php
$name = $_POST['name'];
$id = $_POST['id'];
$password = $_POST['password'];
$email = $_POST['email'];
$department = $_POST['department'];
$conn = new mysqli('localhost', 'root', '', 'course material archive');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die('connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into teacher(name,id,password,email,department)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $name, $id, $password, $email, $department);
    $stmt->execute();
    $execval = $stmt->execute();
    echo $execval;
    echo "registration sucsessfully.....";
    $stmt->close();
    $conn->close();
}
header("Location: ../teacher_login.html", true, 301);
exit();