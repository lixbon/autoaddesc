<?php
// Thực hiện kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "services";
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối đến cơ sở dữ liệu
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Đặt bảng mã cho kết nối
$conn->set_charset("utf8");
// Lấy Json file
$json = file_get_contents('data.json');
$data = json_decode($json);
// Lặp qua từng đối tượng trong mảng và thực hiện truy vấn
foreach ($data->services as $service) {
    //
    $id = $service->id;
//Edit Desc
    // $description =$service['description'];
    // $sql = "UPDATE services SET service_description = ? WHERE api_service = ?";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("si", $description, $id);
//    //Edit AVG time
    $avgtime=$service->average_time;  
    $sql = "UPDATE services SET time = ? WHERE api_service = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $avgtime, $id);
//

// Thực hiện truy vấn SQL
if ($stmt->execute() === true) {
    echo "Dữ liệu đã được nạp thành công cho 'service_id' => $id<br>";
} else {
    echo "Lỗi khi nạp dữ liệu cho 'service_id' => $id. Lỗi: " . $conn->error . "<br>";
}
}

$conn->close();




?>