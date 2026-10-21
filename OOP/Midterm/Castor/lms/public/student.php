<?php 
require_once __DIR__ . '/../classes/Student.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['studentPhone'], $_POST['registrationNumber'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $studentPhone = $_POST['studentPhone'];
    $registrationNumber = $_POST['registrationNumber'];

    $student = new Student();
    $result = $student->addStudent($name, $email, $studentPhone, $registrationNumber);

    if ($student->addStudent($name, $email, $studentPhone, $registrationNumber)) {
        $message = "Student successfully added";
    } else {
        $message = "Error to add student.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students LMS</title>
</head>
<body>
    <h1>Library Management System</h1>
    <a href="/../public/dashboard.php">Dashboard </a>|&nbsp;
    <a href="/../public/student.php">Student </a>|&nbsp;
    <a href="/../public/books.php">Books </a>|&nbsp;
    <a href="/../public/borrowed.php">Borrowed & Return Books</a><br><br>

    <form method="POST" action="student.php">
        Student Name: <input type="text" name="name" placeholder="Enter student name"> <br>
        Email: <input type="email" name="email" placeholder="Enter Email"> <br>
        Phone Number: <input type="number" name="phone" placeholder="Enter phone number"> <br>
        Registration Number: <input type="number" name="registrationNumber" placeholder="Registration Number"> <br>
        <button type="submit">Submit</button>
    </form>

    <h1>Students Table</h1>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Registration Number</th>
            <th>Action</th>
        </tr>
        <tr>
            amo na di kulang guys
            <td>Franz G. Castor</td>
            <td>k</td>
            <td>j</td>
            <td>h</td>
            <td style="padding: 0 "><button style="margin-right: 10px;">Edit</button><button>Delete</button></td>
        </tr>
</table>
</body>
</html>