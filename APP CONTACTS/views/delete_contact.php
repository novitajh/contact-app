<?php
include 'controller/ContactController.php';

// Mendapatkan ID kontak dari URL
$id_contact = $_GET['id'];

// Membuat objek ContactController
$contactController = new ContactController();

// Panggil method delete untuk menghapus kontak
$contactController->delete($id_contact);
?>