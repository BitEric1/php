<?php
    // local/test.php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "k9tin";

    try {
        $conn = new PDO("mysql:host=$severname;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO sinhvien (name, age, email) VALUES (:name, :age, :email)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':email', $email);



        echo "Kết nối thành công!";
    } catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage() . "Vui lòng thử lại";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local test database</title>
    <style>
    </style>
</head>

<body>

</body>

</html>
