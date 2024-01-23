<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM real_estate_leads";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set headers
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Date');
    $sheet->setCellValue('C1', 'Employee Name');
    $sheet->setCellValue('D1', 'Customer Name');
    // ... Other headers

    $row = 2;
    while ($data = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $row, $data['id']);
        $sheet->setCellValue('B' . $row, $data['desiredDate']);
        $sheet->setCellValue('C' . $row, $data['employee_name']);
        $sheet->setCellValue('D' . $row, $data['name']);
        // ... Other data

        $row++;
    }

    $writer = new Xlsx($spreadsheet);
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="leads.xlsx"');
    header('Cache-Control: max-age=0');
    $writer->save('php://output');
} else {
    echo "No records found.";
}

$conn->close();
?>
