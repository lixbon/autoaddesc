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
$json1 = file_get_contents('prosmm.json');
$data1 = json_decode($json1);
$json2 = file_get_contents('justanother.json');
$data2 = json_decode($json2);
$json3 = file_get_contents('resellerru.json');
$data3 = json_decode($json3);
$json4 = file_get_contents('secsers.json');
$data4 = json_decode($json4);
// Lặp qua từng đối tượng trong mảng và thực hiện truy vấn
foreach ($data1->services as $service) {
    //
    $id = $service->id;
//Edit Desc
    // $description =$service->description;
    // $sql = "UPDATE services SET service_description = ? WHERE api_service = ? AND service_api = 1";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("si", $description, $id);
// //    //Edit AVG time
    $avgtime=$service->average_time;  
    $sql = "UPDATE services SET time = ? WHERE api_service = ? AND service_api = 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $avgtime, $id);
//

// Thực hiện truy vấn SQL
if ($stmt->execute() === true) {
    echo "Dữ liệu ProSMM đã được nạp thành công cho 'service_id' => $id<br>";
} else {
    echo "Lỗi khi nạp dữ liệu cho 'service_id' => $id. Lỗi: " . $conn->error . "<br>";
}
}
// Lặp qua từng đối tượng trong mảng và thực hiện truy vấn
foreach ($data2->services as $service) {
    //
    $id = $service->id;
//Edit Desc
    // $description =$service->description;
    // $sql = "UPDATE services SET service_description = ? WHERE api_service = ? AND service_api = 2";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("si", $description, $id);
// //    //Edit AVG time
    $avgtime=$service->average_time;  
    $sql = "UPDATE services SET time = ? WHERE api_service = ? AND service_api = 2";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $avgtime, $id);
//

// Thực hiện truy vấn SQL
if ($stmt->execute() === true) {
    echo "Dữ liệu Justanother đã được nạp thành công cho 'service_id' => $id<br>";
} else {
    echo "Lỗi khi nạp dữ liệu cho 'service_id' => $id. Lỗi: " . $conn->error . "<br>";
}
}
// Lặp qua từng đối tượng trong mảng và thực hiện truy vấn
foreach ($data3->services as $service) {
    //
    $id = $service->id;
//Edit Desc
    // $description =$service->description;
    // $sql = "UPDATE services SET service_description = ? WHERE api_service = ? AND service_api = 3";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("si", $description, $id);
// //    //Edit AVG time
    $avgtime=$service->average_time;  
    $sql = "UPDATE services SET time = ? WHERE api_service = ? AND service_api = 3";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $avgtime, $id);
//

// Thực hiện truy vấn SQL
if ($stmt->execute() === true) {
    echo "Dữ liệu RessellerRu đã được nạp thành công cho 'service_id' => $id<br>";
} else {
    echo "Lỗi khi nạp dữ liệu cho 'service_id' => $id. Lỗi: " . $conn->error . "<br>";
}
}
// Lặp qua từng đối tượng trong mảng và thực hiện truy vấn
foreach ($data4->services as $service) {
    //
    $id = $service->id;
//Edit Desc
    // $description =$service->description;
    // $sql = "UPDATE services SET service_description = ? WHERE api_service = ? AND service_api = 4";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("si", $description, $id);
// //    //Edit AVG time
    $avgtime=$service->average_time;  
    $sql = "UPDATE services SET time = ? WHERE api_service = ? AND service_api = 4";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $avgtime, $id);
//

// Thực hiện truy vấn SQL
if ($stmt->execute() === true) {
    echo "Dữ liệu Secsers đã được nạp thành công cho 'service_id' => $id<br>";
} else {
    echo "Lỗi khi nạp dữ liệu cho 'service_id' => $id. Lỗi: " . $conn->error . "<br>";
}
}

$conn->close();




?>