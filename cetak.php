<?php
include_once"koneksi.php";
// Include autoloader
require_once 'vendor/autoload.php';

// Use the DOMPDF namespace
use Dompdf\Dompdf;

// Create an instance of the DOMPDF class
$dompdf = new Dompdf();


// Query data from database
$sql = "SELECT * FROM brg_masuk";
$result = $conn->query($sql);

// HTML content - include your table structure here
$html = '
    <html>
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <center><h2 style="font-family:poppins;">DATA INVENTORY BARANG MASUK</h2></center>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Tipe Barang</th>
                <th>Kualitas</th>
                <th>Tanggal</th>
                <th styele="word-break: break-all;">Serial Number</th>
                <th>Jumlah Barang</th>
            </tr>';

// Populate table rows with data from database
$id = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $html .= '
            <tr>
                <td>' . $id . '</td>
                <td>' . $row["nama_brg"] . '</td>
                <td>' . $row["tipe_brg"] . '</td>
                <td>' . $row["kualitas_brg"] . '</td>
                <td>' . $row["tgl"] . '</td>
                <td>' . $row["serial_num"] . '</td>
                <td>' . $row["jlh_brg"] . '</td>
            </tr>'; $id++;
    }
} else {
    $html .= '
            <tr>
                <td colspan="3">No data found</td>
            </tr>';
}

$html .= '
        </table>
    </body>
    </html>';

// Load HTML content into DOMPDF
$dompdf->loadHtml($html);

// Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render HTML as PDF
$dompdf->render();

// Output PDF to browser (force download)
$dompdf->stream("sample_table.pdf", array("Attachment" => false));

$dompdf->set_option('debug', true);

// Close database connection
$conn->close();
?>