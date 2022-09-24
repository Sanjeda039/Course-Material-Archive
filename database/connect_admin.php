<?php
$name = $_POST['name'];
$id = $_POST['id'];
$password = $_POST['password'];
$email = $_POST['email'];
$conn = new mysqli('localhost', 'root', '', 'course material archive');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die('connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into admin(name,id,password,email)
    values(?,?,?,?)");
    $stmt->bind_param("sssi", $name, $id, $password, $email);
    $stmt->execute();
    $execval = $stmt->execute();
    echo $execval;
    echo "registration sucsessfully.....";
    $stmt->close();
    $conn->close();
}
header("Location: ../admin_home.html", true, 301);
exit();
