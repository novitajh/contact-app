<?php
include 'controller/DashboardController.php';


// Membuat objek dari DashboardController
$dashboardController = new DashboardController();

// Memanggil method index untuk menampilkan dashboard
$dashboardController->index();
?>