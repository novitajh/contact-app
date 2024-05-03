<?php
include_once 'models/Contacts.php';

class ContactController {
    public function add() {
        include 'views/add_contact.php';
    }

    public function insert() {
        $contacts = new Contacts();
        // Ambil data dari form
        $no_hp = $_POST['no_hp'];
        $owner = $_POST['owner'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $perusahaan = $_POST['perusahaan'];

        // Panggil method insertContact dari model
        $result = $contacts->insertContact($no_hp, $owner, $email, $alamat, $tanggal_lahir, $jenis_kelamin, $perusahaan);

        // Setelah berhasil diinsert, redirect ke halaman dashboard
        if ($result) {
            header("Location: ../index.php");
            exit();
        } else {
            // Jika gagal, berikan pesan kesalahan atau tindakan lainnya
            echo "Gagal menambahkan kontak.";
        }
    }

    public function update() {
        $contacts = new Contacts();
        // Ambil data dari form
        $id_contact = $_POST['id_contact'];
        $no_hp = $_POST['no_hp'];
        $owner = $_POST['owner'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $perusahaan = $_POST['perusahaan'];
        
        // Panggil method updateContact dari model
        $result = $contacts->updateContact($id_contact, $no_hp, $owner, $email, $alamat, $tanggal_lahir, $jenis_kelamin, $perusahaan);
        
        // Setelah berhasil diupdate, redirect ke halaman dashboard
        if ($result) {
            header("Location: ../index.php");
            exit();
        } else {
            // Jika gagal, berikan pesan kesalahan atau tindakan lainnya
            echo "Gagal mengupdate kontak.";
        }
    }
    

    public function delete() {
        // Implementasi delete
    }
}
?>
